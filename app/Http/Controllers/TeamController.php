<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
                  /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('team');
    }
}
