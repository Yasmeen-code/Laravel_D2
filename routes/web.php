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
    $posts = [
        ['id' => 1, 'title' => 'First Post', 'content' => 'This is the content of the first post.'],
        ['id' => 2, 'title' => 'Second Post', 'content' => 'This is the content of the second post.'],
        ['id' => 3, 'title' => 'Third Post', 'content' => 'This is the content of the third post.'],
        ['id' => 4, 'title' => 'Fourth Post', 'content' => 'This is the content of the fourth post.'],
        ['id' => 5, 'title' => 'Fifth Post', 'content' => 'This is the content of the fifth post.'],
    ];
    return view('posts.index', ['posts' => $posts]);
});

Route::get('/edit/{id}', function ($id) {
    $posts = [
        ['id' => 1, 'title' => 'First Post', 'content' => 'This is the content of the first post.'],
        ['id' => 2, 'title' => 'Second Post', 'content' => 'This is the content of the second post.'],
        ['id' => 3, 'title' => 'Third Post', 'content' => 'This is the content of the third post.'],
        ['id' => 4, 'title' => 'Fourth Post', 'content' => 'This is the content of the fourth post.'],
        ['id' => 5, 'title' => 'Fifth Post', 'content' => 'This is the content of the fifth post.'],
    ];
    $post = collect($posts)->firstWhere('id', $id);
    return view('posts.edit', ['post' => $post]);
});
Route::get('/edit_done/{id}', function ($id) {
    return view('posts.update', ['id' => $id]);
});
Route::get('/delete_done/{id}', function () {
    return view('posts.delete_done');
});

