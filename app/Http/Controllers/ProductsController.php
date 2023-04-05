<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categorys;
use App\Models\Citys;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use Illuminate\Support\Facades\Auth;



class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Products $products)
    {
        $categorys = Categorys::all();
        $citys = Citys::all();
        $products = Products::where('user_id','=',Auth::user()->id)->get();
        // dd($products);
        return view('dashboard', ['products' => $products, 'categorys' => $categorys, 'citys' => $citys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Categorys::all();
        $citys = Citys::all();
        return view('add',compact('citys', 'categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('image','public');
        $data = Products::create($data + ['user_id' => Auth()->user()->id]);

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        $user = Auth()->user();
        $products = Products::find($user->id == $products->user_id);
        return view('dashboard')->with('products', $products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Products::find($id);
        return view('/edit')->with('products', $products);
        // return "gala";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductsRequest  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductsRequest $request, Products $products)
    {
        $user = Auth()->user();
        if (!$user->can('edit All product')  && $user->id != $products->user_id) {
            return response([
                'status' => false,
                'message' => "You don't have permission to edit this product!",
            ], 200);
        }else $products->update($request->all());

        return redirect('/dashboard');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        $user = Auth()->user();
        if (!$user->can('delete All product')  && $user->id != $products->user_id) {
            return response([
                'status' => false,
                'message' => "You don't have permission to delete this product!",
            ], 200);
        }else $products->delete();

        return redirect('/dashboard');
    }
}
