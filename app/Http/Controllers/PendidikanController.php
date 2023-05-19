<?php

namespace App\Http\Controllers;

use App\Models\PengalamanKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendidikanController extends Controller
{
    public function index()
    {
        $pendidikan = PengalamanKerja::paginate(10);
        return view('admin.pendidikan.index', compact('pendidikan'));
    }
}
