<?php

namespace App\Observers;

class CatObserver
{
    public function creating($cat)
    {
    	$cat->name= 'cataa';
    }

    public function created()
    {
    	//to do
    }
    public function updating()
    {
    	//to do
    }

    public function updated()
    {
    	//to do
    }
}
