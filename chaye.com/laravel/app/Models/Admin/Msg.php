<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Msg extends Model
{
    protected $table = "msg";
    protected $primarykey = "id";
    public $timestamps = false;
    protected $fillable = ['id','title','author','name','phone','email','address','content'];
}
