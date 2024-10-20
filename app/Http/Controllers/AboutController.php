<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
                      /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('about');
    }
}
