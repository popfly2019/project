<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = "banner";
    protected $primarykey = "id";
    public $timestamps = false;
    protected $fillable = ['id','name','picture','location'];
}
