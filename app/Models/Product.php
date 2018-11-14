<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'quantity'
    ];

    public function categories()
    {
    	return $this->belongsToMany('App\Category');
    }

    public function categoryProducts()
    {
    	return $this->hasMany('App\CategoryProduct', 'product_id', 'id');
    }
}
