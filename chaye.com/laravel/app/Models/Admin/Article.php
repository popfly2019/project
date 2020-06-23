<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "article";
    protected $primarykey = "id";
    public $timestamps = false;
    protected $fillable = ['id','title','author','content','avatar','date','keyword','description','cateid'];

    public function article()
    {
    	return $this->hasOne('\App\Models\Admin\Nav','id','cateid');
    }

   /* public function comment()
    {
    	return $this->hasMany('\App\Models\Admin\Nav','被关联的字段','本模型需要连表的字段');
    }*/



   /* public function keyword()
    {
        return $this->belongsToMany("需要关联模型的命名空间","多对多模型的关系表名","当前模型中的关系键","被关联模型的关系键");
    }*/
}
