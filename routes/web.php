<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/contact', function() {
    $company = 'BookVault';
    return view('contact', [
        'company' => $company
    ]);
});

//Named route
Route::get('books/{id}', function($id) {
     return view('books.index', [
    'id' => $id
     ]);
})-> name('books');

Route::get('/books{name}', function (string $name) {
    return view('books.index');
});

Route::get('/about', function () {
    return view('about');
});

//Normale route
Route::get('/', function () {
    return view('home');
});

//Optional parameters
Route::get('/reviews/{id?}', function (? int $id = null) {
    return view('reviews', [
        'id' => $id
    ]);
});

Route::get('/profile', function (){
    return view('profile');
});

Route::resource('products', ProductController::class);

Route::resource('books', ProductController::class);

Route::resource('reviews', ProductController::class);











