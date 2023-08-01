<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampgroundController extends Controller
{
    public function allcamp()
    {
        return view('campgrounds.allcamp');
    }
}
