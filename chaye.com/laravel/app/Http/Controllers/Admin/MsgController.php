<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CommonController;
use Illuminate\Support\Facades\Input;
use App\Models\Admin\Msg;
class MsgController extends CommonController
{
    public function index()
    {
        $list = Msg::orderBy("id","desc")->paginate(5);
        $assign = compact("list");
    	return view('Admin.Msg.index',$assign);
    }

    public function check($id)
    {
    	$manage = Msg::find($id);
    	$assign = compact("manage");
    	return view('Admin.Msg.check',$assign);
    }

}
