<?php

namespace App\Http\Controllers;
use Request;
use App\Category;
use App\User;
use App\Post;
use Session, DB;
use Auth;
use Validator; 

class SearchController extends Controller
{

    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search()
    {   

            // Gets the Query String From Search 
            $search = \Request::get('search');
            // Searches for Featured Listings titles //
            $Listings = Post::where('Title_en', 'LIKE', '%' . $search . '%')->simplepaginate(12);
            // Categories //
            $Categories =  Category::all();
            if(count($Listings) > 0){
             return view('Pages.search',compact('Listings','search','Categories'));
            }else{
              return redirect()->back();
            }
            
    } 
}

