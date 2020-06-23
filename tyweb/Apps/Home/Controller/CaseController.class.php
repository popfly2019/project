<?php
namespace Home\Controller;
use Think\Controller;
class CaseController extends CommonController {
    public function index(){

    	$count = M('case')->count();
    	$page = new \Think\Page($count,6);
    	$page_str = $page->show();
    	$this->assign("page_str",$page_str);

    	$list = M('case')->limit($page->firstRow.','.$page->listRows)->select();
    	$this->assign("list",$list);

        $this->display();
    }
}