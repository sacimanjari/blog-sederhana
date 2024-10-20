<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakControllers extends Controller
{
             /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('kontak');
    }
}
