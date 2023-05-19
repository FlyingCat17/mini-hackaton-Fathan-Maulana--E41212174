<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ApiPostCategoryController extends Controller
{
    public function index()
    {
        $categories = PostCategory::orderBy('name', 'asc')->get();
        return Response::json($categories, '200');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|max:35'
        ], [
            'category_name.required' => 'Required Category Name',
            'category_name.max' => 'Category Name Too Long'
        ]);

        try {
            PostCategory::insert([
                'name' => $request->category_name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return Response::json([
                'status' => '200',
                'message' => 'Data has been saved'
            ]);
        } catch (\Throwable $th) {
            return Response::json([
                'status' => '500',
                'message' => 'Data failed to save'
            ]);
        }
    }

    public function put(Request $request, $id)
    {
        PostCategory::findOrFail($id);
        $request->validate([
            'category_name' => 'required|max:35|unique:post_categories,name'
        ]);

        try {

        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
