<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Http\Requests\StoreSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;
use App\Models\Categorys;
use App\Models\Citys;
use App\Models\Products;

class SubCategoryController extends Controller
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
    public function filter($id)
    {
        return view('filter',[
            'product' => Products::where('subCategory_id', $id)->get(),
            'categorys' => Categorys::all(),
            'citys' => Citys::all(),
        ]);
        // dd($products)
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubCategoryRequest $request)
    {
        SubCategory::create($request->all());
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        $subCategory->find($subCategory->id);
        return view('dashboard',compact('subCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        $subCategory->find($subCategory->id);
        return view('dashboard',compact('subCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubCategoryRequest  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubCategoryRequest $request)
    {
        $data = [
            'id' => $request->input('id'),
            'nameSubCategory' => $request->input('nameSubCategory'),
            'category_id' => $request->input('category_id'),
        ];
        SubCategory::where('id', $request->id)->update($data);
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subCategory = SubCategory::find($id);
        $subCategory->delete();
        return redirect('/dashboard');
    }
}
