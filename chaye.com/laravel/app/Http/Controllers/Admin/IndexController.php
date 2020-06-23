<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
class IndexController extends CommonController
{
   public function index()
   {
   	/*return view("admin.error")->with(["message"	=>"成功","url"		=>url('/'),"jumpTime"	=>"3","name"=>"测试"],);*/
   	return view('Admin.Index.index');
   }
}
