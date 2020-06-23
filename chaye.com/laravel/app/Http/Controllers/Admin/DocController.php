<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CommonController;
use App\Models\Admin\Doc;
use DB;
class DocController extends CommonController
{
    public function index()
    {	
    	$list = Doc::orderBy('id','desc')->paginate(2);
    	$assign = compact("list");
    	return view('Admin.Doc.index',$assign);
    }

    public function add()
    {
        $category = DB::table('nav')->where('parent',5)->get();
        $assign = compact("category");
    	return view('Admin.Doc.add',$assign);
    }

    public function store(Request $request)
    {

        if($request->hasfile('file') && $request->file('file')->isValid())
        {
            $path = md5(time().rand(1000,9999)).".".$request->file('file')->getClientOriginalExtension();
            $filename = "./Uploads";
            $request->file('file')->move($filename,$path);
            $data = $request->all();
            $data['file'] = $filename."/".$path;
            $result = Doc::create($data);
            if($result)
            {
                return view('admin.success')->with([
                        "message"       => '添加成功',
                        "url"           => url('admin/doc'),
                        "jumpTime"      => 3,
                        "name"          => "档案",
                    ]);
            }else{
                return redirect()->back();
            }
        }
    }

    public function edit($id)
    {	
    	$manage = Doc::find($id);
        $category = DB::table('nav')->where('parent',5)->get();
    	$assign = compact("manage","category");
    	return view('Admin.Doc.edit',$assign);
    }

    public function update(Request $request,$id)
    {   
        $msg = Doc::find($id);
    	if($request['file'] == null)
        {
            $request['file'] = $msg['file'];
            $data = $request->except("_token","submit");
        }else{
            $path = md5(time().rand(1000,9999)).".".$request->file('file')->getClientOriginalExtension();
            $filename = "./Uploads";
            $request->file('file')->move($filename,$path);
            $data = $request->except("_token","submit");
            $data['file'] = $filename."/".$path;

        }
        $result = Doc::where('id',$id)->update($data);
        if(false !== $result)
        {
            return view('admin.success')->with([
                    "message"       => '编辑成功',
                    "url"           => url('admin/doc'),
                    "jumpTime"      => 3,
                    "name"          => "档案",
                    ]);
        }else{
            return redirect()->back();
        }
    }

    public function forceDelete($id)
    {
    	$data = Doc::find($id);
    	$result = $data->delete();
    	if($result)
    	{
    		return view('Admin.success')->with([
    				"message"		=> '删除成功',
    				"url"			=> url('admin/doc'),
    				"jumpTime"		=> 3,
    				"name"			=> "文档",
    			]);
    	}else{
    		return redirect()->back();
    	}
    }
}
