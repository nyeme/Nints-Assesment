<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Details;

class DetailsController extends Controller
{
    public function index()
    {
        $details = Details::with('location')->get();
        return view('welcome',compact('details'));
    }
}
