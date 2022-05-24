<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
  protected $fillable = array('category_id', 'product_id','updated_at','created_at');
  protected $table = 'category_product';
}
