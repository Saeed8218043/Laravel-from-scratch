<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionsController extends Controller
{
    public function destroy(){
        auth()->logout();
         return redirect('/',)->with('success','you are logged out Goodbye!');
    }
    public function create(){
        return view('components.sessions.create');
    }

    public function store(){
        $attributes = \request()->validate([
           'email'=>'required|email',
           'password'=>'required'
        ]);

        if (! auth()->attempt($attributes)){
            return back()
                ->withInput()
                ->withErrors(['email'=>'Your email is not valid']);
        }

        session()->regenerate();

        return redirect('/')->with('success','Welcome Back');
    }
}
