<?php
namespace Admin\Controller;
use Think\Controller;
header("Content-Type:text/html;charset=utf-8");

class NavController extends CommonController {

    public function index(){
    	$count = M('nav')->count();
    	$page = new \Think\Page($count,10);
    	$page_str = $page->show();
    	$list = M('nav')->limit($page->firstRow.','.$page->listRows)->select();
    	$this->assign("page_str",$page_str);
    	$this->assign("list",$list);
        $this->display();
    }

    public function add()
    {

    	if(IS_POST)
    	{
    		$model = new \Admin\Model\NavModel();
	    	$result = $model->CreateData($model->FormData(1));
	    	if(!$result['id']){
	    		$this->error($result['message'],U(CONTROLLER_NAME.'/index'),3);
	    	}else{
	    		$this->error($result['message'],U(CONTROLLER_NAME.'/index'),3);
	    	}
    	}
    	$category = M('nav')->where(" upid=0 ")->select();
    	$this->assign("category",$category);
    	$this->display();
    }

    public function edit()
    {
    	$id = I("get.id",0,'int');
    	if(!$id){
    		$this->error("该数据不存在!",U(CONTROLLER_NAME.'/index'),3);
    	}
    	$model = new \Admin\Model\NavModel();
    	$manage = $model->where(" id=$id ")->find();
        $category = M('nav')->select();
    	if(IS_POST)
    	{
    		$result = $model->EditData($model->FormData());
    		$this->error($result['message'],U(CONTROLLER_NAME.'/index'),3);
    	}else{
    		$this->assign("manage",$manage);
            $this->assign("category",$category);
    	}
    	$this->display();
    }

    public function delete()
    {
    	$id = I("get.id",0,'int');
    	$model = new \Admin\Model\NavModel();
    	$result = $model->where(" id=$id ")->DeleteData($model->FormData());
    	$refresh = $result['message'];
    	$this->error($refresh,U(CONTROLLER_NAME.'/index'),3);
    }
}