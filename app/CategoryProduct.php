<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'category_id', 'note'
    ];

    public function product()
    {
    	return $this->belongsTo('App\Product');
    }

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
}
