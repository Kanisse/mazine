<?php

namespace App\Http\Controllers;

use App\Models\Ouvrier;
use App\Http\Requests\StoreOuvrierRequest;
use App\Http\Requests\UpdateOuvrierRequest;

class OuvrierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOuvrierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOuvrierRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ouvrier  $ouvrier
     * @return \Illuminate\Http\Response
     */
    public function show(Ouvrier $ouvrier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ouvrier  $ouvrier
     * @return \Illuminate\Http\Response
     */
    public function edit(Ouvrier $ouvrier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOuvrierRequest  $request
     * @param  \App\Models\Ouvrier  $ouvrier
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOuvrierRequest $request, Ouvrier $ouvrier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ouvrier  $ouvrier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ouvrier $ouvrier)
    {
        //
    }
}
