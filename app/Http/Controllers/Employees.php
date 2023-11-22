<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\EmployeeCategory;

class Employees extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Employee::orderBy("id","asc")->get();
        foreach($data as $item) {
            $cat = EmployeeCategory::find($item->position_id);
            $item->category = $cat;
        }
        return view("employees.index")->with(["data" => $data]);
    }

    public function categories()
    {
 
        $data = EmployeeCategory::orderBy("id","asc")->get();
        return view("employees.categories")->with(["data" => $data]);
    }

    public function CreateCategories()
    {
 
        return view("employees.create-category");
    }



    public function StoreCategories(Request $request) {
        $data = $request->all();
        EmployeeCategory::create($data);
        return redirect("/admin/employees/categories");
    }

    public function deleteCategory($id) {
        EmployeeCategory::find($id)->delete();
        return redirect()->back();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = EmployeeCategory::all();
        return view("employees.create")->with(["categories" => $categories]);
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
            $request->image->move('uploads/teams/', $new_name);
            $data['image'] = $new_name;
        }
        Employee::create($data);
        return redirect("/admin/employees");
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
        $categories = EmployeeCategory::all();
        $item       = Employee::find($id);
        return view("employees.edit")->with(["item" => $item,"categories" => $categories]);
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
        $employee = Employee::find($id);
        $data = $request->all();
        if($request->hasFile('image')) {
            $new_name = time() . $request->file('image')->getClientOriginalName();
            $request->image->move('uploads/teams/', $new_name);
            $data['image'] = $new_name;
        }
        $employee->fill($data)->save();
        return redirect("/admin/employees");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::find($id)->delete();
        return redirect()->back();
    }
}
