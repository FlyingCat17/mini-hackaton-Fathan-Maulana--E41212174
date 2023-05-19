<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostCategoryController extends Controller
{
    # code

    public function index()
    {
        $categories = PostCategory::orderBy('name', 'asc')->paginate(5);

        return view('admin.post_category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.post_category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|max:35',
        ],[
            'category_name.required' => 'Please fill your category name!',
            'category_name.max' => 'Category name max 35 character!',
        ]);

        try {
            PostCategory::insert([
                'name' => $request->category_name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    
            return redirect()->route('post-category.index')->with('flash', [
                'type' => 'success',
                'msg' => 'Post category created successfully',  
            ]);
        } catch (\Throwable $th) {
            return redirect()->route('post-category.index')->with('flash', [
                'type' => 'danger',
                'msg' => 'Post category failed to create',  
            ]);
        }

    }

    public function edit($id)
    {
        $categories = PostCategory::where('id', $id)->first();
        if(!$categories){
            return redirect()->route('post-category.index')->with('flash', [
                'type' => 'danger',
                'msg' => 'Post category not found',  
            ]);
        }
        return view('admin.post_category.edit', compact('categories'));
    }
    public function put(Request $request, $id)
    {
        $this->checkId($id);
        $request->validate([
            'category_name' => 'required|max:35',
        ],[
            'category_name.required' => 'Please fill your category name!',
            'category_name.max' => 'Category name max 35 character!',
        ]);

        try {
            PostCategory::where('id', $id)->update([
                'name' => $request->category_name,
                'updated_at' => now(),
            ]);
    
            return redirect()->route('post-category.index')->with('flash', [
                'type' => 'success',
                'msg' => 'Post category updated successfully',  
            ]);
        } catch (\Throwable $th) {
            return redirect()->route('post-category.index')->with('flash', [
                'type' => 'danger',
                'msg' => 'Post category failed to update',  
            ]);
        }
    }
    public function destroy($id)
    {
        $this->checkId($id);
        PostCategory::where('id', $id)->delete();
        return redirect()->route('post-category.index')->with('flash', [
            'type' => 'success',
            'msg' => 'Post category deleted successfully',  
        ]);
    }




    public function checkId($id)
    {
        $categories = PostCategory::where('id', $id)->first();
        if(!$categories){
            return redirect()->route('post-category.index')->with('flash', [
                'type' => 'danger',
                'msg' => 'Post category not found',  
            ]);
        }
    }
}
