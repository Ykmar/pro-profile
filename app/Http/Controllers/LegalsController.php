<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class LegalsController extends Controller
{
    public function __invoke(): View
    {
        return view('legals.index');
    }
}
