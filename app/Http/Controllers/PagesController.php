<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Countries;
use App\Setting;
use App\SuperCategories;
use App\Page;
use App\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (User::find(Auth::id())->admin == "1") {
            $pages = Page::all();
            return view('pages.index', ["pages" => $pages]);
        } else {
            return redirect(url('/'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (User::find(Auth::id())->admin == "1") {
            return view('pages.create');
        } else {
            return redirect(url('/'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'url' => 'required'
        ]);

        if (User::find(Auth::id())->admin == "1") {
            $page = new Page();
            $page->title=$request->title;
            $page->body=$request->body;
            $page->url=$request->url;
            $s = $page->save();
            if ($s) {
                return redirect()->action('PagesController@index');
            } else {
                return redirect(url('/'));
            }

        } else {
            return redirect(url('/'));
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if (User::find(Auth::id())->admin == "1") {
        } else {
            return redirect(url('/'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (User::find(Auth::id())->admin == "1") {
            $page = Page::find($id);
            return view('pages.edit', ["page" => $page]);
        } else {
            return redirect(url('/'));
        }
    }

    public function getPriceCountry($id)
    {
        if (User::find(Auth::id())->admin == "1") {
            $countries = Countries::find($id);
            return $countries;
        } else {
            return redirect(url('/'));
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'url' => 'required'
        ]);
        if (User::find(Auth::id())->admin == "1") {
            $page = Page::find($request->page_id);
            $page->body = $request->body;
            $page->title = $request->title;
            $page->url = $request->url;
            $page->save();
            return redirect()->action('PagesController@index');
        } else {
            return redirect(url('/'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        if (User::find(Auth::id())->admin == "1") {
        } else {
            return redirect(url('/'));
        }
    }
    public function getPage($page_name)
    {
       $page=Page::where('url',$page_name)->first(['title','body']);
       return response()->json($page);
    }
    public function getPageView($page_name)
    {
       $page=Page::where('url',$page_name)->first(['title','body']);
       return view(env('VIEW_PATH').'.page',$page);
    }
}
