<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
// require "../routes/auth.php";

// Route::redirect("/","/login");
Route::get('/', function () {
    return view('welcome');
});


Route::get("test",function(){
    return "Hello";
});

// Route::get("ars",[TestController::class,"index"]);
Route::post("post",function(){

});

Route::delete("post",function(){

});


Route::match(['get', 'post'], '/shahin', function () {
    // ...
});


Route::get('/req', function (Request $request) {

});

Route::get('login', function () {
    return "Login";
})->middleware("throttle:global");


Route::view("view","ars");


Route::get("user-data/{name}/{roll?}",function($name,$roll=null){
    dd($name,$roll);
})->where('name', '[A-Za-z]+')->name("name");


Route::prefix("category")->middleware([])->controller(TestController::class)->name("category.")->group(function(){
    Route::get("/",fn() => "get")->name("index");
    Route::post("/store",fn() => "get")->name("store");
    Route::patch("/update",fn() => "get");
    Route::delete("/delete",fn() => "get");
});




Route::fallback(function(){
    return "out";
});
