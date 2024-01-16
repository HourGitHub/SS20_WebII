<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::get('/article/index', [ArticleController::class, 'index']);
Route::resource("/user", UserController::class);

Route::resource('/article', ArticleController::class);



Route::get('/', function () {
    return view('index');
})->name("myindex");


Route::get('article/{a}/{b}', function ($x, $y) {
    $id = $x;
    $name = $y;
    
    // return view("article", ["id"=>$x, "name"=>$y]);
    return view("article", compact("id", "name"));
   
})->where(["a"=>"[0-9]+", "b"=>"[a-zA-Z]+"]);
