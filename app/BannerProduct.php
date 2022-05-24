<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BannerProduct extends Model
{
    protected $fillable = array('product_id','banner_id','updated_at','created_at');
    protected $table = 'banner_product';
}
