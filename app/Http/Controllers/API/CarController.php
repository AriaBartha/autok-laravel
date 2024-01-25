<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Car::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $car = Car::create([
                "license_plate_number" => $request->license_plate_number,
                "brand" => $request->brand,
                "model" => $request->model,
                "year_of_manufacture" => $request->year_of_manufacture,
                "fuel_type" => $request->fuel_type,
            ]);
        return $car;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::find($id);
        return $car;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $car = Car::find($id);
        $car->fill([
            "license_plate_number" => $request->license_plate_number,
            "brand" => $request->brand,
            "model" => $request->model,
            "year_of_manufacture" => $request->year_of_manufacture,
            "fuel_type" => $request->fuel_type,
        ]);
        $car->save();
        return $car;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
