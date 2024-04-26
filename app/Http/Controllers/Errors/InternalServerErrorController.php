<?php

namespace App\Http\Controllers\Errors;

use function Omega\Helpers\view;

class InternalServerErrorController
{
    public function handle()
    {
        return view( 'errors/error500' );
    }
}
