<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//custom lang
use Illuminate\Http\Request;
use App\Http\Helpers\Localization;

class Controller extends BaseController
{
    public function __construct()
    {
        
    }
}
