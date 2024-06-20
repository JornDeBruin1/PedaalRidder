<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Exception;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
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
            $contact = new Contact();
            $contact->voornaam = $request->input('Voornaam');
            $contact->achternaam = $request->input('Achternaam');
            $contact->email = $request->input('Email');
            $contact->telefoonnummer = $request->input('Telefoonnummer');
            $contact->save();
            return redirect()->route('index')->with('bericht', 'Bedankt voor uw bericht, we nemen zo snel mogelijk contact met u op.');  
        }
        catch(Exception $e){
            return redirect()->route('index')->with('error', 'Vul alle velden in.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {
        //
    }
}