<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

    public function index(){
    	if(IS_POST){
    		$verify = new \Think\Verify();
    		$result = $verify->check(I("post.imgcode",false));
    		if(!$result){
    			$this->error("验证码错误");
    			exit;
    		}else if(!$_POST['name'] || !md5($_POST['password'])){
    			$this->error('账号或密码错误');
    			exit;
    		}
    		$where=array(
    			"name"=>$_POST['name'],
    			"password"=>md5($_POST['password']),
    			);
    		$model = new \Admin\Model\AdminModel();
    		$manage = $model->where($where)->find();
    		if($manage){
    			session("name",$manage['name'],time()+3600*24);
    			session("id",$manage['id'],time()+3600*24);
    			$this->error("登录成功",U('index/index'));
    		}else{
    			$this->error("登录失败");
    		}
    	}
       	$this->display();
    }


    public function imgcode(){	
    	$Verify =     new \Think\Verify();
		$Verify->fontSize = 30;
		$Verify->length   = 4;
		$Verify->useNoise = false;
		$Verify->entry();
    }

    //退出登录
    public function logout(){
        session("name",null);
        session("id",null);
        $this->success("退出成功",U(CONTROLLER_NAME.'/'.'index'));
        exit;
    }
}