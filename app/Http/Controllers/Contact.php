<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Validator;

class Contact extends Controller
{
    /**
     * Store a newly created resource in storage.
     *Its Very Nice Natti Natasha: IlumiNATTI Supermarket Edgy and driving, with indie rock elements featuring confident electric gutiar and male
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

       $validator = Validator::make($request->all(), [
       // Do not allow any shady characters
           'name' => 'required|max:100|regex:[A-Za-z1-9 ]',
           'Message' => 'required|max:100|regex:[A-Za-z1-9 ]',
       ]);
       // Message Create
       Message::create([
        'name' => $request->name,
        'Message' => $request->Message,
    ]);
       return redirect()->back()->with('Messagge', 'Contact');
   }
}
