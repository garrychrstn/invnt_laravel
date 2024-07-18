<?php

use Illuminate\Support\Facades\Route;
use App\Models\Proker;

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
    return view('layout', [ // context 
        'name' => 'Garry Christian',
        // 'navItem' => Proker::getItems()
    ]);
});
Route::get('/proker/', function() {
    return view('proker');
});
Route::get('/proker/{id}', function ($id) {
    return view('proker', [
        'item' => Proker::find($id)
    ]);
});
Route::get('/cash', function() {
    return view('cash');
});
Route::get('/structure', function() {
    return view('structure');
});
Route::get('/todo', function() {
    return view('todo');
});
// Route::get('/todo/{id}', function ($id)) {
//     return view('todo', [

//     ]),
// }