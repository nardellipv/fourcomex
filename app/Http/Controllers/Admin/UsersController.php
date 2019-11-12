<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AddUserRequest;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;

class UsersController extends Controller
{
    public function indexUsers()
    {
        $users = User::all();

        return view('admin.parts.users._indexUsers', compact('users'));
    }

    public function addUser(AddUserRequest $data)
    {
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Toastr::success('Usuario agregado correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }

    public function editUser($id)
    {
        $user = User::find($id);

        return view('admin.parts.users._editUsers', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request['name'];
        $user->email = $request['email'];

        if ($request->password) {
            $user->password = Hash::make($request['password']);
        }

        $user->save();

        Toastr::success('Usuario modificado correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();

        Toastr::success('Usuario eliminado correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }

}
