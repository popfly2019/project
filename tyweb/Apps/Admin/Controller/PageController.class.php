<?php
namespace Admin\Controller;
use Think\Controller;
class PageController extends CommonController {
    public function index(){
    	$count = M('page')->count();
    	$page = new \Think\Page($count,10);
    	$page_str = $page->show();
    	$list = M('page')->limit($page->firstRow.','.$page->listRows)->select();
    	$this->assign("count",$count);
    	$this->assign("page_str",$page_str);
    	$this->assign("list",$list);
       	$this->display();
    }

    public function add(){
    	if(IS_POST){
    		$model = new \Admin\Model\PageModel();
    		$result = $model->CreateData($model->FormData(1));
    		if(!$result['id']){
    			$this->error($result['message'],U(CONTROLLER_NAME.'/index'),3);
    		}else{
    			$this->error($result['message'],U(CONTROLLER_NAME.'/index'),3);
    		}
    	}
    	$this->display();
    }

    public function edit(){
    	$id = I("get.id",0,'int');
    	$model = new \Admin\Model\PageModel();
    	$manage = $model->where(" id=$id ")->find();
    	if(!$manage['id']){
    		$this->error('修改数据不存在!',U(CONTROLLER_NAME.'/index'),3);
    	}

    	if(IS_POST){
    		$result = $model->EditData($model->FormData());
    		$this->error($result['message'],U(CONTROLLER_NAME.'/index'),3);
    	}else{
    		$this->assign("manage",$manage);
    	}

    	$this->display();
    }

    public function delete(){
    	$id = I("get.id",0,'int');
    	$model = new \Admin\Model\PageModel();
    	$result = $model->DeleteData($model->FormData());
    	$refresh = $result['message'];
    	$this->error($refresh,U(CONTROLLER_NAME.'/index'),3);
    }
}