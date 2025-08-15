<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/create', function () {
    return view('posts.create');
});

Route::post('/create_done', function () {
    DB::table('posts')->insert([
        'title' => request('title'),
        'content' => request('content'),
    ]);
    return view('posts.create_done');
});

Route::get('/posts', function () {
    $posts = DB::table('posts')->get();
    return view('posts.index', ['posts' => $posts]);
});

Route::get('/edit/{id}', function ($id) {
    $post = DB::table('posts')->where('id', $id)->first();
    return view('posts.edit', ['post' => $post]);
});
Route::get('/edit_done/{id}', function ($id) {
    DB::table('posts')->where('id', $id)->update([
        'title' => request('title'),
        'content' => request('content'),
    ]);
    return view('posts.update', ['id' => $id]);
});
Route::get('/delete_done/{id}', function () {
    return view('posts.delete_done');
});

