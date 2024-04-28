<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderController extends Controller
{
    function index() {

          DB::table("users")->inRandomOrder()->dd();
        // $data = DB::table("users")->insert([
        //     "name" => "ars",
        //     "email" => "a@mail.com",
        //     "password" => 12
        // ]);

        // dd(DB::table("users")->get());
        // dd($data);
        // $data = DB::table("users")
        // // ->where("name","","ars")
        // ->whereEmail("a@mail.com")
        // ->get();

        DB::table("users")->where("id",2)->update([
            "name" => "2"
        ]);
        // return $data;
    }
}
