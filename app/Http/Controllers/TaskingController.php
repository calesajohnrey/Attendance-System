<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class TaskingController extends Controller
{
    public function show(User $user)
    {
        return $user->with('taskings')->first();
    }
}
