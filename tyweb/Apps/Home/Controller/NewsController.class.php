<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends CommonController {

    public function index(){

    	$count = M('news')->count();
    	$page = new \Think\Page($count,10);
    	$page_str = $page->show();
    	$this->assign("page_str",$page_str);

    	$list = M('news')->limit($page->firstRow.','.$page->listRows)->order("id DESC")->select();
    	$this->assign("list",$list);
        $this->display();
    }


    public function detail(){

    	if(!$_GET['id']){

    		$id = M('news')->order("id DESC")->getfield("id");

    	}else{

    		$id = $_GET['id'];

    	}

    	$detail = M('news')->where("id=$id")->find();


        $next = M('news')->where(" id<$id ")->limit(1)->find();
        $prev = M('news')->where(" id>$id ")->order("id DESC")->limit(1)->find();
        

		$this->assign("next",$next);
		$this->assign("prev",$prev);


    	$this->assign("detail",$detail);


        $this->display();
    }
}