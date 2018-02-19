<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitCardController extends Controller
{
    public function about(){
        return view('visitcards.about');
    }

    public function resume(){
        return view('visitcards.resume');
    }

    public function contact(){
        return view('visitcards.contact');
    }
}
