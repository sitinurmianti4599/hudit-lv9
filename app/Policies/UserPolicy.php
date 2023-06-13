<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }
    public function view(User $user, User $model)
    {
        //
    }
    public function create(User $user)
    {
        //
    }
    public function update(User $user, User $model)
    {
        //
    }
    public function delete(User $user, User $model)
    {
        if ($user->name == $model->name) {
            return false;
        }
        return true;
    }
    public function restore(User $user, User $model)
    {
        //
    }
    public function forceDelete(User $user, User $model)
    {
        //
    }

    public function data_master_show(User $model)
    {
        if ($model->role->position == 'administrator') {
            return true;
        }
        return false;
    }
}
