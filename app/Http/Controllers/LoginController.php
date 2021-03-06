<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected function create()
    {
        return view('auth.login');
    }

    public function store(){
        if(auth()->attempt(request(['email','password']))==false){

            return back()->withErrors([
                'message'=> 'The email or password is incorrect, please try again'
            ]);

        }
        return redirect()->route('/');
    }

    public function destroy(){
        auth()->logout();
        return redirect()->route('login');
    }


}
