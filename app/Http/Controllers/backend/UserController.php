<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function user_index(){
        $user = User::all();
        return view('backend.user.index', compact('user'));
    }
}
