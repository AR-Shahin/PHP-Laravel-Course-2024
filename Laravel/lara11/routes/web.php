<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\TestMiddleware;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PhotoController;

// require "../routes/auth.php";

Route::get("login",function(){
    return view("login");
});


Route::get("category",function(){
    return view("category");
});
Route::get("brand",function(){
    return view("brand");
});
// Route::redirect("/","/login");
Route::get('/',[TestController::class,"index"]);

Route::get("request",[TestController::class,"index"]);
Route::post("request-store",[TestController::class,"store"])->name("store");

Route::get('/even', function () {
    return "even";
})->name("even")->middleware(["test:30"]);


Route::resource('photos', PhotoController::class)->only(["store",""]);
