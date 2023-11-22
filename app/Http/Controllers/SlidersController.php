<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Countries;
use App\Sliders;
use App\SuperCategories;
use App\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Illuminate\Support\Facades\Storage;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (User::find(Auth::id())->admin == "1") {
            $sliders = Sliders::all();
            return view('sliders.index', ["sliders" => $sliders]);
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
            return view('sliders.create');
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
//        $request->validate([
//            'title' => 'required',
//            'image' => 'mimes:jpeg,jpg,png,gif',
//        ]);
        if (User::find(Auth::id())->admin == "1") {
            $data = $request->all();
            if ($request->has('image')) {
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999);
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $t=$t . '.'.$extension;
                $path = $request->file('image')->storeAs('public/images', $t);
                $image = str_replace("public/images/", "", $path);
                $data['image'] = $image;
            }
            $s = Sliders::create($data);
            if ($s) {
                return redirect()->action('SlidersController@index');
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
            $slide = Sliders::find($id);
            return view('sliders.edit', ["slide" => $slide]);
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
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (User::find(Auth::id())->admin == "1") {
            $slide = Sliders::find($request->id);
            $data = $request->all();
            if ($request->has('image')) {
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999);
                $path = $request->file('image')->storeAs('public/images', $t);
                $image = str_replace("public/images/", "", $path);
                $data['image'] = $image;
            }

            $slide->fill($data)->save();
            
            return redirect()->back();
       
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
        } else {
            return redirect(url('/'));
        }
    }

    public function delete($id) {
        Sliders::find($id)->delete();
        return redirect()->back();
    }

    public function status_active(Request $request)
    {
        if (User::find(Auth::id())->admin == "1") {
            $slide = Sliders::find($request->id);
            if ($request->has('active')) {
                if ($request->active == 'on') {
                    $slide->active = 'true';
                } else {
                    $slide->active = 'false ';
                }
            } else {
                $slide->active = 'false ';
            }
            $slide->save();
            return redirect("/admin/sliders");
        } else {
            return redirect(url('/'));
        }

    }

    public function getSocialMedia()
    {
        $settings = Setting::whereIn('key', array('facebook', 'instagram', 'whatsapp', 'messenger'))->get(['key', 'value']);
        return Response()->json($settings);
    }
}
