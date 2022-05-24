<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColorProduct extends Model
{
  protected $fillable = array('color_id', 'product_id','updated_at','created_at');
  protected $table = 'color_product';
}
