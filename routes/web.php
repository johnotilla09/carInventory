<?php

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

Route::get('/', function () {
    return view('carLists', [
        'heading' => 'Latest Cars List',
        'carList' => [
            [
                'id' => 1,
                'title' => 'Honda City',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus facilis molestias delectus quod rerum dolorem molestiae obcaecati voluptates facere ab fugit incidunt ipsum beatae voluptatem natus quo iste itaque dolore repellendus tempore, qui, laudantium, iusto fuga in! Deserunt fuga, eligendi nisi error autem voluptatibus porro laudantium rem ducimus temporibus delectus.'
            ],
            [
                'id' => 2,
                'title' => 'Ford Raptor',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus facilis molestias delectus quod rerum dolorem molestiae obcaecati voluptates facere ab fugit incidunt ipsum beatae voluptatem natus quo iste itaque dolore repellendus tempore, qui, laudantium, iusto fuga in! Deserunt fuga, eligendi nisi error autem voluptatibus porro laudantium rem ducimus temporibus delectus.'
            ]
        ]

    ]);
});
