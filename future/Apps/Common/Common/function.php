<?php


/**
 * TODO 基础分页的相同代码封装，使前台的代码更少
 * @param $count 要分页的总记录数
 * @param int $pagesize 每页查询条数
 * @return \Think\Page
 */
function getpage($count, $pagesize = 10) {
    $p = new \Think\Page($count, $pagesize);
    $p->setConfig('header', '<li>第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
    $p->setConfig('prev', '上一页');
    $p->setConfig('next', '下一页');
    $p->setConfig('last', '末页');
    $p->setConfig('first', '首页');
    $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
    $p->lastSuffix = false;//最后一页不显示为总页数
    return $p;
    //首页 上一页 页码 下一页 尾页 共XX条 信息
    //共<b>%TOTAL_ROW%</b>条记录 
}
function uploads_file($path,$maxSize=31457280003145728000,$exts=array('jpg', 'gif', 'png', 'jpeg','qlv','swf', 'flv', 'mp3', 'wav', 'wma', 'wmv', 'mid', 'avi', 'mpg', 'asf', 'rm', 'rmvb'))
{
        $upload = new \Think\Upload();// 实例化上传类

         $upload->maxSize   =  $maxSize ;// 设置附件上传大小

         $upload->exts      =  $exts;// 设置附件上传类型

         $upload->rootPath  = $path;

         //$upload->savePath  =  $path; // 设置附件上传目录

         $info   =  $upload->upload();  //调用上传文件的方法

         if(!$info)
         {
            exit($upload->getError()); 
         }else{
            return $info;
         }
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
?>