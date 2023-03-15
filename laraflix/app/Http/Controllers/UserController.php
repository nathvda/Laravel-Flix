<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(CreateUserRequest $request)
    {

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        auth()->login($user);

        return redirect('/')->withMessage('info','Thanks for registering. Please validate your account with the link you will receive via email.');
    }
}
