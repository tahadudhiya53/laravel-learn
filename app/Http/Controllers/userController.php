<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function submit(Request $req)
    {

        $req->validate([
            'username'=>'required|min:5|max:15',
            'password'=>'required|min:8|max:20',
        ]);

        echo $req->input('username');
        echo "<br>";
        echo $req->input('password');
        echo "<br>";    
        // echo $req->input('language');
        print_r($req->input('language')) ;
        echo "<br>";
        echo $req->input('gender');
        echo "<br>";
        echo $req->input('city');
        echo "<br>";
        echo $req->input('about');
        echo "<br>";
        echo $req->input('age');
        echo "<br>";

            // return $req->input();
        return view('user-form');
    }
}
