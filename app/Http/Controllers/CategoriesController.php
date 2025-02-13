<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = categories::all();

        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        categories::create($request->all());

        return redirect()->route('categories.index')
            ->with('success', 'Categoría creada con exito!.');
    }

    /**
     * Display the specified resource.
     */
    public function show(categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categories $categories)
    {
        return view('categories.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categories $categories)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $categories->update($request->all());

        return redirect()->route('categories.index')
            ->with('success', 'Categoría actualizada con exito!.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categories $categories)
    {
        $categories->delete();

        return redirect()->route('categories.index')
            ->with('success', 'Categoría eliminada con exito!.');
    }
}
