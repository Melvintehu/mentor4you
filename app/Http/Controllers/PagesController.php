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

	public function mentorenAanmelden()
	{

		return view('pages.mentor-aanmelden');

	}

	public function resultaten()
	{
		return view('pages.resultaten');
	}

	public function overons()
	{
		return view('pages.over-ons');
	}

	public function steunons()
	{
		return view('pages.steun-ons');
	}

	public function actueel()
	{
		return view('pages.actueel');
	}

}