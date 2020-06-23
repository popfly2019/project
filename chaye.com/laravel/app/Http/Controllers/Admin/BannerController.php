<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CommonController;
use App\Models\Admin\Banner;
class BannerController extends CommonController
{
    public function index()
    {
    	$list = Banner::orderBy('id','desc')->paginate(5);
    	$assign = compact("list");
    	return view('Admin.Banner.index',$assign);
    }

    public function add()
    {
    	return view('Admin.Banner.add');
    }

    public function store(Request $request)
    {
    	if($request->hasFile('picture') &&$request->file('picture')->isValid())
    	{
    		$path = md5(time().rand(1000,9999)).".".$request->file('picture')->getClientOriginalExtension();
    		$filename = "./Uploads";
    		$request->file('picture')->move($filename,$path);
    		$data = $request->all();
    		$data['picture'] = $filename."/".$path;
    		$result = Banner::create($data);
    		if($result)
    		{
    			return view('Admin.success')->with([
    					"message"		=> "添加成功",
    					"url"			=> url('admin/banner'),
    					"jumpTime"		=> 3,
    					"name"			=> "广告图",
    				]);
    		}else{
    			return redirect()->back();
    		}
    	}
    }

    public function edit($id)
    {
    	$manage = Banner::find($id);
    	$assign = compact("manage");
    	return view('Admin.Banner.edit',$assign);
    }

    public function update(Request $request,$id)
    {
    	$msg = Banner::where('id',$id)->first();
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
    	$result = Banner::where('id',$id)->update($data);
    	if(false !== $result)
    	{
    		return view('Admin.success')->with([
    				"message"		=> '编辑成功',
    				"url"			=> url('admin/banner'),
    				"jumpTime"		=> 3,
    				"name"			=> "广告图",
    			]);
    	}else{
    		return redirect()->back();
    	}

    }

    public function forceDelete($id)
    {
    	$data = Banner::find($id);
    	$result = $data->delete();
    	if($result)
    	{
    		return view('Admin.success')->with([
    				"message"		=> "删除成功",
    				"url"			=> url('admin/banner'),
    				"jumpTime"		=> 3,
    				"name"			=> "广告图",
    			]);
    	}else{
    		return redirect()->back();
    	}
    }
}
