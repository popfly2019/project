<?php
namespace Admin\Model;
use Think\Model;
use Org\Util\String;

class NewsModel extends AdminModel {
	
		function FormData(){
			$data['id'] = I('get.id',0,'int');
			$data['name'] = I('post.name');
			$data['img'] = I('post.img');
			$data['content'] = I('post.content');
			$data['date'] = time();
			$data['cateid'] = I('post.cateid');
			$data['keywords'] = I('post.keywords');
			$data['description'] = I('post.description');
			return $data;
		}
	}


?>