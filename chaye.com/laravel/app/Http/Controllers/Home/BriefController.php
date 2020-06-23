<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class BriefController extends Controller
{
    public function index()
    {
    	return view('Home.Brief.index');
    }
}
