<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Admin\Article;
class ArticleController extends Controller
{
    public function index()
    {
    	$category = DB::table('nav')->where('parent',4)->get();
    	$list = DB::table('article')->orderBy('id','desc')->paginate(10);
    	$assign = compact("category","list");
    	return view('Home.Article.index',$assign);
    }

    public function category($id)
    {
    	$category = DB::table('nav')->where('parent',4)->get();
    	$list = DB::table('article')->where('cateid',$id)->orderBy('id','desc')->paginate(10);
    	$assign = compact("category","list");
    	return view('Home.Article.category',$assign);
    }

    public function list($id)
    {
        $category = DB::table('nav')->where('parent',4)->get();
        
    	$manage = Article::find($id);
    	$next = DB::table('article')->where('id','>',$id)->where("cateid",$manage['cateid'])->first();
    	$prev = DB::table('article')->where('id','<',$id)->where("cateid",$manage['cateid'])->first();
        $about = DB::table('article')->where('cateid',$manage['cateid'])->limit(5)->get();
    	$assign = compact("manage","next","prev","category","about");
    	return view('Home.Article.list',$assign);
    }
}
