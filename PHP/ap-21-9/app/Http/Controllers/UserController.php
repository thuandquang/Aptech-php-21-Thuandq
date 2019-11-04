<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function hienthi()
    {
        $users = DB::table('Users')->get();
        return $users;
    }
    public function hienthi1nguoi()
    {
        $user = DB::table('Users')->where('id','=',1)->get();
        return $user;
    }
    public function hienthibang()
    {
        $user = DB::table('Users')->get();
        return view;
    }
}
