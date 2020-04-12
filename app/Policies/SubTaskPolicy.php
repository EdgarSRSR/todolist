<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SubTaskPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function destroy(Task $task, SubTask $subtask)
    {

        $this->authorize('destroy', $subtask);
        $subtask->delete();
        return redirect('/subtasks');
    }
}
