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

Route::get('/', fn () => view('welcome'));

Route::get('/home', fn () => view('content.home'));

Route::get('/blog-grid', fn () => view('content.blog-grid'));

Route::get('/blog-single', fn () => view('content.blog-single'));

Route::get('/sing-in', fn () => view('content.sing-in'));

Route::get('/sing-up', fn () => view('content.sing-up'));

Route::get('chat/messages', fn () => view('chat.messages'));

Route::prefix('chat')
// ->middleware([
//     'auth', 'verified',
// ])
    ->group(function () {
        Route::any('/fake-message/{room?}', [SendMessageController::class, 'fake'])->name('fake.message');
        Route::get('/{room?}', ChatRoomController::class)->name('room');
        Route::post('/message', SendMessageController::class)->name('send.message');
    });
