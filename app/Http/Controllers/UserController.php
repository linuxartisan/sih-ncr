<?php

namespace App\Http\Controllers;

use App\User;
use App\Workers\Services\UserService;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
