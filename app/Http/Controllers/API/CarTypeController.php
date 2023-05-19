<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CarType;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CarTypeController extends Controller
{
    public function index()
    {
        return Response::json(CarType::orderBy('name', 'asc')->get(), 200);
    }
}