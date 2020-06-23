<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CommonController extends Controller
{
   /* public function __construct(Request $request)
	{
	    // 判断是否已在客户端登录
	    $this->middleware(function ($request, $next) {
	        
	        $res = DB::table('admin')->where(['name'=>\Session::get('name')])->first();
	        if (!$res) {
	            return response()->view('Admin.Login.index');
	        }else{
	        	
	          }
	        return $next($request);
	        
	    });
	}*/
}
