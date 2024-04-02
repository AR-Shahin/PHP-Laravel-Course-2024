<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TestController extends Controller
{
    function index(Request $request) {


        $users = [
            ["name" => "shahin"],
            ["name" => "ars"],
            ["name" => "omi"],
        ];
        $users = [];
        $title = "Laravel";
        $html = "<h1 style='color:red'>Hello</h1>";
       return view("admin.index",compact("users","title","html"));
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
