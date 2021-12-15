<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\Activity;
use App\Http\Requests\TaskStoreRequest;
use App\Http\Requests\TaskUpdateRequest;

class TaskController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('permission:index task', ['only' => ['index']]);
        $this->middleware('permission:show task', ['only' => ['show']]);
        $this->middleware('permission:create task', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit task', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete task', ['only' => ['delete', 'destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ///get tasks
        $tasks = Task::all();

        //return a view with $tasks
        return view('admin.tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view create task
        $users = User::all();
        $projects = Project::all();
        $activities = Activity::all();
        return view('admin.tasks.create', compact('users', 'projects', 'activities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskStoreRequest $request)
    {
        $task = new Task();
        $task->task = $request->task;
        $task->begindate = $request->begindate;
        $task->enddate = $request->enddate;
        $task->user_id = $request->user_id;
        $task->project_id = $request->project_id;
        $task->activity_id = $request->activity_id;
        $task->save();


        return redirect()->route('tasks.index')->with('status', 'task created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
        return view('admin.tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
        $users = User::all();
        $projects = Project::all();
        $activities = Activity::all();
        return view('admin.tasks.edit', compact('users', 'projects', 'activities', 'task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(TaskUpdateRequest $request, Task $task)
    {
        //
        $task->task = $request->task;
        $task->begindate = $request->begindate;
        $task->enddate = $request->enddate;
        $task->user_id = $request->user_id;
        $task->project_id = $request->project_id;
        $task->activity_id=$request->activity_id;
        $task->save();
        return redirect()->route('tasks.index')->with('status', 'Task Updated');
    }

    public function delete(Task $task) {
        $users = User::all();
        $projects = Project::all();
        $activities = Activity::all();
        return view('admin.tasks.delete', compact('users', 'projects', 'activities', 'task'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
        $task->delete();
        return redirect()->route('tasks.index')->with('message', 'Task deleted');
    }
}
