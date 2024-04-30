<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderController extends Controller
{
    function index() {

         $users = DB::table("users")->paginate(10);
        return view("welcome",compact("users"));
        /***
         * SELECT profile.*,users.*
         * FROM users
         * INNER JOIN profile
         * ON users.id = profile.user_id
         */

        //  return DB::table('users')
        //     ->rightJoin("profile",'users.id',"=","profile.user_id")
        //     // ->join("social_media",'users.id',"=","social_media.user_id")
        //     ->select("profile.*","users.*")
        //     ->get();

    //  $data = DB::table("users")->insert([
    //         "name" => "ars",
    //         "email" => "a1@mail.com",
    //         "password" => 12
    //     ]);
    // DB::table("profile")->insert([
    //     "user_id" => 20,
    //     "phone" => "1323"
    // ]);
        // return $user = DB::table("profile")->get();

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
