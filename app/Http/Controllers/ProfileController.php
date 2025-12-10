<?php

namespace App\Http\Controllers;

use App\Models\Profile;

class ProfileController
{
    public function index()
    {
        $profiles = Profile::all();

        return $profiles->toResourceCollection();
    }

    public function show(Profile $profile)
    {
        return $profile->toResource();
    }
}
