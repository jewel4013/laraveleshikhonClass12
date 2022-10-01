<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class userControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.usersIndex', [
            'alluser' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.usersCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'fname' => request('fname'),
            'lname' => request('lname'),
            'uname' => request('uname'),
            'email' => request('email'),
            'phone' => request('phone')
        ]);

        $user->profile()->create([
            'photo' => request('photo'),
            'address' => request('address'),
            'date_of_birth' => request('date_of_birth'),
            'bio' => request('bio'),
            'gender' => request('gender')
        ]);

        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('users.userShow', [
            'suser' => User::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('users.usersEdit', [
            'suser' => User::find($id)
        ]);
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
        $suser = User::find($id);
        $suser->update([
            'fname' => request('fname'),
            'lname' => request('lname'),
            'uname' => request('uname'),
            'email' => request('email'),
            'phone' => request('phone'),
        ]);

        return redirect()->route('single_user', [$suser->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suser = User::find($id);
        $suser->profile->delete();
        $suser->delete();


        return redirect('/users');
    }
}
