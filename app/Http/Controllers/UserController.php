<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Auth;
use App\Models\Registro;

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
            ->with('success', 'Usuario creado correcto.');
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
            ->with('success', 'Usuario actualizado correctamente');
    }

    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('users.index')
            ->with('success', 'Usuario borrado correctamente');
    }

    public function updateuser(UserRequest $request)
    {
        $userId=Auth::id();
        $user = User::findOrFail($userId);    
        $request->validated();
       
        $user->id=$userId;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->save();

        return redirect()->route('panel')
            ->with('success', 'Usuario actualizado correctamente');
    }
    public function panel()
    {
        $registros = Registro::all()
                        ->where('id_user',Auth::id())
                        ->sortByDesc("created_at")
                        ->take(5);

                        return view('panel', compact('registros'));
    }
}
