<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Admin\Doc;
class DownloadController extends Controller
{
    public function index()
    {
    	$category = DB::table('nav')->where('parent',5)->get();
    	$list = DB::table('doc')->orderBy('id','desc')->paginate(10);
    	$assign = compact("category","list");
    	return view('Home.Download.index',$assign);
    }

    public function category($id)
    {
    	$category = DB::table('nav')->where('parent',5)->get();
    	$list = DB::table('doc')->where('cateid',$id)->orderBy('id','desc')->paginate(10);

    	$assign = compact("category","list");
    	return view('Home.Download.category',$assign);
    }

    public function list($id)
    {
    	$manage = Doc::find($id);
    	$category = DB::table('nav')->where('parent',5)->get();
    	$about = DB::table('doc')->where('cateid',$manage->cateid)->limit(5)->get();
    	$next = DB::table('doc')->where('id','>',$id)->where('cateid',$manage->cateid)->first();
    	$prev = DB::table('doc')->where('id','<',$id)->where('cateid',$manage->cateid)->orderBy('id','desc')->first();
    	$assign = compact("manage","category","about","next","prev");
    	return view('Home.Download.list',$assign);
    }

    public function download($id)
    {
    	$manage = Doc::find($id);
    	$files = $manage['file'];
    	$name = basename($files);
    	return response()->download($files,$name,$header = ['Content-Type'=>'application/zip;charset=utf-8']);
    }
    
}
