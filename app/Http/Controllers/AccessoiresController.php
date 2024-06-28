<?php

namespace App\Http\Controllers;

use App\Models\Accessoires;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccessoiresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $accessoires = Accessoires::all();
        // return view('accessoires', ['accessoires' => $accessoires]);
        $helmen = Accessoires::where('type', 'helm')->get();
        $bellen = Accessoires::where('type', 'bel')->get();
        $snelbinders = Accessoires::where('type', 'snelbinder')->get();
        $verlichtingen = Accessoires::where('type', 'verlichting')->get();
        return view('accessoires', compact('helmen', 'bellen', 'snelbinders', 'verlichtingen'));
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

    /**
     * Display the specified resource.
     */
    public function show(Accessoires $accessoires)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accessoires $accessoires)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Accessoires $accessoires)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accessoires $accessoires)
    {
        //
    }
}
