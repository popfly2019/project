<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";
    protected $primarykey = "id";
    public $timestamps = false;
    protected $fillable = ['id','name','avatar','ip','date','description','content','cateid'];

    public function category()
    {
    	return $this->hasOne('\App\Models\Admin\Nav','id','cateid');
    }
}
