<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    //list all cars
    public function index()
    {
        $cars = Car::all();
        return view('car', [
            'cars' => $cars
        ]);
    }
    //add car to table
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'model' => 'required',
        ]);
        Car::create([
            'name' => strip_tags($request->name),
            'model' => strip_tags($request->model),
        ]);
        return redirect()->route('car.index');
    }
}
