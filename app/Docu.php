<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docu extends Model
{
    protected $table = 'documents';
    protected $fillable = ['readCount','commentCount','title','content','pureContent','regdate'];
    protected $primarykey = 'id';
    public    $timestamp = false;
}
