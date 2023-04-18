<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categorys;
use App\Models\Citys;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Comments;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ProductsController extends Controller
{


    public function loadSubCategories($id){
        $subCategory = SubCategory::with('category')->where('category_id', $id)->get();
        return response()->json($subCategory);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Products $products)
    {
        $categorys = Categorys::paginate(5);
        $subCategory = SubCategory::paginate(5);
        $citys = Citys::paginate(100);
        $comments = Comments::all();
        $products = Products::where('user_id','=',Auth::user()->id)->paginate(5);
        // dd($products);
        $allProducts = Products::all();
        $user = User::all();
        return view('dashboard', ['products' => $products, 'categorys' => $categorys, 'subCategory' => $subCategory, 'citys' => $citys, 'comments' => $comments, 'allProducts' => $allProducts, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Categorys::all();
        $subCategory = SubCategory::all();
        $citys = Citys::all();
        return view('add',compact('citys', 'categorys', 'subCategory'));
    }

    public function get()
    {
        $allProducts = Products::all();
        $categorys = Categorys::all();
        $subCategory = SubCategory::all();
        $citys = Citys::all();
        return view('landing',compact('allProducts', 'citys', 'categorys', 'subCategory'));
    }

    public function home()
    {
        $product1 = Products::take(4)->latest()->get();
        $product2 = Products::skip(4)->take(4)->latest()->get();
        $product3 = Products::skip(8)->take(4)->latest()->get();
        $category = Categorys::all();   
        $subCategory = SubCategory::all();
        $city = Citys::all();
        return view('home',compact('product1', 'product2', 'product3', 'city', 'category', 'subCategory'));
    }


    public function display($id)
    {
        $products = Products::find($id);
        $comments = Comments::all();
        return view('/show',compact('products','comments'));
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
    // public function show($id)
    // {
    //     $products = Products::find($id);
    //     return view('/show', ['products' => $products]);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorys = Categorys::all();
        $subcategory = SubCategory::all();
        $citys = Citys::all();
        $products = Products::find($id);
        
        return view('/edit', ['products' => $products, 'subcategory' => $subcategory, 'categorys' => $categorys, 'citys' => $citys]);
        
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
        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'prix' => $request->input('prix'),
            'city_id' => $request->input('city_id'),
            'telephone' => $request->input('telephone'),
            'category_id' => $request->input('category_id'),
            'subCategory_id' => $request->input('subCategory_id'),
        ];
        
        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('image','public');
        }
        
        Products::where('id', $id)->update($data);
        return redirect('/dashboard');
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
