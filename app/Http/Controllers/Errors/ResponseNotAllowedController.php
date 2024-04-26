<?php

namespace App\Http\Controllers\Errors;

use function Omega\Helpers\view;

class ResponseNotAllowedController
{
    public function handle()
    {
        return view( 'errors/error400' );
    }
}
