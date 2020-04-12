<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubTask extends Model
{
    //
    protected $fillable = ['namesubtask', 'urgency'];

    // get the task that owns the task
    public function task(){
        return $this->belongsTo(Task::class);
    }
}
