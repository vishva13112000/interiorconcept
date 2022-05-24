<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Banner extends Model
{
    protected  $fillable = array('image','product_id','status');

    public function products()
    {
        return $this->belongsToMany(Product::class, 'banner_product');
    }
}
