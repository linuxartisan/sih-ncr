<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use App\Workers\Services\UserService;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
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
        $users = User::orderBy('identifier')->get();
        return view('setup.user.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $role_list = Role::pluck('name', 'id');
        $type_list = config('usertype');

        return view('setup.user.create', compact('type_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\UserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $input = $request->all();

        $user = new User;

        $service = new UserService;
        $status = $service->storeUser($user, $input);

        if($status) {
            Session::flash('success', 'User created successfully.');
        } else {
            Session::flash('error', 'Failed to create User. Please try again.');
        }

        return redirect(action('UserController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // get the associated roles
        // $user_roles = $user->roles()->pluck('id');

        // $role_list = Role::pluck('name', 'id');
        $user_type = $user->type;
        $type_list = config('usertype');

        return view(
            'setup.user.edit',
            compact('user', 'type_list', 'user_type')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\UserRequest  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $input = $request->all();

        $service = new UserService;
        $status = $service->updateUser($user, $input);

        if($status) {
            Session::flash('success', 'User updated successfully.');
        } else {
            Session::flash('error', 'Failed to update User. Please try again.');
        }

        return redirect(action('UserController@edit', $user->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $service = new UserService;

        $status = $service->deleteUser($user);

        if($status) {
            Session::flash('success', 'User deleted successfully.');
        } else {
            Session::flash('error', 'Failed to delete User. Please try again.');
        }

        return redirect(action('UserController@index'));
    }

    /**
     * Show the form for changing password of the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showPasswordChangeForm()
    {
        $user = Auth::user();
        return view('setup.user.change_password', compact('user'));
    }

    /**
     * Change passsword of the specified resource.
     *
     * @param  Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changePassword(Request $request)
    {
        $input = $request->all();

        if (!(Hash::check($input['old_password'], Auth::user()->password))) {
            // The passwords do not match
            return redirect()->back()
                    ->with("error","Your current password does not match with the password you provided. Please try again.");
        }

        if(strcmp($input['old_password'], $input['new_password']) == 0){
            //Current password and new password are same
            return redirect()->back()
                    ->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:6',
            'repeat_password' => 'required|same:new_password'
        ]);

        $user = Auth::user();
        $service = new UserService;
        $status = $service->changePassword($user, $input['new_password']);

        if($status) {
            Session::flash('success', 'Password changed successfully.');
        } else {
            Session::flash('error', 'Failed to change password. Please try again.');
        }

        return redirect()->back();
    }
}
