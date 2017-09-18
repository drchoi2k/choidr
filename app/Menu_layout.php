<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_layout extends Model
{
    protected $table = 'menu_layouts';
    protected $fillable = ['menu_srl','s_no','title','list_order','regdate'];
    protected $primarykey = 'id';
    public    $timestamp = false;
}
