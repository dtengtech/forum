<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function show(User $user)
    {
        $activities = $user->activity()->with('subject')->get();
        return view('profile.show', [
            'user' => $user,
            'activities' => $activities
        ]);
    }
}
