<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\JobApplicant;

class Jobs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::orderBy("id","desc")->get();
        foreach($jobs as $j) {
            $applicants = JobApplicant::where("job_id", $j->id)->count();
            $j->count = $applicants;
        }
        return view("jobs.index")->with(["data" => $jobs]);
    }

    public function applicants($id) {
        $job = Job::find($id);
        $applicants = JobApplicant::where("job_id", $id)->orderBy("id","desc")->get();
        return view("jobs.applicants")->with(["job" => $job, "data" => $applicants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("jobs.create");
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
        Job::create($data);
        return redirect("/admin/jobs");
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
        $job = Job::find($id);
        return view("jobs.edit")->with(["item" => $job]);
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
        $job = Job::find($id);
        $data = $request->all();
        $job->fill($data)->save();
        return redirect("/admin/jobs");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Job::find($id)->delete();
        return redirect()->back();
    }

    public function destroyApplication($id) {
        JobApplicant::find($id)->delete();
        return redirect()->back();
    }
}
