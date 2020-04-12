<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
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

    // Determine if the given user can delete the given task
    public function destroy(User $user, Task $task)
    {

        $this->authorize('destroy', $task);
        $task->delete();
        return redirect('/tasks');
    }
}
