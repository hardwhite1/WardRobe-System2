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
        $request->validate([
            'name' => 'required|max:30',
            'price' => 'required',
            'color' => 'required|max:10',
            'size' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $data = $request->only(['name', 'price', 'color', 'size']); // get only relevant fields

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        AttiresModel::create($data);

        return redirect()->route('attires')->with('success', 'Attire created successfully.');
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
        $attiresModel = AttiresModel::findOrFail($id);
        return View('attires.edit', compact('attiresModel')); //pass associative array(kvp) to the view.
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:30',
            'price' => 'required',
            'color' => 'required|max:10',
            'size' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $attiresModel = AttiresModel::findOrFail($id);

        $attiresModel->name = $request->name;
        $attiresModel->price = $request->price;
        $attiresModel->color = $request->color;
        $attiresModel->size = $request->size;

        if ($request->hasFile('image')) {
            $attiresModel['image'] = $request->file('image')->store('images', 'public');
        }

        $attiresModel->save();

        return redirect()->route('attires');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $attiresModel = AttiresModel::findOrFail($id);
        $attiresModel->delete();

        return redirect()->route('attires');
    }

    public function attires()
    { 
        $attiresModel = AttiresModel::all();
        return View('attires/attires', compact('attiresModel'));
    }
}
