<?php

namespace App\Http\Controllers;

use App\Component;
use App\Forum;
use Illuminate\Http\ForumRequest;
use App\Workers\Services\ForumService;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class ForumController extends Controller
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
        $forums = Forum::all();
        return view('forum.list', compact('forums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $role_list = Role::pluck('name', 'id');
       $component_list = Component::pluck('name', 'id');

       return view('forum.create', compact('component_list'));
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
        // dd($input);
        $forum = new Forum;

        $service = new ForumService;
        $status = $service->storeForum($forum, $input);

        if($status) {
            Session::flash('success', 'Forum created successfully.');
        } else {
            Session::flash('error', 'Failed to create Forum. Please try again.');
        }

        return redirect(action('ForumController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show(Forum $forum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forum)
    {
        $component_list = Component::pluck('name', 'id');
        

        return view(
            'forum.edit',
            compact('forum', 'component_list')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forum $forum)
    {
        $input = $request->all();

        $service = new ForumService;
        $status = $service->updateForum($forum, $input);

        if($status) {
            Session::flash('success', 'Forum updated successfully.');
        } else {
            Session::flash('error', 'Failed to update Forum. Please try again.');
        }

        return redirect(action('ForumController@edit', $forum->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum)
    {
        $service = new ForumService;
        $status = $service->deleteForum($forum);

        if($status) {
            Session::flash('success', 'Forum deleted successfully.');
        } else {
            Session::flash('error', 'Failed to delete Forum. Please try again.');
        }

        return redirect(action('ForumController@index'));
    }
}
