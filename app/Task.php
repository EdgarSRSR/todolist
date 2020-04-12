<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = ['nametask'];

    public function getRoutKeyName(){
      return 'name';
    }


    // get the user that owns the task
    public function user(){
        return $this->belongsTo(User::class);
    }

    // get all the subtasks for the task
    public function subtasks(){
        return $this->hasMany(SubTask::class);
    }
}
