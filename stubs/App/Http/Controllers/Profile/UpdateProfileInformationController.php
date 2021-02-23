<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;

class UpdateProfileInformationController extends Controller
{
    public function __invoke()
    {
        return view('profile.update-profile-information');
    }
}
