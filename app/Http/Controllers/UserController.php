<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController
{
    public function index()
    {
        $users = User::all();

        return $users->toResourceCollection();

        return $users->toResourceCollection();
    }

    public function show(User $user)
    {
        return $user->toResource();
    }
}
