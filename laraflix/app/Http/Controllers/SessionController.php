<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateSessionRequest;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('login');
    }

    public function store(CreateSessionRequest $request){

        $attributes = [
            'email' => $request['email'],
            'password' => $request['password']
        ];

        if(!Auth::attempt($attributes, true)){
            throw ValidationException::withMessages(
                [
                    'email' => 'Your provided email could not be verified',
                    'password' => 'Wrong password']
                );
        }

        session()->regenerate();

        return redirect('/home');
    }

    public function destroy(){
        auth()->logout();

        return redirect('/');
    }
}
