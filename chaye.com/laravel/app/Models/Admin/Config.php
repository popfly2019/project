<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
   protected $table = "config";
   protected $primarykey = "id";
   public $timestamps = false;
   protected $fillable = ['id','name','value'];
}
