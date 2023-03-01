<?php

namespace App\Http\Controllers;

use App\Http\Resources\JobResource;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return JobResource::collection($jobs);
    }

    public function detail($id)
    {
        $post = Job::findOrFail($id);
        return New JobResource($post);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:225',
            'description' => 'required',
            'education_level' => 'required|max:225',
            'start_date' => 'required',
            'end_date' => 'required',
            'quota' => 'required'
        ]);

        $job = Job::create($request->all());
        return New JobResource($job);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:225',
            'description' => 'required',
            'education_level' => 'required|max:225',
            'start_date' => 'required',
            'end_date' => 'required',
            'quota' => 'required'
        ]);

        $job = Job::findOrFail($id);
        $job->update($request->all());

        return New JobResource($job);
    }

    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return New JobResource($job);
    }
}
