<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\TestMiddleware;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PhotoController;
use App\Http\Requests\FormValidationRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

// require "../routes/auth.php";

Route::get("/",function(){
    return view("welcome");
});


Route::get("category",function(){
    return view("category");
});
Route::get("brand",function(){
    return view("brand");
});
// Route::redirect("/","/login");
// Route::get('/',[TestController::class,"index"]);

Route::get("request",[TestController::class,"index"]);
Route::post("request-store",[TestController::class,"store"])->name("store");

Route::get('/even', function () {
    return "even";
})->name("even")->middleware(["test:30"]);


Route::resource('photos', PhotoController::class)->only(["store",""]);


Route::get('set', function () {
    // session("name", "shahin");
    // session()->put("roll",109);
    // session()->flash("key","val");
    info("Anything");
    Log::debug("ddd");
    Log::info("message");
    Log::warning("message");;
});


Route::get('get', function () {
        // session()->forget("name");
        // dd(session()->pull("name"));
        // return Session::all();
});


Route::post('/validation', function (FormValidationRequest $request) {



    
    // return $request->safe()->only(["name"]);

//     $data = Validator::make($request->all(),[
//         "name" => ["required"],
//     ],);

// if($data->fails()){
//     return redirect()->back()->withErrors($data);
// }
})->name("validation");
