<?php

use App\Livewire\ContactForm;
use App\Livewire\Counter;
use App\Livewire\Post\PostList;
use App\Livewire\SearchPosts;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/posts');
});

Route::get('/counter', Counter::class);
Route::get('/contact-form', ContactForm::class);
Route::get('/search', SearchPosts::class);
Route::get('/posts', PostList::class);
