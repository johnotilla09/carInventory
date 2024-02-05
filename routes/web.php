<?php

use App\Http\Controllers\CarListController;
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

// Common Resourse Routes
// index = Show of listing
// show - Show single listing
// create - Show form to create new listing
// store - store new listing
// edit - show form to edit existing listing
// update - update listing
// destroy - delete listing

// All Car Lists
Route::get('/', [CarListController::class, 'index']);

// Single Car List
Route::get('/car/{carList}', [CarListController::class, 'show']);











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


// // All Car Lists
// Route::get('/', function () {
//     return view('carLists', [
//         'heading' => 'Latest Cars List',
//         'carList' => CarList::all()
//     ]);
// });

// // Single Car List
// Route::get('/car/{carList}', function(CarList $carList) {
//     // Route Binding

//     return view('carList', [
//         'carList' => $carList
//     ]);
// });
