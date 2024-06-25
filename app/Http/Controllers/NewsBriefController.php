<?php

namespace App\Http\Controllers;

use App\Models\newsBrief;
use Exception;
use Illuminate\Http\Request;

class NewsBriefController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            $newsBrief = new newsBrief();
            $newsBrief->email = $request->input('newsbrief');
            return redirect()->route('index')->with('bericht', 'Bedankt voor het aanmelden op onze nieuws Brief');  
        }
        catch(Exception $e){
            return redirect()->route('index')->with('error', 'het email adres is onjuist');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(newsBrief $newsBrief)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(newsBrief $newsBrief)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, newsBrief $newsBrief)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(newsBrief $newsBrief)
    {
        //
    }
}