<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryBenefits;
use App\Models\Benefits;
use App\Models\CategoryKelas;

class HomeController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	function index()
	{
        $benefits = Benefits::all();
        $categoryBenefits = CategoryBenefits::all();
        $categoryKelas = CategoryKelas::all();
        return view('frontend.layouts.app', compact('categoryBenefits' , 'benefits', 'categoryKelas'));
	}
}
