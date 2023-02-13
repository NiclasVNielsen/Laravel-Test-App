<?php

namespace App\Http\Controllers;

use App\Models\Treasure;
use Illuminate\Http\Request;

class TreasureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('treasures.create');
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
     * @param  \App\Models\Treasure  $treasure
     * @return \Illuminate\Http\Response
     */
    public function show(Treasure $treasure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Treasure  $treasure
     * @return \Illuminate\Http\Response
     */
    public function edit(Treasure $treasure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Treasure  $treasure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Treasure $treasure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treasure  $treasure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treasure $treasure)
    {
        //
    }
}
