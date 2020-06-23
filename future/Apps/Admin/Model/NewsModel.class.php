<?php
namespace Admin\Model;
use Think\Model;

class NewsModel extends AdminModel {


	function FormData(){
			$data['id'] = I('get.id',0,'int');
			$data['title'] = I("post.title");
			$data['img'] = I("post.img");
			$data['content'] = I("post.content");
			$data['author'] = I("post.author");
			$data['date'] = I("post.date");
			$data['cateid'] = I("post.cateid");
			return $data;
		}
}

?>