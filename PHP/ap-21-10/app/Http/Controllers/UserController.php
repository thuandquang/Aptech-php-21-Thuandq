<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
class UserController extends Controller
{
    public function hienthibang(){
        $users = User::get();
        return view('users',['users'=>$users]);
    }
}
