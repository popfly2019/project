<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type:text/html;charset=utf-8");
class IndexController extends CommonController {

    public function index(){

    	//轮播图
    	$ad = M('ad')->select();
    	$this->assign("ad",$ad);

    	//最新动态
    	$news = M('news')->where("cateid=2")->order("id DESC")->limit(3)->select();
    	$this->assign("news",$news);

    	//业务体系
    	$yewu = M('news')->where("cateid=1")->order("id DESC")->limit(4)->select();
    	$this->assign("yewu",$yewu);
    	//公司动态
    	$gsnews = M('news')->where("cateid=2")->order("id DESC")->limit(2)->select();
    	$this->assign("gsnews",$gsnews);

        
        $this->display();
    }
}