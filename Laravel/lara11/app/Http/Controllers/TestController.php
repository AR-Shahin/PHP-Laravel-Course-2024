<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TestController extends Controller
{
    function index(Request $request) {

        $path = public_path("/abc.txt");
        return response()->download($path,date("y"));
        // return $request->query("name","ars");
       return view("ars");
    }

    function store(Request $request){

        return back()->withInput();
        dd( $request->file("image"));
        // return $request->collect("name")->map(function($i){
        //     echo $i . " ";
        // });

        // if($request->has("password")){

        //     return $request->name;
        // }else{
        //     return "nai";
        // }
        $arr = [
            "password" => 123
        ];

        return $request->merge($arr);

    }



}
