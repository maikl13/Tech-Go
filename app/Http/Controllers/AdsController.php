<?php

namespace App\Http\Controllers;

use App\Areas;
use App\Cities;
use App\Countries;
use App\User;
use App\Ads;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (User::find(Auth::id())->admin == "1") {
            $ads = Ads::all();
            return view('ads.index', ["ads" => $ads]);
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
            return view('ads.create');
        } else {
            return redirect(url('/'));
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'mimes:png,jpg,jpeg',
            'title' => 'required',
            'body' => 'required',
            'url' => 'required'
        ]);

        if (User::find(Auth::id())->admin == "1") {
            $ads = new Ads();
            $ads->title = $request->title;
            $ads->body = $request->body;
            $ads->url = $request->url;
            $ads->text_1 = $request->text_1;
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename = Hash::make(microtime(TRUE)) . '.' . $extension;
            $filename = str_replace("\\", "", $filename);
            $filename = str_replace("/", "", $filename);
            $filepath = $request->image->storeAs("public/images", $filename);

            $ads->image = $filename;
            $ads->save();
            return redirect()->action('AdsController@index');
        } else {
            return redirect(url('/'));
        }


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (User::find(Auth::id())->admin == "1") {
            $ads = Ads::find($id);

            return view('ads.edit', ["ads" => $ads]);
        } else {
            return redirect(url('/'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
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
            $ads = Ads::find($id);
            $ads->title = $request->title;
            $ads->body = $request->body;
            $ads->text_1 = $request->text_1;
            $ads->url = $request->url;
            if ($request->has('image')) {
                $extension = $request->file('image')->getClientOriginalExtension();
                $filename = Hash::make(microtime(TRUE)) . '.' . $extension;
                $filename = str_replace("\\", "", $filename);
                $filename = str_replace("/", "", $filename);
                $filepath = $request->image->storeAs("public/images", $filename);
                $ads->image = $filename;
            }
            $ads->save();
            return redirect()->action('AdsController@index');
        } else {
            return redirect(url('/'));
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (User::find(Auth::id())->admin == "1") {
            $ads = Ads::find($id);
            $ads->delete();
            return redirect()->action('AdsController@index');
        } else {
            return redirect(url('/'));
        }
    }
}
