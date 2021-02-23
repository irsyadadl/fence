<?php

namespace App\Http\Controllers\Profile;

use App\Actions\Fortify\UpdateUserPassword;
use Illuminate\Http\Request;

class UpdatePasswordController extends UpdateUserPassword
{

    public function __invoke(Request $request)
    {
        $this->update($request->user(), $request->all());
        return back()->with("status", "Your password updated");
    }
}
