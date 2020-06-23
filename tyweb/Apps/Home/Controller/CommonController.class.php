<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type:text/html;charset=utf-8");
class CommonController extends Controller {

    function _initialize(){

        $nav = M('nav')->select();
        $this->assign("nav",$nav);

        $config = M('config')->select();
        $this->assign("config",$config);

        $page = M('page')->select();
        $this->assign("page",$page);
        
        $right_case = M('category')->where("cateid=2")->select();
        $this->assign("right_case",$right_case);

        $right_news = M('news')->order("id DESC")->limit(5)->select();
        $this->assign("right_news",$right_news);
        
    }
    function cut_str($str,$sign,$number){
        
        $array=explode($sign, $str);
        $length=count($array);
        if($number<0){
            $new_array=array_reverse($array);
            $abs_number=abs($number);
            if($abs_number>$length){
                return 'error';
            }else{
                return $new_array[$abs_number-1];
            }
        }else{
            if($number>=$length){
                return 'error';
            }else{
                return $array[$number];
            }
        }
    }
}