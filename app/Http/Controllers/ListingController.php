<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    //get and show all listings
    public function index()
    {
        //dd(request());
        return view('listings.index', 
    [
        'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
    ]);
    }
    // show single listing
    public function show(Listing $listing)
    {
        return view('listings.show',
    [
        'listing' => $listing
    ]);     
    }

    public function create()
    {
        return view('listings.create');
    }

}
