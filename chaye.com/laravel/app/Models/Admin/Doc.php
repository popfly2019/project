<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    protected $table = "doc";
    protected $primarykey = "id";
    public $timestamps = false;
    protected $fillable = ['id','name','content','date','cateid','file'];

    public function category()
    {
    	return $this->hasOne('\App\Models\Admin\Nav','id','cateid');
    }
}
