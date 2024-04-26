<?php

namespace App\Http\Controllers\Errors;

use function Omega\Helpers\view;

class PageNotFoundController
{
    public function handle()
    {
        return view( 'errors/error404' );
    }
}