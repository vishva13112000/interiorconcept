<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Tag extends Model
{
    protected  $fillable = array('name','status');

    public function products()
    {
        return $this->belongsToMany(Product::class, 'tag_product');
    }
}
