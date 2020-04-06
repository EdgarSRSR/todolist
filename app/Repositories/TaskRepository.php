<?php


namespace App\Repositories;



class TaskRepository
{
    // Get all of the tasks for  a given user

    public function forUser(User $user){

        return $user->tasks()
                    ->orderBy('created_at', 'asc')
                    ->get();
    }

}
