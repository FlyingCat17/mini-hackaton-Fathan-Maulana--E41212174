<?php

namespace App\Http\Controllers;

use App\Models\CarType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CarTypeController extends Controller
{
    public function index()
    {
        $carTypes = CarType::paginate(10);
        // return Response::json($carTypes);
        return view('admin.car.type.index', compact('carTypes'));
    }

    public function create()
    {
        return view('admin.car.type.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:car_types,name',
        ]);

        try {
            CarType::create([
                'name' => $request->name,
            ]);
            return redirect()->route('car.type.index')->with('flash', [
                'type' => 'success',
                'msg' => 'Car Type successfully created',
            ]);
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function edit($id)
    {
        $carTypes = CarType::findOrFail($id);
        return view('admin.car.type.edit', compact('carTypes'));
    }

    public function put(Request $request, $id)
    {
        $carTypes = CarType::findOrFail($id);
        $request->validate([
            'name' => 'required|unique:car_types,name,' . $carTypes->id,
        ]);

        try {
            CarType::where('id', $id)->update([
                'name' => $request->name,
            ]);
            return redirect()->route('car.type.index')->with('flash', [
                'type' => 'success',
                'msg' => 'Car Type successfully updated',
            ]);
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function destroy($id)
    {
        try {
            CarType::where('id', $id)->delete();
            return redirect()->route('car.type.index')->with('flash', [
                'type' => 'success',
                'msg' => 'Car Type successfully deleted',
            ]);
        } catch (\Throwable $th) {
            return $th;
        }
    }
}
