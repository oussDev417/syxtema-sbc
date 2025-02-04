<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use App\Client;
use App\Comment;
use Auth;

class Blogs extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Blogs =  Client::all();
        return view('Pages.Blogs.index',compact('Blogs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug Blogs
     * @return \Illuminate\Http\Response Blogs
     */
    public function show($slug)
    {
        // To Get All Blog 
        $Blog = Client::where('slug', '=', $slug)->firstOrFail();
        return view('Pages.Blogs.show',compact('Blog'));
    }

}
