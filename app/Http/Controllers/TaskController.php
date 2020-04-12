<?php

namespace App\Http\Controllers;

use App\Repositories\TaskRepository;
use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests\TaskCreateRequest;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
  public function index(){

    $tasks = Task::all();
    return $tasks;
    return view('tasks.index');
  }

  public function create(){

    return view('tasks.create');
  }

  public function store(TaskCreateRequest $request){

    auth()->user()->tasks()->create($request->all());
    Task::create($request->all());
    return redirect()->back()->with('message', 'ЗАДАЧА СОЗДАНА УСПЕШНО');
  }




    public function edit(Task $task)
    {
        //
        //$task = Task::find($id);
        //dd($task->name);
        return view('tasks.edit')->with(['task'=> $task]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Task $task)
    {
        //
        //dd($request->all());
        $task->update(['nametask' => $request->nametask]);
        return redirect()->back()->with('message', 'отредактировано');
    }

    public function complete(Task $task)
    {
        //
        //dd($request->all());
        $task->update(['completed' => $true]);
        return redirect()->back()->with('message', 'задача выполнена');
    }

    public function incomplete(Task $task)
    {
        //
        //dd($request->all());
        $task->update(['completed' => $false]);
        return redirect()->back()->with('message', 'задача не выполнена');
    }

    public function delete(Task $task)
    {
        //
        $task->delete();
        return redirect()->back()->with('message', 'удаленный');
    }





}
