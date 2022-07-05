<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookReviewController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/book_reviews', [BookReviewController::class, 'index']);
Route::post('/book_reviews', [BookReviewController::class, 'store']);
Route::get('/book_reviews/{review}', [BookReviewController::class, 'show']);
Route::put('/book_reviews/{review}', [BookReviewController::class, 'update']);
Route::delete('/book_reviews/{review}', [BookReviewController::class, 'destroy']);