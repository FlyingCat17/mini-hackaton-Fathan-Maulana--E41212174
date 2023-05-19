<?php

namespace App\Http\Controllers;

use App\Models\PengalamanKerja;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    //

    public function index()
    {
        $kerja = PengalamanKerja::all();
        return view('admin.pekerjaan.index', compact('kerja'));
    }
}
