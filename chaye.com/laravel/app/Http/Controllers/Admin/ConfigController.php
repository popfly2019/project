<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CommonController;
use DB;
use App\Models\Admin\Config;
class ConfigController extends CommonController
{
    public function index()
    {
        /*$data = Config::select("name","value","name2")->get();
        $assign = compact("data");*/
        $data = Config::select("name","value","name2")->get();
        foreach($data as $key=>$value)
        {
            $list[$value['name']] = $value['value'];
        }

        $assign = compact("list","data");
    	return view('Admin.Config.index',$assign);
    }

    public function store(Request $request)
    {
        $data = $request->except("_token","submit");
        foreach($data as $key=>$value)
        {
                $manage = Config::where("name","=",$key)->update(["value"=>$value]);
        }
        
        if(false !== $manage)
        {
            return redirect()->back();
        }
    }
}
