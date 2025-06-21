<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/{any}', [PageController::class, 'home'])->where('any', '.*');