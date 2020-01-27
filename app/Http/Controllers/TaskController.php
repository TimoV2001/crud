<?php

namespace App\Http\Controllers;
use App\Category;
use App\Http\Requests\TaskRequest;
use App\Job;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tasks = Task::all();
        return view('tasks.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select(['name', 'id'])->get()->pluck('name', 'id');


        return view('tasks.create', ['categories' => $categories]);



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    {
        Task::create($request->all());
        return redirect()->route('task.index')->with('message','item has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param Task $task
     * @return void
     */
    public function show(Task $task)
    {
        $categories = Category::all();
        return view ('tasks.show',compact('task','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Task $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view ('tasks.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TaskRequest $request
     * @param Task $task
     * @return void
     */
    public function update(TaskRequest $request, Task $task)
    {
        $task->update($request->all());
        return redirect()->route('task.index')->with('message','item has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Task $task
     * @return void
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('task.index')->with('message','item has been deleted successfully');
    }
}
