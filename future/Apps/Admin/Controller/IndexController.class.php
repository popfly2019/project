<?php
namespace Admin\Controller;
use Think\Controller;
header("Content-Type:text/html;charset=utf-8");

class IndexController extends CommonController {

    public function index(){
        $this->display();
    }
}