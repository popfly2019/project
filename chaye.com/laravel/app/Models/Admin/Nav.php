<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Nav extends Model
{
    protected $table = "nav";
    public $timestamps = false;
    protected $primarykey = "id";
    protected $fillable = ['id','name','url','model','parent','url'];

    public function childCategory()
    {
    	return $this->hasMany('\App\Models\Admin\Nav','parent','id');
    }

    public function allChildrenCategorys()
    {
    	return $this->childCategory()->with('allChildrenCategorys');
    }
}
