<?php

namespace App\Http\Controllers;

use Heritage\Foundation\Auth\Access\AuthorizesRequests;
use Heritage\Foundation\Bus\DispatchesJobs;
use Heritage\Foundation\Validation\ValidatesRequests;
use Heritage\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
