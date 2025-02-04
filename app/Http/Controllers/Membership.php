<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use App\Comment;
use App\Instagram;
use App\Client;
use Auth;

class Membership extends Controller
{

     /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $Memberships =  Post::latest()->simplepaginate(12);
        $Categories =  Category::all();
        return view('Pages.Membership.index',compact('Memberships','Categories'));
    }

    /** 
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     ***********************************/

    public function show($slug)
    {
        // This query to get Membership Page.
        $Membership = Post::where('slug', '=', $slug)->firstOrFail();
        // To Get All Membership. 
        $Categories =  Category::all();
        // To Get Comments. 
        $Comments = $Membership->Comments; 
        // To Get Change The Language.
        return view('Pages.Membership.show',compact('Membership','Categories','Comments'));
        
    }
}
