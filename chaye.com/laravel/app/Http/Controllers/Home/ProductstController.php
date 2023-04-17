<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Admin\Product;
class ProductController extends Controller
{
    public function index()
    {
    	$list = DB::table('product')->orderBy('id','desc')->paginate(8);
    	$category = DB::table('nav')->where('parent',3)->get();
    	$assign = compact("list","category");
    	return view('Home.Product.index',$assign);
    }

    public function category($id)
    {
    	$list = Product::where('cateid',$id)->orderBy('id','desc')->paginate(8);
    	$category = DB::table('nav')->where('parent',3)->get();
    	$assign = compact("list","category");
    	return view('Home.Product.category',$assign);
    }

    public function list($id)
    {
        $category = DB::table('nav')->where('parent',3)->get();
        
        $manage = Product::find($id);
        $next = DB::table('product')->where('id','>',$id)->where("cateid",$manage['cateid'])->first();
        $prev = DB::table('product')->where('id','<',$id)->where("cateid",$manage['cateid'])->orderBy('id','desc')->first();
        $about = DB::table('product')->where('cateid',$manage['cateid'])->limit(5)->get();
        $assign = compact("manage","next","prev","category","about");
    	return view('Home.Product.list',$assign);
    }
}
