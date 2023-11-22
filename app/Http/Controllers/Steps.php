<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Step;

class Steps extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $steps =  Step::orderBy("id","asc")->get();
        return view("steps.index")->with(["data" => $steps]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("steps.create");
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
        if($request->hasFile('icon')) {
            $new_name = time() . $request->file('icon')->getClientOriginalName();
            $request->icon->move('uploads/images/', $new_name);
            $data['icon'] = $new_name;
        }
        Step::create($data);
        return redirect("/admin/steps");
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
        $step = Step::find($id);
        return view("steps.edit")->with(["item" => $step]);
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
        $step = Step::find($id);
        $data = $request->all();
        if($request->hasFile('icon')) {
            $new_name = time() . $request->file('icon')->getClientOriginalName();
            $request->icon->move('uploads/images/', $new_name);
            $data['icon'] = $new_name;
        }
        $step->fill($data)->save();
        return redirect("/admin/steps");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Step::find($id)->delete();
        return redirect()->back();
    }
}
