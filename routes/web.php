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

// コントローラー名@ファンクション名
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');

//viewは表示の際の１つ
// Route::get('/', function () {
//     return view('welcome');
// });

//  /以降に文字をつけると、/以降を含めたURL全体の際の動きを示す。
Route::get('/hello', function () {
    return "<h2>Hello world</h2>";
});

//dynamic route01
//例）http://localhost:8000/user/mune
Route::get('/user/{name}', function ($name) {
    return "Welcome".$name;
});

//dynamic route02
//例）http://localhost:8000/user/id/mune
Route::get('/user/{id}/{name}', function ($id,$name) {
    return "Welcome".$name.'with an id'.$id;
});

