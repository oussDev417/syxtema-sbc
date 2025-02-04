<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use App\Instagram;
use App\Comment;
use Auth;

class Events extends Controller
{

    /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     * 
     **/
    public function index()
    {
        // return all Events
        $Events =  Instagram::all();
        $Categories =  Category::all();
        return view('Pages.Events.index',compact('Events','Categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     * 
    **/
    public function show($slug)
    {

        // To get all Events.
        $Event = Instagram::where('slug', '=', $slug)->firstOrFail();
        return view('Pages.Events.show',compact('Event'));

    }
}
