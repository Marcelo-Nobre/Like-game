<?php

use App\Http\Controllers\Web\Chat\ChatRoomController;
use App\Http\Controllers\Web\Chat\SendMessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

// Route::get('/sign-in', fn () => view('content.sign-in'))->name('sign-in');
// Route::get('/sign-up', fn () => view('content.sign-up'))->name('sign-up');

Route::redirect('/sign-in', 'login')->name('sign-in');
Route::redirect('/sign-up', 'register')->name('sign-up');

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

Route::get('/dashboard', fn () => view('dashboard'))->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
