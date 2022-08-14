<?php

namespace App\Http\Controllers\Profile;

use App\Actions\Fortify\UpdateUserPassword;
use Illuminate\Http\Request;

class UpdatePasswordController extends UpdateUserPassword
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $this->update($request->user(), $request->all());

        return back()->with('status', 'Your password updated');
    }
}
