<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttiresModel;

class AttiresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('attires.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|max:30',
            'price'=>'required',
            'color'=>'required|max:10',
            'size'=>'required'
        ]);

        AttiresModel::create($validated);

        return redirect()->route('attires');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function attires()
    { 
        $attiresModel = AttiresModel::all();
        return View('attires/attires', compact('attiresModel'));
    }
}
