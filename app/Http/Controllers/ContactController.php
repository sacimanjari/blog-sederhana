<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('blog.index', compact('blogs'));
    }

    /**
* create
*
* @return void
*/
public function create()
{
    return view('blog.create');
}


/**
* store
*
* @param  mixed $request
* @return void
*/
public function store(Request $request)
{

    $this->validate($request, [
        'name'     => 'required',
        'email'    => 'required',
        'subject'       => 'required',
        'message'       => 'required'

    ]);

    
    $blog = Contact::create([
        'name'     => $request->name,
        'email'   => $request->email,
        'subject'   => $request->subject,
        'message'   => $request->message,
    ]);

    if($blog){
        return response()->json(true, 200); 
        // return redirect()->back()->with('message','success');

}



}}