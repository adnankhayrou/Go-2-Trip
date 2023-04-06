<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categorys;
use App\Models\Citys;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Comments;
use App\Models\User;
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
        $comments = Comments::all();
        $products = Products::where('user_id','=',Auth::user()->id)->get();
        $allProducts = Products::all();
        $user = User::all();
        return view('dashboard', ['products' => $products, 'categorys' => $categorys, 'citys' => $citys, 'comments' => $comments, 'allProducts' => $allProducts, 'user' => $user]);
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
        $categorys = Categorys::all();
        $citys = Citys::all();
        $products = Products::find($id);
        return view('/edit', ['products' => $products, 'categorys' => $categorys, 'citys' => $citys]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductsRequest  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductsRequest $request, $id)
    {
       
        // $data = $request->all();
        // $data['image'] = $request->file('image') ? $request->file('image')->store('image','public') : $products->image;
        // $products->update($data);
        // return redirect('/dashboard');

        // $products->title = $request->title;
        // $products->image = $request->file('image') ? $request->file('image')->store('image','public') : $products->image;
        // $products->description = $request->description;
        // $products->prix = $request->prix;
        // $products->city_id = $request->city_id;
        // $products->telephone = $request->telephone;
        // $products->category_id = $request->category_id;
        // $products->save();

        // return redirect('dashboard');

        $data = [
            'title' => $request->input('title'),
            'image' => $request->file('image') ? $request->file('image')->store('image','public') :  $request->image,
            'description' => $request->input('description'),
            'prix' => $request->input('prix'),
            'city_id' => $request->input('city_id'),
            'telephone' => $request->input('telephone'),
            'category_id' => $request->input('category_id'),
        ];
        Products::where('id', $id)->update($data);
        return redirect('/dashboard');


        // $products->title = $request->title;
        // $products->image = $request->file('image') ? $request->file('image')->store('image','public') : $products->image;
        // $products->description = $request->description;
        // $products->prix = $request->prix;
        // $products->city_id = $request->city_id;
        // $products->telephone = $request->telephone;
        // $products->category_id = $request->category_id;

        // Products::where('id', $products->id)->update();
        // return redirect('/dashboard');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::find($id);
        $product->delete();
        return redirect('/dashboard');
        
    }
}
