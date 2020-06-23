<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Captcha;
use DB;
use Session;
class LoginController extends Controller
{
   public function index()
   {
   	
   	return view('Admin.Login.index');
   }

   public function check(Request $request)
   {
   		$data = $request->all();
   		if($data)
   		{
            /*$captcha = $this->validate($request,[
                  'captcha'   => 'required|captcha'
               ]);
            if($request['captcha'] == $captcha)
            {

            }*/
   			$list = DB::table('admin')->where("name",$data['name'])->where('password',md5($data['password']))->first();
   			if($data['name'] == $list->name)
   			{
   				if(md5($data['password']) == $list->password)
   				{ 
                  Session::put("name",$data['name']);
                     return view('Admin.success')->with([
                           "message"      => "登录成功",
                           "url"       => url('admin'),
                           "jumpTime"     => 3,
                           "name"         => '后台管理首页',
                        ]);		
   				}else{
   					return view('Admin.error')->with([
   							"message"		=> "密码错误",
   							"url"			=> url('admin/login'),
   							"jumpTIme"		=> 3,
   							"name"			=> "登录",
   						]);
   				}
   			}else{
   				return view('Admin.error')->with([
   						"message"		=> '该管理员不存在',
   						"url"			=> url('admin/login'),
   						"jumpTime"		=> 3,
   						"name"			=> "登录",
   					]);
   			}
   		}
   }

   public function logout()
   {
      $result = Session::forget('name');
      if($result == null)
      {
         return view('Admin.success')->with([
               "message"      => '退出成功',
               "url"          => url('admin/login'),
               "jumpTime"     => 3,
               "name"         => '登录',
            ]);
      }
   }
}
