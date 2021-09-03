<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function login(Request $req)
    {
        return $req->input();
    }
}
