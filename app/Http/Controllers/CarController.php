<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index()
    {
        $car = Car::paginate(10);

        return view('admin.car.index', compact('car'));
    }

    public function create()
    {
        $carTypes = CarType::all();
        return view('admin.car.create', compact('carTypes'));
    }

    public function store(Request $request)
    {
        try {
            $image_url = null;
            if ($request->file('photo')) {
                $image_url = Storage::put('public/cars/images/', $request->file('photo'));
            }
            Car::create([
                'car_type_id' => $request->car_type_id,
                'name' => $request->name,
                'brand' => $request->brand,
                'price' => $request->price,
                'license_plate' => $request->license,
                'year' => '2019',
                'color' => $request->color,
                'image' => $image_url
            ]);
            return redirect()->route('car.index')->with('flash', [
                'type' => 'success',
                'msg' => 'Car successfully created',
            ]);
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        if ($car->image != null) {
            if (Storage::exists($car->image)) {
                Storage::delete($car->image);
            }
        }
        $car->delete();
        return redirect()->route('car.index')->with('flash', [
            'type' => 'success',
            'msg' => 'Car successfully deleted',
        ]);
    }
}
