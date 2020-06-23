<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = "photo";
    protected $primarykey = "id";
    public $timestamps = false;
    protected $fillable = ['id','name','picture','cateid'];

    public function category()
    {
    	return $this->hasOne('\App\Models\Admin\Nav','id','cateid');
    }
}
