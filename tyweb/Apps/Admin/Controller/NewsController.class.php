<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends CommonController {
    public function index(){

    	$count = M('news')->count();
    	$page = new \Think\Page($count,10);
    	$page_str = $page->show();

    	$list = M('news')->limit($page->firstRow.','.$page->listRows)->select();

    	$this->assign("count",$count);
    	$this->assign("page_str",$page_str);
    	$this->assign("list",$list);
       	$this->display();
    }

    public function add(){
        if(IS_POST){
            $model = new \Admin\Model\NewsModel();
            $result = $model->CreateData($model->FormData(1));
            if(!$result['id']){
                $this->error($result['message'],U(CONTROLLER_NAME.'/index'),3);
                exit;
            }else{
                $this->error($result['message'],U(CONTROLLER_NAME.'/index'),2);
                exit;
            }
        }
        $category = M('category')->select();
        $this->assign("category",$category);
        $this->display();
    }

    public function edit(){
        $id = I("get.id",0,'int');
        $model = new \Admin\Model\NewsModel();
        $manage = $model->where(" id=$id ")->find();
        $category = M('category')->select();
        if(!$manage['id']){
            $this->error('修改数据不存在!',U(CONTROLLER_NAME.'/index'),3);
            exit;
        }
        if(IS_POST){
            $result = $model->EditData($model->FormData());
            $this->error($result['message'],U(CONTROLLER_NAME.'/index'),3);
        }else{
            $this->assign("manage",$manage);
            $this->assign("category",$category);
        }
        
        $this->display();
    }

    public function delete(){
    	$id = I('get.id',0,'int');
    	$model = new \Admin\Model\NewsModel();
    	$result = $model->DeleteData($model->FormData());
    	$refresh = $result['message'];
    	$this->error($refresh,U(CONTROLLER_NAME.'/index'),3);
    }
}