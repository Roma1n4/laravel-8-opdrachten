<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectStoreRequest;
use App\Http\Requests\ProjectUpdateRequest;

class ProjectController extends Controller
{

    /**Set permission on methods... */

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('permission:index project', ['only' => ['index']]);
        $this->middleware('permission:show project', ['only' => ['show']]);
        $this->middleware('permission:create project', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit project', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete project', ['only' => ['delete', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects  = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectStoreRequest $request)
    {
        //
        $project = new Project();
        $project -> name = $request->name;
        $project -> description = $request->description;
        $project -> save();
        return redirect()->route('projects.index')->with('status', 'Project created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectUpdateRequest $request, Project $project)
    {
        //
        $project->name = $request->name;
        $project->description = $request->description;
        $project->save();
        return redirect()->route('projects.index')->with('status', 'Project Updated');
    }


/**
     * Show the form for deleting the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function delete(Project $project) 
    {
        return view('admin.projects.delete', compact('project'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
        $project->delete();
        return redirect()->route('projects.index')->with('message', 'Project deleted');
    }
}
