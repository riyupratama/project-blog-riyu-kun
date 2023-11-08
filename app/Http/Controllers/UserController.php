<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function read($username)
    {
        $user = User::with('post')->where('username', $username)->get();
        $user = $user[0];
        
        return view('detail.user.index', compact('user'));
        // return json_encode($user);

    }
}
