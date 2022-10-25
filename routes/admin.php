<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthorController;

Route::get('/admin/authors', ['App\Http\Controllers\Admin\AuthorController', 'index']);
Route::get('/admin/authors/create', ['App\Http\Controllers\Admin\AuthorController', 'create']);