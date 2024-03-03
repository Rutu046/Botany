<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class leadercontroller extends Controller
{
    public function leader()
    {
        return view("views.leadership");
    }
}
