<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User; 
use App\Post;
use App\Category;
use App\Instagram;
use Auth;
use File;
use Validator;


class Categorys extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Categories =  Category::all();
        return view('Pages.Cat.index',compact('Categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // To Get All Category 
        $Category = Category::where('slug', '=', $slug)->firstOrFail();
        // To Get All Listing.
        $Listings = Post::where('Category_id','=', $Category->id)->oldest()->simplepaginate(12);
        // To return All Listing on City.
        $Categories =  Category::all();
        // To return All Listing on Cites.
        $cites = Instagram::latest()->simplepaginate(3);
        return view('Pages.Cat.show',compact('Listings','Category','Categories','cites'));
       
    }
}