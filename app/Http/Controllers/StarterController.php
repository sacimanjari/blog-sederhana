<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StarterController extends Controller
{
              /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('starter');
    }
}
