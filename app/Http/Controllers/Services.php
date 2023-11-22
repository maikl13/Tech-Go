<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class Services extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $services = Service::where(function($query) {

        })->orderBy("id","desc")->get();

        return view("dashboard.services")->with(["data" => $services]);
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.create-service");
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
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . "." . $extension;
            $path = $request->file('image')->storeAs('public/images', $t);
            $image = str_replace("public/images/", "", $path);
            $data['icon'] = $image;
        } 
        $service = Service::create($data);

        return redirect(url('/') . "/admin/services");
        
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
        $service = Service::find($id);
        return view("dashboard.edit-service")->with(["service" => $service]);
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
        $service = Service::find($id);
        $data = $request->all();
        if ($request->has('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $t = strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . strtotime(date("Y-m-d H:i:s")) . rand(1000000, 9999999) . "." . $extension;
            $path = $request->file('image')->storeAs('public/images', $t);
            $image = str_replace("public/images/", "", $path);
            $data['icon'] = $image;
        } 
        $service->fill($data)->save();

        return redirect(url('/') . "/admin/services");
        
             
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::find($id)->delete();
        return redirect()->back();
    }
}
