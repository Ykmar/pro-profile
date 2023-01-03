<?php

namespace App\Http\Controllers;

class LegalsController extends Controller
{
    public function __invoke()
    {
        return view('legals.index');
    }
}
