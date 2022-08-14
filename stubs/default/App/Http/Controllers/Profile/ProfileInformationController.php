<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;

class ProfileInformationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('profile.index');
    }
}
