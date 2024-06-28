<?php

namespace App\Http\Controllers;

use App\Models\reparatie;
use Exception;
use Illuminate\Http\Request;

class ReparatieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reparatie');
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
        try{
            $reparatie = new Reparatie();
            $reparatie->voornaam = $request->input('voornaam');
            $reparatie->achternaam = $request->input('achternaam');
            $reparatie->email = $request->input('email');
            $reparatie->bericht = $request->input('bericht');
            $reparatie->save();
            return redirect()->route('reparatie')->with('bericht', 'Bedankt voor uw bericht, we nemen zo snel mogelijk contact met u op.');  
        }
        catch(Exception $e){
            return redirect()->route('reparatie')->with('error', 'Vul alle velden in.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(reparatie $reparatie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reparatie $reparatie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reparatie $reparatie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reparatie $reparatie)
    {
        //
    }
}