<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Breed;
use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // \DB::enableQueryLog();
        // // Cat::destroy(1);
        // // $cat= Cat::onlyTrashed()->where('id', 1)->first();
        // $cat= Cat::where('id', 1)->first();
        // // dd($cat);
        // $cat->forceDeleteA();
        // // dd(\DB::getQueryLog());
        // dd($cat);

        $breed= Breed::create(['name' => 'breed-event']);
        // $cat= Cat::create(['name' => 'abc', 'breed_id' => 1]);
        // $breed= Breed::find(7);
        // \DB::enableQueryLog();
        // $cat= $breed->cat;
        // dd(\DB::getQueryLog());
        dd($breed);
        // $breed= Cat::find()->breed;
        // dd($cat);
        // $breed= $cat->breed;
        // dd($breed);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function show(Cat $cat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function edit(Cat $cat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cat $cat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Cat::find($id);
        $cat->delete();
    }
}
