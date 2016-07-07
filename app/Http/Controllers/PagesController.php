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
        $data = [
            'titel' => Section::where('id', 1)->first(),
            'zoekmentor' => Section::where('id', 2)->first(),
            'aanmeldenmentor' => Section::where('id', 3)->first(),
            'resultaten' => Section::where('id', 4)->first(),
            'actueeltitel' => Section::where('id', 5)->first(),
            'partnerstitel' => Section::where('id', 6)->first(),
        ];
		return view('pages.homepage', compact('data'));
	}

	public function jongerenAanmelden()
	{
		return view('pages.jongeren-aanmelden');
	}

	public function contact()
	{
        $data = [
            'titel' => Section::where('id', 22)->first(),
            'bold' => Section::where('id', 23)->first(),
            'vestiging' => Section::where('id', 24)->first(),
        ];

		return view('pages.contact', compact('data'));
	}

	public function mentorenAanmelden()
	{

		return view('pages.mentor-aanmelden');

	}

	public function resultaten()
	{
        $data = [
            'titel' => Section::where('id', 15)->first(),
        ];
		return view('pages.resultaten', compact('data'));
	}

	public function overons()
	{
        $data = [
            'titel' => Section::where('id', 7)->first(),
            'kop1' => Section::where('id', 8)->first(),
            'kop2' => Section::where('id', 9)->first(),
            'kop3' => Section::where('id', 10)->first(),
            'kop4' => Section::where('id', 11)->first(),
            'hetteam' => Section::where('id', 12)->first(),
            'aanmeldbox' => Section::where('id', 13)->first(),
        ];
		return view('pages.over-ons', compact('data'));
	}

	public function steunons()
	{
        $data = [
            'titel' => Section::where('id', 16)->first(),
            'eerste_kop' => Section::where('id', 17)->first(),
            'tweede_kop' => Section::where('id', 18)->first(),
            'rekeningnummer' => Section::where('id', 19)->first(),
            'tav' => Section::where('id', 20)->first(),
            'uitleg' => Section::where('id', 21)->first(),
        ];


		return view('pages.steun-ons', compact('data'));
	}

	public function actueel()
	{
        $data = [
            'titel' => Section::where('id', 14)->first(),
        ];
		return view('pages.actueel', compact('data'));
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