<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Section;
use App\Page;

class PagesController extends Controller
{
    
	public function indexHome()
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
		$data = [
			'eerste_kop' => Section::where('id', 1)->first(),
            'tweede_kop' => Section::where('id', 2)->first(),
		];


		return view('pages.steun-ons', compact('data'));
	}

	public function actueel()
	{
		return view('pages.actueel');
	}


	    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'pages' => Page::paginate(20),
        ];

        return view('cms.pages.pages.overzicht', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('cms.pages.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $page = Page::create($request->all());
        
        return redirect('cms/page');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data =[
            'page' => Page::find($id),
        ];

        return view('cms.pages.pages.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $page = Page::find($id);

        $page->update($request->all());
    
        return redirect('cms/page');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        $page->delete();

        return redirect('cms/page');
    }



}