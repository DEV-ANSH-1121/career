<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        if(empty($user->country) || empty($user->state) || empty($user->district) || empty($user->pincode) || empty($user->gender) || empty($user->dob) || empty($user->pic)){
            return redirect()->route('user.updateProfile');
        }
        return view('pages.dashboard',['user' => $user]);
    }

    public function updateProfile()
    {
        $user = auth()->user();
        return view('pages.updateProfile',['user' => $user]);
    }
}
