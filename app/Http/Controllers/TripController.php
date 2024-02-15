<?php

namespace App\Http\Controllers;

use App\Models\trip;
use Illuminate\Http\Request;

class TripController extends Controller
{

    function trip(Request $req){
        $trip = new Trip;

        $req->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'contact' => 'required|string',
            'location' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        $trip->name = $req->input('name');
        $trip->email = $req->input('email');
        $trip->contact = $req->input('contact');
        $trip->location = $req->input('location');

        if ($req->hasFile('image') && $req->file('image')->isValid()) {
            $trip->image = $req->file('image')->store('images', 'public');
        }

        $trip->description = $req->input('description');
        $trip->save();

        return redirect('/')->with('status', 'Activity added successfully');
    }

    // Display data
    public function index()
    {
        $content = Trip::all(); // Fetch from database
        return view('activity.index', ['content' => $content]); 
    }
}