<?php

namespace App\Http\Controllers;

use App\Models\References;
use Illuminate\Http\Request;

class ReferencesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $references = References::all();
        return view('references.index', compact('references'));
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
    public function show(References $references)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(References $references)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, References $references)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(References $references)
    {
        //
    }
}
