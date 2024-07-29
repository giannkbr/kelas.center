<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryBenefits;

class HomeController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	function index()
	{
        $categoryBenefits = CategoryBenefits::all();
        return view('frontend.layouts.app', compact('categoryBenefits'));
	}
}
