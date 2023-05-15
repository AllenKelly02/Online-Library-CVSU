<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\BookController as UserBookController;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {

    $books = Book::get();

    return view('dashboard', compact(['books']));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('guest')->as('guest.')->group(function () {
    Route::get('/', function () {

        $books = Book::get();

        return view('layouts.Guest.index', compact(['books']));
    })->name('index');
});

Route::middleware('auth')->group(function () {

    Route::middleware('role:admin')->prefix('admin')->as('admin.')->group(function () {

        Route::get('/dashboard', function () {
            return view('layouts.Admin.dashboard');
        })->name('dashboard');

        Route::prefix('books')->as('books.')->group(function () {
            Route::get('/list', [BookController::class, 'list'])->name('list');
        });

        Route::resource('books', BookController::class);
    });

    Route::middleware('role:user')->prefix('user')->as('user.')->group(function (){

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::get('/profile/index', [ProfileController::class, 'index'])->name('profile.index');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


        Route::prefix('books')->as('books.')->group(function (){
            Route::post('borrow/{book}', [UserBookController::class, 'borrow'])->name('borrow');
            Route::get('borrow/', [UserBookController::class, 'borrowList'])->name('borrowList');
            Route::post('Borrow/back/{book}', [UserBookController::class, 'backBorrowedBook'])->name('backBook');
            Route::get('history', [UserBookController::class, 'borrowedHistory'])->name('history');
        });

        Route::resource('books', UserBookController::class)->only([
            'index', 'show'
        ]);

    });


});

require __DIR__ . '/auth.php';
