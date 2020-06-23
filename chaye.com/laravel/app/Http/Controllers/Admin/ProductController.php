<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CommonController;
use App\Models\Admin\Product;
use DB;
class ProductController extends CommonController
{
    public function index()
    {
    	$list = Product::orderBy('id','desc')->paginate(5);
    	$assign = compact("list");
    	return view('Admin.Product.index',$assign);
    }

    public function add()
    {
        $category = DB::table('nav')->whereIn('parent',['3','9','10','12'])->get();
        $assign = compact("category");
    	return view('Admin.Product.add',$assign);
    }

    public function store(Request $request)
    {
        if($request->hasFile('avatar') && $request->file('avatar')->isValid())
        {
            $path = md5(time().rand(1000,9999)).".".$request->file('avatar')->getClientOriginalExtension();
            $filename = "./Uploads";
            $request->file('avatar')->move($filename,$path);
            $data = $request->all();
            $data['avatar'] = $filename."/".$path;
            $result = Product::create($data);
            if($result)
            {
                return view('Admin.success')->with([
                        "message"       => "添加成功",
                        "url"           => url('admin/product'),
                        "jumpTime"      => 3,
                        "name"          => '产品',
                    ]);
            }else{
                return redirect()->back();
            }
        }
    }

    public function edit($id)
    {
        $category = DB::table('nav')->where('parent','3')->get();
        $manage = Product::find($id);
        $assign = compact("category","manage");
        return view('Admin.Product.edit',$assign);
    }

    public function update(Request $request,$id)
    {
        $msg = Product::find($id);
        if($request['avatar'] == null)
        {
            $request['avatar'] = $msg['avatar'];
            $data = $request->except("_token","submit");
        }else{
            $path = md5(time().rand(1000,9999)).".".$request->file('avatar')->getClientOriginalExtension();
            $filename = "./Uploads";
            $request->file('avatar')->move($filenam,$path);
            $data = $request->except("_token","submit");
        }
        $result = Product::where('id',$id)->update($data);
        if($result)
        {
            return view('Admin.success')->with([
                    "message"       => "编辑成功",
                    "url"           => url('admin/product'),
                    "jumpTime"      => 3,
                    "name"          => "产品",
                ]);
        }else{
            return redirect()->back();
        }
    }

    public function forceDelete($id)
    {
        $data = Product::find($id);
        $result = $data->delete();
        if($result)
        {
            return view('Admin.success')->with([
                    "message"       => '删除成功',
                    "url"           => url('admin/product'),
                    "jumpTime"      => 3,
                    "name"          => '产品',
                ]);
        }else{
            return redirect()->back();
        }
    }
}
