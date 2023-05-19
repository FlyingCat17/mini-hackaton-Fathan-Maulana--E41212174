<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    # code
    public function index()
    {
        return view('admin.post.index');
    }


    public function dropzone()
    {
        return view('admin.dropzone.index');
    }

    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        try {
            // $image->store('storage/images', 'public');
            $image->move(public_path('storage/images'), $imageName);
            return Response::json(['success' => $imageName]);
        } catch (\Throwable $th) {
            return abort(500, $th->getMessage());
        }
    }
}
