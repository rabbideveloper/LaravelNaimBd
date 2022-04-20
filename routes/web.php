<?php

use App\Http\Controllers\PhoneBookController;
use App\Models\PhoneBook;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('phone-book',[PhoneBookController::class,'index'])->name('phone-book.index');
Route::post( 'phone-book', [PhoneBookController::class, 'store'] )->name( 'phone-book.store' );

Route::get('phone-book/create',[PhoneBookController::class,'create'])->name('phone-book.create');

Route::get('phone-book/{id}/edit',[PhoneBookController::class,'edit'])->name('phone-book.edit');

Route::get( 'phone-book/{id}', [PhoneBookController::class, 'show'] )->name( 'phone-book.show' );
Route::put( 'phone-book/{id}',[PhoneBookController::class,'update'])->name('phone-book.update');
Route::delete( 'phone-book/{id}',[PhoneBookController::class,'destroy'])->name('phone-book.destroy');


// Route::resource('phone-book',PhoneBookController::class);