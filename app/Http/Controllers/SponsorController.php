<?php

namespace Quality\Http\Controllers;

use Illuminate\Http\Request;
use Quality\Sponsor;

class SponsorController extends Controller
{
    
    public function index() {
        $sponsors = Sponsor::all();
        $sponsors = $sponsors->groupBy('rank');
        
        return view('sponsors.index', compact('sponsors'));
    }
}
