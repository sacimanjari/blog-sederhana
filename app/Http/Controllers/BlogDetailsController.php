<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
         /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('blog-details');
    }
}
