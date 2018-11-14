<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function products()
    {
    	return $this->belongsToMany('App\Product');
    }

    public function categoryProducts()
    {
    	return $this->hasMany('App\CategoryProduct', 'category_id', 'id');
    }
}
