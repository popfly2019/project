<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CommonController;
use Illuminate\Support\Facades\Input;
use App\Models\Admin\Photo;
use DB;
class PhotoController extends CommonController
{
    public function index()
    {
    	$list = Photo::orderBy("id","desc")->paginate(5);
    	$assign = compact("list");
    	return view('Admin.Photo.index',$assign);
    }

    public function add()
    {
        $category = DB::table('nav')->where('parent','6')->get();
        $assign = compact("category");
    	return view('Admin.Photo.add',$assign);
    }

    public function store(Request $request)
    {
    	if($request->hasFile('picture') && $request->file('picture')->isValid())
    	{
    		$path = md5(time().rand(1000,9999)).".".$request->file('picture')->getClientOriginalExtension();
    		$filename = "./Uploads";
    		$request->file('picture')->move($filename,$path);
    		$data = $request->all();
    		$data['picture'] = $filename."/".$path;
    		$result = Photo::create($data);
    		if($result)
    		{
    			return view('Admin.success')->with([
    					"message"		=> "添加成功",
    					"url"			=> url('admin/photo'),
    					"jumpTime"		=> 3,
    					"name"			=> "相册",
    				]);
    		}else{
    			return redirect()->back();
    		}
    	}
    }

    public function edit($id)
    {
    	$manage = Photo::find($id);
        $category = DB::table('nav')->where('parent','6')->get();
    	$assign = compact("manage","category");
    	return view('Admin.Photo.edit',$assign);
    }

    public function update(Request $request, $id)
    {
    	$msg = Photo::where('id',$id)->first();
    	if($request['picture'] == null){
    		$request['picture'] = $msg['picture'];
    		$data = $request->except("_token","submit");
    	}else{
    		$path = md5(time().rand(1000,9999)).".".$request->file('picture')->getClientOriginalExtension();
    		$filename = "./Uploads";
    		$request->file('picture')->move($filename,$path);
    		$data = $request->except("_token","submit");
    		$data['picture'] = $filename."/".$path;
    	}
    	$result = Photo::where('id',$id)->update($data);
    	if(false !== $result)
    	{
    		return view('Admin.success')->with([
    				"message"		=> '编辑成功',
    				"url"			=> url('admin/photo'),
    				"jumpTime"		=> 3,
    				"name"			=> "相册",
    			]);
    	}else{
    		return redirect()->back();
    	}

    }

    public function forceDelete($id)
    {
    	$data = Photo::where('id',$id)->first();
    	$result = $data->delete();
    	if($result)
    	{
    		return view('Admin.success')->with([
    				"message"	=> "删除成功",
    				"url"		=> url('admin/photo'),
    				"jumpTime"	=> 3,
    				"name"		=> "相册",
    			]);
    	}else{
    		return view('Admin.Photo.index');
    	}
    }
}
