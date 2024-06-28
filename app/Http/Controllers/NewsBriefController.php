<?php

namespace App\Http\Controllers;

use App\Models\NewsBrief;
use Exception;
use Illuminate\Http\Request;

class NewsBriefController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $newsBrief = new NewsBrief();
            $newsBrief->email = $request->input('newsbrief');
            $newsBrief->save(); // Ensure this line is present
            return redirect()->route('index')->with('bericht', 'Bedankt voor het aanmelden voor onze nieuwsbrieven!');  
        } catch (Exception $e) {
            return redirect()->route('index')->with('error', 'Het e-mailadres is onjuist of al geregistreerd om nieuwsbrieven te ontvangen!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsBrief $newsBrief)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsBrief $newsBrief)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NewsBrief $newsBrief)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsBrief $newsBrief)
    {
        
    }
}
