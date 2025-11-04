<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\view;
use Illuminate\Http\Request;

class greeting extends Controller{

    function welcome(){
        return view('welcome');
    }

    // function test(){
    //     if(view()->exists('tet')){
    //         return view('tet');
    //     }
    //     else{
    //         return "view not found";
    //     }
    // }
    function test(){
        $name="John Doe";
        $user= ['worker1', 'worker2', 'worker3'];
        return view('test', ['name' => $name , 'user' => $user] );
    }

}