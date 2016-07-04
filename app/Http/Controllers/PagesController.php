<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    
	public function index()
	{
		return view('pages.homepage');
	}

	public function jongerenAanmelden()
	{
		return view('pages.jongeren-aanmelden');
	}

	public function contact()
	{
		return view('pages.contact');
	}


}
