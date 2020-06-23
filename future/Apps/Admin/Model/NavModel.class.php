<?php
namespace Admin\Model;
use Think\Model;

class NavModel extends AdminModel {


	function FormData(){
			$data['id'] = I('get.id',0,'int');
			$data['name'] = I("post.name");
			$data['upid'] = I("post.upid");
			$data['name2'] = I("post.name2");
			return $data;
		}
}

?>