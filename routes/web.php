<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ContactController;



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


//Route::get('/about','AboutController@About');
Route::get('contacts', [ContactController::class, 'AllContact'])->name('contacts');
Route::get('/insert-contact', [ContactController::class, 'InsertContact']);
Route::post('/data-added', [ContactController::class, 'DataAdded']);
Route::get('/edit-contact/{id}', [ContactController::class, 'EditContact']);
Route::get('/delete-contact/{id}', [ContactController::class, 'DeleteContact']);
Route::post('/update-contact/{id}', [ContactController::class, 'UpdateContact']);
Route::get('/view-contact/{id}', [ContactController::class, 'ViewContact']);

