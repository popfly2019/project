<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Admin\Photo;
class PhotoController extends Controller
{
    public function index()
    {
    	$category = DB::table('nav')->where('parent',6)->get();
    	$list = DB::table('photo')->orderBy('id','desc')->paginate(8);
    	$assign = compact("category","list");
    	return view('Home.Photo.index',$assign);
    }

    public function category($id)
    {
    	$category = DB::table('nav')->where('parent',6)->get();
    	$list = DB::table('photo')->where('cateid',$id)->orderBy('id','desc')->paginate(8);
    	$assign = compact("category","list");
    	return view('Home.Photo.category',$assign);
    }

    public function list($id)
    {
    	$manage = Photo::find($id);
    	$category = DB::table('nav')->where('parent',6)->get();
    	$about = DB::table('photo')->where('cateid',$manage['cateid'])->limit(4)->get();
    	$next = Photo::where('id','>',$id)->where('cateid',$manage['cateid'])->first();
    	$prev = Photo::where('id','<',$id)->where('cateid',$manage['cateid'])->orderBy('id','desc')->first();
    	$assign = compact("manage","category","about","next","prev");
    	return view('Home.Photo.list',$assign);
    }
}
