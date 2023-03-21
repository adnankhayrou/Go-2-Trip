<?php

namespace App\Http\Controllers;

use App\Models\Citys;
use App\Http\Requests\StoreCitysRequest;
use App\Http\Requests\UpdateCitysRequest;

class CitysController extends Controller
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
     * @param  \App\Http\Requests\StoreCitysRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCitysRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Citys  $citys
     * @return \Illuminate\Http\Response
     */
    public function show(Citys $citys)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Citys  $citys
     * @return \Illuminate\Http\Response
     */
    public function edit(Citys $citys)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCitysRequest  $request
     * @param  \App\Models\Citys  $citys
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCitysRequest $request, Citys $citys)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Citys  $citys
     * @return \Illuminate\Http\Response
     */
    public function destroy(Citys $citys)
    {
        //
    }
}
