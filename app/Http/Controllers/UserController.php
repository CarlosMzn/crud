<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index', compact('users'));
    }

    public function create()
    {
        return view('add_user');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->post('name');
        $user->last_name = $request->post('last_name');
        $user->birthday = $request->post('birthday');
        $user->gender = $request->post('gender');
        $user->email = $request->post('email');
        $user->number = $request->post('number');

        $user->save();

        return redirect()->route('user.index')->with('success', 'Usuario agregado con éxito');
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('delete_user', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('update_user', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->post('name');
        $user->last_name = $request->post('last_name');
        $user->birthday = $request->post('birthday');
        $user->gender = $request->post('gender');
        $user->email = $request->post('email');
        $user->number = $request->post('number');
        $user->save();

        return redirect()->route('user.index')->with('success', 'Usuario actualizado con éxito');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'Usuario eliminado con éxito');
    }
}
