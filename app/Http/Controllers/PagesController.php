<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function fleurist()
    {
        return view('pages.fleurist');
    }

    public function add(Request $request)
    {
        return $request->input();
    }
}
