<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type:text/html;charset=utf-8");
class NewsController extends Controller {

    public function index(){

        $manage = M('news')->where(" id=$_GET[id] ")->find();
        $this->assign("manage",$manage);

        $uparticle=M('news')->token(false)->where(" id<$_GET[id] ")->order("id DESC")->find();
        $nextarticle=M('news')->token(false)->where(" id>$_GET[id] ")->find();

        $this->assign('uparticle',$uparticle);
        $this->assign('nextarticle',$nextarticle);

        $this->display();
    }
}