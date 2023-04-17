<?php

namespace App\Http\Controllers;

use App\Models\Categorys;
use App\Http\Requests\StoreCategorysRequest;
use App\Http\Requests\UpdateCategorysRequest;
use App\Models\Citys;
use App\Models\Products;

class CategorysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('landing',[
        //     'categorys' => Categorys::all(),
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filterCategory($id)
    {
        return view('filter',[
            'product' => Products::where('category_id', $id)->get(),
            'categorys' => Categorys::all(),
            'citys' => Citys::all(),
        ]);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategorysRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategorysRequest $request)
    {
        Categorys::create($request->all());
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorys  $categorys
     * @return \Illuminate\Http\Response
     */
    public function show(Categorys $categorys)
    {
        $categorys->find($categorys->id);
        return view('dashboard',compact('categorys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorys  $categorys
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorys $categorys)
    {
        $categorys->find($categorys->id);
        return view('dashboard',compact('categorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategorysRequest  $request
     * @param  \App\Models\Categorys  $categorys
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategorysRequest $request)
    {
        $data = [
            'id' => $request->input('id'),
            'nameCategory' => $request->input('nameCategory'),
        ];
        // dd($data);
        Categorys::where('id', $request->id)->update($data);
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorys  $categorys
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Categorys::find($id);
        $category->delete();
        return redirect('/dashboard');
    }
}
