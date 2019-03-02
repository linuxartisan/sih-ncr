<?php

namespace App\Http\Controllers;

use App\Component;
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
        //
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
}
