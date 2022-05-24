<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = array('category_id','name','description','color','price','tag_id','status','size');

    public function banners()
    {
        return $this->belongsToMany(Banner::class, 'banner_product');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_product');
    }
}
