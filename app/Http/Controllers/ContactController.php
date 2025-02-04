<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'mail' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'Message' => 'required|string|max:150',
            'datestart' => 'required|date',
            'dateend' => 'required|date',
            'Post_id' => 'required|integer|exists:posts,id',
        ]);

        Reservation::create($request->all());

        return redirect()->back()->with('success', 'Réservation effectuée avec succès!');
    }
}
