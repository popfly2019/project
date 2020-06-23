<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {

	 public function _initialize(){
        if (!$_SESSION['name'] || !$_SESSION['id']) {
            //跳转回登录页面
            $this->error('您还没有登录，请登录......', U('login/index'));
        }else{

        }
    }
}