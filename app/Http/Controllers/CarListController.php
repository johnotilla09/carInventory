<?php

namespace App\Http\Controllers;

use App\Models\CarList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarListController extends Controller
{
    // show all car list
    public function index() {
        return view('carLists', [
            'heading' => 'Latest Cars List',
            'carList' => CarList::all()
        ]);
    }

    // show car details
    public function show(CarList $carList) {
        return view('carList', [
            'carList' => $carList
        ]);
    }
}
