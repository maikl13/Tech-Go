<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class Projects extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = "project";
        if(request()->get('type')) {
            $type = request()->get('type');
        }
        $data = Project::where("type", $type)->orderBy("id","desc")->get();
        return view("projects.index")->with(["data" => $data, "type" => $type]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = "project";
        if(request()->get('type')) {
            $type = request()->get('type');
        }
        return view("projects.create")->with(["type" => $type]);
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
        if($request->hasFile('image')) {
            $new_name = time() . $request->file('image')->getClientOriginalName();
            $request->image->move('uploads/images/', $new_name);
            $data['image'] = $new_name;
        }
        $pr = Project::create($data);
        return redirect("/admin/projects?type=" . $pr->type );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Project::find($id);
        return view("projects.edit")->with(["item" => $item]);
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
        $item = Project::find($id);
        $data = $request->all();
        if($request->hasFile('image')) {
            $new_name = time() . $request->file('image')->getClientOriginalName();
            $request->image->move('uploads/images/', $new_name);
            $data['image'] = $new_name;
        }
        $item->fill($data)->save();
        return redirect("/admin/projects?type=" . $item->type );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::find($id)->delete();
        return redirect()->back();
    }
}
