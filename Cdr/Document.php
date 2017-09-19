<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'documents';
    protected $fillable = ['email','readCount','commentCount','title','content'];
    // protected $primarykey = 'id';
    public    $timestamp = false;
}
