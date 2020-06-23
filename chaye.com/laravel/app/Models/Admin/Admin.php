<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admin";
    public $timestamps = false;
    protected $primarykey = "id";
    protected $fillable = ['id','name','password','date'];
}
