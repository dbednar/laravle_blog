<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{



    public function destroy(){

      auth()->logout();

      return redirect()->home();
    }


    public function store(){
dd(request(['email','password'])));
      if ( auth()->attempt(request(['email','password']))) {

           return redirect()->home();
       }


       return back()->withErrors(
         [
            'messages' => "Please checko your credentials",

         ]
       );


    }

    public function create(){


      return view('sessions.login');
    }

}
