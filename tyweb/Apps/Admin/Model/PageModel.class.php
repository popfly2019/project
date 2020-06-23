<?php
namespace Admin\Model;
use Think\Model;
use Org\Util\String;

class PageModel extends AdminModel {
	
		function FormData(){
			$data['id'] = I('get.id',0,'int');
			$data['name'] = I('post.name');
			$data['content'] = I('post.content');
			return $data;
		}
	}


?>