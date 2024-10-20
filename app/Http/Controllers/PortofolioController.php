<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
     /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('portofolio');
    }
}
