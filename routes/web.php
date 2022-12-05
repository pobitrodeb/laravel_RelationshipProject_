<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Models\Phone;
use App\Models\User;

Route::get('/', [Homecontroller::class, 'index'])->name('home');
