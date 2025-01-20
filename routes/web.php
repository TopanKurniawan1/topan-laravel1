<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpankController;

Route::get('/', function () {
   return view('welcome');
});

Route::get('/page1', [OpankController::class,'page1']);
Route::get('/page2', [OpankController::class,'page2']);
Route::get('/page4', [OpankController::class,'page4']);

// Route untuk page1
Route::get('/main', function () {
   return view('template.main');
});

// Route untuk page2
// Route::get('/page2', function () {
//     return view('page2');
// });

// Route untuk page4 dengan dukungan GET dan POST
// Route::post('/page4', function () {
//     $data = request()->all();
//     return view('page4', compact('data'));
// });
