<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectList = Project::orderByDesc('id')->get();
        return view('admin.projects.index', compact('projectList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $data = $request->only(['name', 'email', 'email_verified_at', 'image', 'password']);
    $data['email_verified_at'] = now();
    $data['remember_token'] = Str::random(10);

    Project::create($data);

    return redirect()->route('admin.projects.index')->with('message', 'Project added');
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {

        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
{
    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
        'email_verified_at' => now(), 
        'remember_token' => Str::random(10), 
    ];

    $project->update($data);

    return redirect()->route('admin.projects.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
{
    if ($project->delete()) {
        return redirect()->back()->with('message', 'The project has been deleted')->with('message_type', 'danger');
    } else {
        return redirect()->back()->with('message', 'Deletion error.')->with('message_type', 'danger');
    }
}

}
