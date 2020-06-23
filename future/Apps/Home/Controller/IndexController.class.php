<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type:text/html;charset=utf-8");
class IndexController extends Controller {

    public function index(){

    	$nav = M('nav')->select();
    	$this->assign("nav",$nav);

        
    	if(!$_GET['id'])
    	{

    		$count = M('news')->count();
    		$page = new \Think\Page($count,10);
    		$page_str = $page->show();
    		$news = M('news')->limit($page->firstRow.','.$page->listRows)->select();

    	}else{

    		$count = M('news')->where(" id=$_GET[id] ")->count();
    		$page = new \Think\Page($count,10);
    		$page_str = $page->show();
    		$news = M('news')->where(" id=$_GET[id] ")->limit($page->firstRow.','.$page->listRows)->select();

    	}

    	$this->assign("page_str",$page_str);
    	$this->assign("news",$news);

        $this->display();
    }
}