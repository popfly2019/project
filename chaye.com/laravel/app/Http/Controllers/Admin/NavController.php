<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CommonController;
use App\Models\Admin\Nav;
class NavController extends CommonController
{
    public function index()
    {
    	$list = Nav::orderBy('id','desc')->paginate(5);
    	$assign = compact("list");
    	return view('Admin.Nav.index',$assign);
    }

    public function add()
    {
    	$category = Nav::get();
    	$assign = compact("category");
    	return view('Admin.Nav.add',$assign);
    }

    public function store(Request $request)
    {
    	$data = $request->all();
    	$result = Nav::create($data);
    	if($result)
    	{
    		return view('admin.success')->with(["message"=>'添加成功',"url"=>url('admin/nav'),"jumpTime"=> 3,"name"=>'导航',
    			]);
    	}else{
    		return redriect()->back();
    	}
    }

    public function edit($id)
    {
    	$manage = Nav::find($id);
    	$category = Nav::get();
    	$assign = compact("manage","category");
    	return view('Admin.Nav.edit',$assign);
    }

    public function update(Request $request,$id)
    {
    	$data = $request->except("_token","submit");
    	$result = Nav::where('id',$id)->update($data);
    	if(false !== $result)
    	{
    		return view('Admin.success')->with(["message"=>"编辑成功","url"=>url('admin/nav'),"jumpTime"=>3,"name"=>"导航",
    			]);
    	}else{
    		return redirect()->back();
    	}
    }

    public function forceDelete($id)
    {
    	$data = Nav::find($id);
    	$result = $data->delete();
    	if($result)
    	{
    		return view('Admin.success')->with(["message"=>'删除成功',"url"=>url('admin/nav'),"jumpTime"=>3,"name"=>'导航',
    			]);
    	}
    }
}
