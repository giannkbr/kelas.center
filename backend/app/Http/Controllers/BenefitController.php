<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Benefits;
use App\Models\CategoryBenefits;

class BenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all benefits
        $benefits = Benefits::all();
        return view('backend.benefits.index', compact('benefits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.benefits.create', [
            'categoryBenefits' => CategoryBenefits::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'url' => 'required',
            'description' => 'required',
            'benefits' => 'required',
        ]);

        Benefits::create($request->all());

        return redirect()->route('benefits.index')
            ->with('success', 'Benefit created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // show

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.benefits.edit', [
            'benefit' => Benefits::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'url' => 'required',
            'description' => 'required',
            'benefits' => 'required',
        ]);

        $benefit = Benefits::find($id);
        $benefit->update($request->all());

        return redirect()->route('benefits.index')
            ->with('success', 'Benefit updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $benefit = Benefits::find($id);
        $benefit->delete();

        return redirect()->route('benefits.index')
            ->with('success', 'Benefit deleted successfully.');
    }
}
