<?php
namespace Admin\Model;
use Think\Model;

class AdminModel extends Model {

	


	function FormData(){
			$data['id'] = I('get.id',0,'int');
			$data['name'] = I('post.name');
			$data['password'] = md5(I('post.password'));
			return $data;
		}




	//数据添加-----------------------------------------------------------------------------------------------
	function CreateData($data=array()){
		if ($this->create($data)){
			return array('id'=>$this->add(),'message'=>'添加成功!'.$this->getError());
		}else{
			return array('id'=>0,'message'=>'添加失败!'.$this->getError());
		}
	}
	
	//数据修改-----------------------------------------------------------------------------------------------
	function EditData($data=array()){
		if($this->where(" id=$data[id] ")->save($data)){
			return array('id'=>$data['id'],'message'=>'修改成功!'.$this->getError());
		}else{
			return array('id'=>0,'message'=>'修改失败!'.$this->getError());
		}
	}
	
	//数据删除-----------------------------------------------------------------------------------------------
	// function DeleteData($field='id'){

	// 	if(IsPost('Delete') && $ids=GetCheckBox($_POST['checkbox'])){
			
	// 	}elseif(!IsPost('Delete') && $ids=intval($_GET['id'])){

	// 	}else{
	// 		return array('status'=>false,'message'=>'对不起，请选择ID操作!');
	// 	}	

	// 	if($this->where(" $field IN($ids) ")->delete()){
	// 		return array('status'=>true,'message'=>'删除ID '.$ids.'成功!');
	// 	}else{
	// 		return array('status'=>false,'message'=>'删除ID '.$ids.'失败!');
	// 	}
		
	// }

	function DeleteData($data=array()){
		if($this->where(" id=$data[id] ")->delete()){
			return array('id'=>$data['id'],'message'=>'删除ID'.$data['id'].'成功!'.$this->getError());
		}else{
			return array('id'=>$data['id'],'message'=>'删除ID'.$data['id'].'失败!'.$this->getError());
		}
	}
}

?>