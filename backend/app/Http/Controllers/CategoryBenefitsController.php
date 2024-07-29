<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryBenefits;

class CategoryBenefitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
      public function index()
    {
        $categories = CategoryBenefits::all();
        return view('backend.categoryBenefits.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.categoryBenefits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        CategoryBenefits::create($request->all());

        return redirect()->route('categoryBenefit.index')
            ->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.categoryBenefits.edit', [
            'category' => CategoryBenefits::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category = CategoryBenefits::find($id);
        $category->update($request->all());

        return redirect()->route('categoryBenefit.index')
            ->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // delete
        $category = CategoryBenefits::find($id);
        $category->delete();
        return redirect()->route('categoryBenefit.index')
            ->with('success', 'Category deleted successfully');
    }
}
