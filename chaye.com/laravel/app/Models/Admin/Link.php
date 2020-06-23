<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $table = "link";
    protected $primarykey = "id";
    public $timestamps = false;
    protected $fillable = ['id','name','url'];

    //查询单挑
    public function getFind($id)
    {
    	if($this->where('id',$id)->first())
    	{
    		return $this->where('id',$id)->first()->toArray();
    	}else{
    		return [];
    	}
    }

    //查询全部
    public function getAll()
    {
    	return $this->get()->toArray();
    }

    //更新数据
    public function updateData($id,$data)
    {
    	if($this->find($id))
    	{
    		return $this->where('id',$id)->update($data);
    	}else{
    		return false;
    	}
    }

    public function deleteData($id)
    {
    	if($this->where('id',$id)->first())
    	{
    		return $this->where('id',$id)->delete();
    	}else{
    		return false;
    	}
    }

    public function addData($data)
	{
	    return $this->create($data);
	}
}
