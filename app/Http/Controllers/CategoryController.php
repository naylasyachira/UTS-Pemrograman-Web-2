<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $category = Category::latest();

        if ($search) {
        $category->where('name', 'like', '%' . $search . '%');
        }

        return view('categories.index', [
            'title' => 'Category',
            'categories' => $category->paginate(5)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create', [
        'title' => 'Create Category'
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required|max:255',
        'description' => 'required',
        'status' => 'required',
    ], [
        'name.required' => 'Menu wajib diisi',
        'description.required' => 'Description wajib diisi',
        'status.required' => 'Status wajib dipilih',
    ]);

    Category::create($validated);

    return to_route('categories.index')
        ->withSuccess('Category berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
         return view('categories.edit', [
        'title' => 'Edit Category',
        'category' => $category,
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
         $validated = $request->validate([
        'name' => 'required|max:255',
        'description' => 'required',
        'status' => 'required',
    ], [
        'name.required' => 'Name wajib diisi',
        'description.required' => 'Description wajib diisi',
        'status.required' => 'Status wajib dipilih',
    ]);

    $category->update($validated);

    return to_route('categories.index')
        ->withSuccess('Category berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}