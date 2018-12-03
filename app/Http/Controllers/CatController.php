<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Breed;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCatRequest;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users= User::with('cats')->get();
        $cats= Cat::with(['breed'])->get();
        // dd($cats);
        return view('cats.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breedIds= Breed::pluck('name','id');
        // dd($breedIds);
        return view('cats.create', compact('breedIds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCatRequest $request)
    {

        $data= $request->except(['name']);
        // $data= $request->all();
        // dd($data);
        $cat= Cat::create($data);
        return redirect()->route('cats.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function show(Cat $cat)
    {
        return view('cats.show', compact('cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function edit(Cat $cat)
    {
        $breedIds= Breed::pluck('name', 'id');
        return view('cats.edit', compact('cat', 'breedIds'));
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
        $data= $request->all();
        $cat->update($data);
        return redirect()->route('cats.show', $cat->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cat $cat)
    {
        $cat->delete();
        return redirect()->route('cats.index');
    }
}
