<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

// Route::get('/', function () {
//     return App\posts::get();
// });

Route::get("/","PostsController@index");
Route::get("/create/posts","PostsController@create");
Route::post("/post/store","PostsController@store")->name("storeposts");

Route::get("/gettest", function() {
	return view("guest.form");
})->name("toredirect");
Route::post("/test",function(Request $req){
	$data=[
			"name"=>$req->post()["name"]

	];
	// return $data;
	return view("guest.table",["newdata"=>$data,]);
	// return $req->post()["name"];
})->name("testpost");