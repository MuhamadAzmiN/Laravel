<?php

namespace App\Http\Controllers;

use App\Models\Ca;
use App\Http\Requests\StoreCaRequest;
use App\Http\Requests\UpdateCaRequest;

class CaController extends Controller
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
     * @param  \App\Http\Requests\StoreCaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ca  $ca
     * @return \Illuminate\Http\Response
     */
    public function show(Ca $ca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ca  $ca
     * @return \Illuminate\Http\Response
     */
    public function edit(Ca $ca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCaRequest  $request
     * @param  \App\Models\Ca  $ca
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCaRequest $request, Ca $ca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ca  $ca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ca $ca)
    {
        //
    }
}
