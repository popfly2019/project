<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CommonController;
use Illuminate\Support\Facades\Input;
use App\Models\Admin\Admin;
class AdminController extends CommonController
{
    public function index()
    {
        $list = Admin::orderBy("id","desc")->paginate(10);
        $assign = compact("list");
    	return view('Admin.Admin.index',$assign);
    }

    public function add()
    {
    	return view("Admin.Admin.add");
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = md5($request);
        $result = Admin::create($data);
        if($result)
        {
            return view('Admin.success')->with([
                "message"       => '添加成功',
                "url"           => url('admin/admin'),
                "jumpTime"      => 3,
                "name"          => '网站管理员',
                ]);
        }else{
            return redirect("admin/admin/add")->with([
                "message"       => '添加失败',
                "url"           => url('admin/admin/add'),
                "jumpTime"      => 3,
                "name"          => '网站管理员-添加操作',
                ]);
        }
    }

    public function edit($id)
    {
        $manage = Admin::find($id);
        $assign = compact("manage");
    	return view('Admin.Admin.edit',$assign);
    }

    public function update(Request $request, $id)
    {

        $msg = Admin::where('id',$id)->first();
        if($request['password'] == null)
        {
            $request['password'] = $msg['password'];
        }else{
            $request['password'] = md5($request['password']);
        }
        $data = $request->except("_token","submit");
        $result = Admin::where('id',$id)->update($data);
        if($result){
            return view('Admin.success')->with([
                "message"       => '编辑成功',
                "url"           => url('admin/admin'),
                "jumpTime"      => 3,
                "name"          => '网站管理员',
                ]);
        }else{
            return redirect()->back();
        }
    }

    public function forceDelete($id)
    {
    	$data = Admin::find($id);
    	$result = $data->delete();
    	if($result)
    	{
    		return view('Admin.success')->with([
    				"message"	=> "删除成功",
    				"url"		=> url('admin/admin'),
    				"jumpTime"	=> "3",
    				"name"		=> "网站管理员",
    			]);
    	}else{
    		return view('admin.error')->with([
    				"message"	=> "删除失败",
    				"url"		=> url('admin/admin'),
    				"jumpTime"	=> "3",
    				"name"		=> "网站管理员",
    			]);
    	}
    }

}
