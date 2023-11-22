<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seo;

class SeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seo = Seo::orderBy("id","desc")->get();
        return view("seo.index")->with(["data" => $seo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("seo.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->has('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . "." . $extension;
            $path = $request->file('image')->storeAs('public/images', $t);
            $image = str_replace("public/images/", "", $path);
            $data['seo_image'] = $image;
        } 
        Seo::create($data);
        return redirect("/admin/seo");
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
        $seo = Seo::find($id);
        return view("seo.edit")->with(["item" => $seo]);
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
        $seo = Seo::find($id);
        $data = $request->all();
        if ($request->has('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
//                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . "." . $extension;
            $path = $request->file('image')->storeAs('public/images', $t);
            $image = str_replace("public/images/", "", $path);
            $data['seo_image'] = $image;
        } 
        $seo->fill($data)->save();
        return redirect("/admin/seo");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Seo::find($id)->delete();
        return redirect()->back();
    }
}
