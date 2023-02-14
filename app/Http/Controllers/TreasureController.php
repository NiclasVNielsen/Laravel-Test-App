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
        $treasures = Treasure::latest()->paginate(5);

        return view('treasures.index', compact('treasures'))->with(request()->input('page'));
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
        //Validation
        $request->validate([
            'title' => 'required',
            'tale' => 'required',
            'value' => 'required'
        ]);

        //Create
        Treasure::create($request->all());

        //Redirect
        return redirect()->route('treasures.index')->with('noFire', 'Aaargh! The booty is stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Treasure  $treasure
     * @return \Illuminate\Http\Response
     */
    public function show(Treasure $treasure)
    {
        return view('treasures.show', compact('treasure'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Treasure  $treasure
     * @return \Illuminate\Http\Response
     */
    public function edit(Treasure $treasure)
    {
        return view('treasures.edit', compact('treasure'));
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
        //Validation
        $request->validate([
            'title' => 'required',
            'tale' => 'required',
            'value' => 'required'
        ]);

        //Update
        $treasure->update($request->all());

        //Redirect
        return redirect()->route('treasures.index')->with('noFire', 'Aaargh! The booty was changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treasure  $treasure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treasure $treasure)
    {
        //Delete treasure
        $treasure->delete();

        //Redirect user & Display Yaaaii Message!
        return redirect()->route('treasures.index')->with('noFire', 'Aaargh! The booty was buried and the place forgotten!');
    }
}
