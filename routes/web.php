<?php

use App\Http\Livewire\EmployeesTable;
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

use App\Http\Livewire\UsersTable;
use App\Http\Livewire\UsersCreate;
use App\Http\Livewire\UsersEdit;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

    //Users Components
    Route::get('/users', UsersTable::class)->name('users');    
    Route::get('/users/create', UsersCreate::class)->name('create.user');
    Route::get('/users/edit/{id}', UsersEdit::class)->name('edit.user');

    //Users Components
    Route::get('/employees', EmployeesTable::class)->name('employees');    


});