<?php

namespace App\Actions\Fortify\Responses;

use Laravel\Fortify\Contracts\LoginResponse;

class AppLoginResponse implements LoginResponse
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
    */
    public function toResponse($request)
    {
        $home = auth()->user()->type == 'company' ? 'company/dashboard' : 'dashboard';

        return redirect($home);
    }


}
