<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::orderBy('created_at', 'desc')->paginate(3);
        return view('jobs.index')->with('jobs', $jobs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'company_name' => 'required',
            'company_location' => 'required',
            'salary' => 'required',
            'job_types' => 'required',
            'date_posted' => 'required'
        ]);

        $job = new Job;
        $job->title = $request->input('title');
        $job->company_name = $request->input('company_name');
        $job->company_location = $request->input('company_location');
        $job->salary = $request->input('salary');
        $job->job_types = $request->input('job_types');
        $job->date_posted = $request->input('date_posted');
        $job->save();

        return redirect('/jobs')->with('success', 'Inserted Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::find($id);
        return view('jobs.show')->with('job', $job);
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

        return view('jobs.edit')->with('job', $job);
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
        $this->validate($request, [
            'title' => 'required',
            'company_name' => 'required',
            'company_location' => 'required',
            'salary' => 'required',
            'job_types' => 'required',
            'date_posted' => 'required'
        ]);

        $job = Job::find($id);
        $job->title = $request->input('title');
        $job->company_name = $request->input('company_name');
        $job->company_location = $request->input('company_location');
        $job->salary = $request->input('salary');
        $job->job_types = $request->input('job_types');
        $job->date_posted = $request->input('date_posted');
        $job->save();

        return redirect('/jobs')->with('success', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();

        return redirect('/jobs')->with('success', 'Deleted Successfully!');
    }
}
