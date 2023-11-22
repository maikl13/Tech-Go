<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Countries;
use App\Setting;
use App\SuperCategories;
use App\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (User::find(Auth::id())->admin == "1") {
            $settings = Setting::all();
            return view('settings.index', ["settings" => $settings]);
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
            return view('settings.create');
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
            'key' => 'required',
            'value' => 'required'
        ]);

        if (User::find(Auth::id())->admin == "1") {
            $setting = new Setting();
            $setting->key = $request->key;
            $setting->value = $request->value;
            $s = $setting->save();
            if ($s) {
                return redirect()->action('SettingsController@index');
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
            $setting = Setting::find($id);
            return view('settings.edit', ["setting" => $setting]);
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
        if (User::find(Auth::id())->admin == "1") {
            $setting = Setting::find($request->setting_id);
            $setting->key = $request->key;
            $setting->value = $request->value;
            $setting->save();
            return redirect()->action('SettingsController@index');
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

    public function getSocialMedia()
    {
        $settings=Setting::whereIn('key',array('facebook', 'instagram','whatsapp','messenger','snapchat'))->get(['key','value']);
        return Response()->json($settings);
    }
}
