<?php

use App\Models\CarList;
use Illuminate\Http\Request;
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

// Route::get('/hello', function () {
//     return response('<h1>Hello John C. Otilla</h1>', 200)
//     ->header('Content-Type', 'text-plain')
//     ->header('foo', 'bar');
// });

// Route::get('/posts/{id}', function ($id) {
//     dd($id);
//     return response('POST '. $id );
// })->where('id', '[0-9]+');

// Route::get('/search', function (Request $request) {
//     dd($request);
//     dd($request->name . ' ' . $request->address);
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// All Car Lists
Route::get('/', function () {
    return view('carLists', [
        'heading' => 'Latest Cars List',
        'carList' => CarList::all()
    ]);
});

// Single Car List
Route::get('/cars/{id}', function($id) {
    return view('carList', [
        'carList' => CarList::find(($id))
    ]);
});
