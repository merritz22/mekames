<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Models\Appreciation;

class AppreciationController extends Controller
{
    protected $guard;


    public function create(Request $request)
    {
        echo($request);
        die();
    }
}
