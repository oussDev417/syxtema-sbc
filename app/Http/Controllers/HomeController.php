<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\ImageUpload;
use App\User; 
use App\Category;
use App\Instagram;
use App\Gallery;
use App\Client;
use App\Post;
use Auth;
use File;
use Validator; 

class HomeController extends Controller
{

    /**************************
     * 
     * Show the application dashboard.
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     * 
    ***************************/
    public function index()
    {
    	$Categories =  Category::all();
        $spaces = Post::oldest()->simplepaginate(8);
        $Blogs =  Client::latest()->simplepaginate(8);
        return view('Pages/home', compact('Categories','spaces','Blogs'));
    }

    /********************************
     * Show the application dashboard
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     *******************************/
    public function ThePlace()
    {
        $spaces = Post::oldest()->simplepaginate(8);
        return view('Pages/ThePlace',compact('spaces'));
    }

     /***********************************
     * Show the application dashboard.
     *
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     * 
     **********************************/
    public function Contacts()
    {
        $spaces = Post::oldest()->simplepaginate(8);
        return view('Pages/Contacts',compact('spaces'));
    }



    
    
}
