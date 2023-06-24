<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    function frontendindex() {
        return view('frontend.home.index');
    }
    function backendindex() {
        return view('backend.dashboard.index');
    }
}
