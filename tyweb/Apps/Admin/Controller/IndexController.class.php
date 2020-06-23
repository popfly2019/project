<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {

    public function index(){
    	$news_count = M('news')->count();
    	$page_count = M('page')->count();
    	$admin_count = M('admin')->count();
    	$this->assign('news_count',$news_count);
    	$this->assign("page_count",$page_count);
    	$this->assign("admin_count",$admin_count);
       	$this->display();
    }
}