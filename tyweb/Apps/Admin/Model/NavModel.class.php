<?php
namespace Admin\Model;
use Think\Model;
use Org\Util\String;

class NavModel extends AdminModel {
	
		function FormData(){
			$data['id'] = I("get.id",0,'int');
			$data['name'] = I('post.name');
			$data['url'] = I('post.url');
			$data['module'] = I('post.module');
			$data['open'] = I('post.open',0,'int');
			$data['top'] = I('post.top',0,'int');
			return $data;
		}
	}


?>