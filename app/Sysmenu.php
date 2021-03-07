<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sysmenu extends Model
{
    protected $table = 'sysmenus';
    protected $hidden = ['created_at','updated_at','deleted_at'];
}
