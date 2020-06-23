<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Input;
use App\Models\Admin\Nav;
class MessageController extends Controller
{
    public function index(Request $request)
    {
    	//$categorys = Nav::where('parent',3)->with('allChildrenCategorys')->get()->toArray();

    	if(Input::method() == 'POST')
    	{
    		$data = $request->except("_token","button");
    		$result = DB::table('msg')->insert($data);
    	}else{
    		$list = Nav::whereIn('parent',['3','9','10','12'])->get()->toArray();
	    	$category = array();
	    	foreach($list as $key=>$value)
	    	{
	    		if($value['parent'] == 3)
	    		{
	    			$category[] = $value;
	    		}

	    		foreach($category as $k=>$v)
	    		{
	    			if($value['parent'] == $v['id'])
	    			{
	    				$category[$k]['nav_son'][] = $value;
	    			}
	    		}
	    	}
	    	$assign = compact("category");
	    	return view('Home.Message.index',$assign);
    	}
    }
}
