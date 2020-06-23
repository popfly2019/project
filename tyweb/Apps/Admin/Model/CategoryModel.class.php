<?php
namespace Admin\Model;
use Think\Model;
use Org\Util\String;

class CategoryModel extends AdminModel {
	
		function FormData(){
			$data['id'] = I("get.id",0,'int');
			$data['name'] = I('post.name');
			$data['cateid'] = I('post.cateid',0,'int');
			return $data;
		}
	}


?>