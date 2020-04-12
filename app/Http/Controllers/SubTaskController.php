<?php

namespace App\Http\Controllers;

use App\Repositories\TaskRepository;
use App\SubTask;
use Illuminate\Http\Request;

class SubTaskController extends Controller
{
  public function index(){

    $subtasks = SubTask::all();
    return $subtasks;
    return view('subtasks.index');
  }

  public function create(){

    return view('subtasks.create');
  }

  public function store(SubTaskCreateRequest $request){

    auth()->user()->subtasks()->create($request->all());
    SubTask::create($request->all());
    return redirect()->back()->with('message', 'ПОДЗАДАЧА СОЗДАНА УСПЕШНО');
  }




    public function edit(SubTask $Subtask)
    {
        //
        //$task = Task::find($id);
        //dd($task->name);
        return view('subtasks.edit')->with(['subtask'=> $subtask]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubTask  $subtask
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,SubTask $Subtask)
    {
        //
        //dd($request->all());
        $Subtask->update(['namesubtask' => $request->namesubtask]);
        return redirect()->back()->with('message', 'отредактировано');
    }

    public function complete(SubTask $Subtask)
    {
        //
        //dd($request->all());
        $subtask->update(['completed' => $true]);
        return redirect()->back()->with('message', 'подзадача выполнена');
    }

    public function incomplete(SubTask $subtask)
    {
        //
        //dd($request->all());
        $subtask->update(['completed' => $false]);
        return redirect()->back()->with('message', 'подзадача не выполнена');
    }

    public function delete(SubTask $subtask)
    {
        //
        $subtask->delete();
        return redirect()->back()->with('message', 'удаленный');
    }
}
