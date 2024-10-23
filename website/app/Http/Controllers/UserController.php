<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');
        $user->description = request('description');
        $user->curriculum_vitae_path = request('curriculum_vitae_path');
        $user->applications = request('applications');
        $user->save();
        return view('user_create');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('user_show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user_edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $user = User::find($id);
        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');
        $user->description = request('description');
        $user->curriculum_vitae_path = request('curriculum_vitae_path');
        $user->applications = request('applications');
        $user->save();
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}

