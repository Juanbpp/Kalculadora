<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Auth;


/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();;

        return view('user.index', compact('users'));
    }

    public function create()
    { 
        $user = new User();
        return view('user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        User::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('users.index')
            ->with('success', 'Tipo created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }

    public function updateuser(UserRequest $request)
    {
        $userId=Auth::id();
        $user = User::findOrFail($userId);    
        $request->validated();
        $user->update($request->validated());

        return redirect()->route('panel')
            ->with('success', 'User updated successfully');
    }
    public function panel()
    {
 
        return view('panel');
    }
}
