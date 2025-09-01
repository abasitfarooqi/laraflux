<?php

use Illuminate\Support\Facades\Route;
use Spatie\Browsershot\Browsershot;

// controllers
use App\Http\Controllers\CaptureController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/screenshot', function () {
    Browsershot::url('https://laravel.com')
        ->setScreenshotType('png') // jpg, png, webp
        ->save(storage_path('app/public/laravel.png'));

    return 'Screenshot saved!';
});

Route::get('/capture/url/{type}', [CaptureController::class, 'fromUrl']);
Route::get('/capture/html/{type}', [CaptureController::class, 'fromHtml']);
Route::get('/capture/view/{type}', [CaptureController::class, 'fromView']);
