<?php

namespace App\Http\Controllers;

use App\Company;
use App\Product;
use Illuminate\Http\ProductRequest;
use App\Workers\Services\ProductService;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('role:admin', ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $role_list = Role::pluck('name', 'id');
       $company_list = Company::pluck('name', 'id');
       $product_type = config('producttype');

       return view('product.create', compact('company_list', 'product_type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $product = new Product;

        $service = new ProductService;
        $status = $service->storeProduct($product, $input);

        if($status) {
            Session::flash('success', 'Product created successfully.');
        } else {
            Session::flash('error', 'Failed to create Product. Please try again.');
        }

        return redirect(action('ProductController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $company_list = Company::pluck('name', 'id');
        $product_type = config('producttype');

        return view(
            'product.edit',
            compact('product', 'company_list', 'product_type')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $input = $request->all();

        $service = new ProductService;
        $status = $service->updateProduct($product, $input);

        if($status) {
            Session::flash('success', 'Product updated successfully.');
        } else {
            Session::flash('error', 'Failed to update Product. Please try again.');
        }

        return redirect(action('ProductController@edit', $product->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $service = new ProductService;
        $status = $service->deleteProduct($product);

        if($status) {
            Session::flash('success', 'Product deleted successfully.');
        } else {
            Session::flash('error', 'Failed to delete Product. Please try again.');
        }

        return redirect(action('ProductController@index'));
    }
}
