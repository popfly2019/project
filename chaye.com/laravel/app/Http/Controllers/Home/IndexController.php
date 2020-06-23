<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Admin\Config;
use Illuminate\Support\Facades\Redis;
class IndexController extends Controller
{
   public function index()
   {

   	//产品
   	$product = DB::table('product')->orderBy('id','desc')->limit(6)->get();


   	//友情链接
   	$link = DB::table('link')->orderBy('id','desc')->get();


    $assign = compact("product","link");

   	return view("Home.Index.index",$assign);
   }
}
