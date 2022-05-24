<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pimage extends Model
{
    protected  $fillable = array('product_id','image','sequence','status');
}
