<?php

namespace App\Http\Controllers;

use App\Models\CarList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarListController extends Controller
{
    // show all car list
    public function index() {
        // dd(request('tag')); // This is a request helper

        return view('carList.index', [
            'heading' => 'Latest Cars List',
            'carList' => CarList::latest()->filter(request(['tag']))->get()
        ]);
    }

    // show sing car list
    public function show(CarList $carList) {
        return view('carList.show', [
            'carList' => $carList
        ]);
    }
}
