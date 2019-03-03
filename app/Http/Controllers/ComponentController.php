<?php

namespace App\Http\Controllers;

use App\Component;
use App\Product;
use Illuminate\Http\ComponentRequest;
use App\Workers\Services\ComponentService;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class ComponentController extends Controller
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
        $components = Component::all();
        return view('component.list', compact('components'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // $role_list = Role::pluck('name', 'id');
         $type_list = config('componenttype');

         return view('component.create', compact('type_list'));
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

        $component = new Component;

        $service = new ComponentService;
        $status = $service->storeComponent($component, $input);

        if($status) {
            Session::flash('success', 'Component created successfully.');
        } else {
            Session::flash('error', 'Failed to create Component. Please try again.');
        }

        return redirect(action('ComponentController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Component  $component
     * @return \Illuminate\Http\Response
     */
    public function show(Component $component)
    {
         $exp=$component->created_at->addYear($component->lifetime);

        return view('components.show', compact('component','exp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Component  $component
     * @return \Illuminate\Http\Response
     */
    public function edit(Component $component)
    {
        return view(
            'component.edit',
            compact('component')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Component  $component
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Component $component)
    {
        $input = $request->all();

        $service = new ComponentService;
        $status = $service->updateComponent($component, $input);

        if($status) {
            Session::flash('success', 'Component updated successfully.');
        } else {
            Session::flash('error', 'Failed to update Component. Please try again.');
        }

        return redirect(action('ComponentController@edit', $component->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Component  $component
     * @return \Illuminate\Http\Response
     */
    public function destroy(Component $component)
    {
        $service = new ComponentService;
        $status = $service->deleteComponent($component);

        if($status) {
            Session::flash('success', 'Component deleted successfully.');
        } else {
            Session::flash('error', 'Failed to delete Component. Please try again.');
        }

        return redirect(action('ComponentController@index'));
    }
    
    public function associateComponents(Request $request, Product $product)
    {
        $input = $request->all();
        dd($input);
    }
    
     public function associateComponentsShow(Product $product)
    {
        $component_list=Component::pluck('name','id'); 
        return view('manufacturer.product_components', compact('product','component_list' ));
    }
    
    public function associateProducts(Request $request, Component $component)
    {
        $input = $request->all();
        $component->products()->sync($input['product_id']);
        return redirect()->back();
    }

    public function associateProductsShow(Component $component)
    {
        $product_list=Product::pluck('name','id');
        $associated_product_ids = $component->products()->pluck('product_id');
        return view('manufacturer.component_products', compact('component','product_list', 'associated_product_ids' ));
    }
}
