<?php

namespace App\Http\Controllers;

use App\Models\rent;
use App\Models\Accessoires;
use App\Models\Fietsen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $helmen = Accessoires::where('type', 'helm')->get();
        $bellen = Accessoires::where('type', 'bel')->get();
        $snelbinders = Accessoires::where('type', 'snelbinder')->get();
        $verlichtingen = Accessoires::where('type', 'verlichting')->get();
        $fietsen = Fietsen::all();

        return view('rent', compact('helmen', 'bellen', 'snelbinders', 'verlichtingen', 'fietsen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
}
