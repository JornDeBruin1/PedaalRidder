<?php

namespace App\Http\Controllers;

use App\Models\reperatie;
use Exception;
use Illuminate\Http\Request;

class ReperatieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reperatie');
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
            $reperatie = new Reperatie();
            $reperatie->voornaam = $request->input('voornaam');
            $reperatie->achternaam = $request->input('achternaam');
            $reperatie->email = $request->input('email');
            $reperatie->bericht = $request->input('bericht');
            $reperatie->save();
            return redirect()->route('reperatie')->with('bericht', 'Bedankt voor uw bericht, we nemen zo snel mogelijk contact met u op.');  
        }
        catch(Exception $e){
            return redirect()->route('reperatie')->with('error', 'Vul alle velden in.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(reperatie $reperatie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reperatie $reperatie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reperatie $reperatie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reperatie $reperatie)
    {
        //
    }
}