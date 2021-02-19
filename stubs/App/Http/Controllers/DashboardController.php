<?php

namespace Irsyadadl\Fence\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('dashboard');
    }
}
