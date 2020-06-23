<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CommonController;
use App\Models\Admin\Link;
class LinkController extends CommonController
{
    public function index()
    {
    	$list = Link::orderBy("id","desc")->paginate(5);
    	$assign = compact("list");
    	return view('Admin.Link.index',$assign);
    }

    public function add()
    {
    	return view('Admin.Link.add');
    }

    public function store(Request $request)
    {
    	$data = $request->all();
    	$result = Link::create($data);
    	if($result)
    	{
    		return view('Admin.success')->with([
    				"message"		=> '添加成功',
    				"url"			=> url('admin/link'),
    				"jumpTime"		=> 3,
    				"name"			=> '友情链接',
    			]);
    	}else{
    		return redirect()->back();
    	}

    }

    public function edit($id)
    {
    	$manage = Link::find($id);
    	$assign = compact("manage");
    	return view('Admin.Link.edit',$assign);
    }

    public function update(Request $request,$id)
    {
    	$data = $request->except("_token","submit");
    	$result = Link::where('id',$id)->update($data);
    	if(false !== $result)
    	{
    		return view('Admin.success')->with([
    				"message"		=> '编辑成功',
    				"url"			=> url('admin/link'),
    				"jumpTime"		=> 3,
    				"name"			=> "友情链接",
    			]);
    	}else{
    		return redirect()->back();
    	}
    }

    public function forceDelete($id)
    {
    	$data = Link::find($id);
    	$result = $data->delete();
    	if($result)
    	{
    		return view('Admin.success')->with([
    				"message"		=> '删除成功',
    				"url"			=> url('admin/link'),
    				"jumpTime"		=> 3,
    				"name"			=> "友情链接",
    			]);
    	}else{
    		return redriect()->back();
    	}
    }
}
