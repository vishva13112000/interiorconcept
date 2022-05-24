<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagProduct extends Model
{
    protected $fillable = array('product_id','tag_id','updated_at','created_at');
    protected $table = 'tag_product';
}
