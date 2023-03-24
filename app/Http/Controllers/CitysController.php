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
        $citys = Citys::orderBy('id')->get();
        return view('dashboard')->with('citys', $citys);
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
        Citys::create($request->all());
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Citys  $citys
     * @return \Illuminate\Http\Response
     */
    public function show(Citys $citys)
    {
        $citys->find($citys->id);
        return view('dashboard')->with('citys', $citys);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Citys  $citys
     * @return \Illuminate\Http\Response
     */
    public function edit(Citys $citys)
    {
        $citys->find($citys->id);
        return view('/edit')->with('citys', $citys);
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
        $citys->update($request->all());
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Citys  $citys
     * @return \Illuminate\Http\Response
     */
    public function destroy(Citys $citys)
    {
        $citys->delete();
    }
}
