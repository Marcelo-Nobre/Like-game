<?php

use App\Http\Controllers\Web\Chat\ChatRoomController;
use App\Http\Controllers\Web\Chat\SendMessageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', fn () => view('welcome'));

Route::redirect('/', 'home');

Route::get('/home', fn () => view('content.home'))->name('home');

Route::get('/blog-grid', fn () => view('content.blog-grid'))->name('blog-grid');

Route::get('/blog-single', fn () => view('content.blog-single'))->name('blog-single');

Route::get('/sing-in', fn () => view('content.sing-in'))->name('sing-in');

Route::get('/sing-up', fn () => view('content.sing-up'))->name('sing-up');

Route::prefix('chat')->name('chat.')
// ->middleware([
//     'auth', 'verified',
// ])
    ->group(function () {
        Route::any('/fake-message/{room?}', [SendMessageController::class, 'fake'])->name('fake.message');
        Route::get('/{room?}', ChatRoomController::class)->name('room');
        Route::post('/message', SendMessageController::class)->name('send.message');
    });

Route::get('/demo/home', fn () => view('demo.home'));
