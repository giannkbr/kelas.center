<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryKelas;

class CategoryKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoryKelas = CategoryKelas::all();
        return view('backend.categoryKelas.index', compact('categoryKelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.categoryKelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        CategoryKelas::create($request->all());

        return redirect()->route('categoryKelas.index')
            ->with('success', 'Category created successfully.');
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
        return view('backend.categoryKelas.edit', [
            'category' => CategoryKelas::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // updaet date
        $request->validate([
            'name' => 'required',
        ]);

        $category = CategoryKelas::find($id);
        $category->update($request->all());

        return redirect()->route('CategoryKelas.index')
            ->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // deelte data
        CategoryKelas::find($id)->delete();
        return redirect()->route('categoryKelas.index')
            ->with('success', 'Category deleted successfully');
    }
}
