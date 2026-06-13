<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $category = $request->category;

        $menu = Menu::with('category')->latest();

        if ($search) {
            $menu->where('name', 'like', '%' . $search . '%');
        }

        if ($category) {
            $menu->where('category_id', $category);
        }

        return view('menus.index', [
            'title' => 'Menu',
            'menus' => $menu->paginate(5)->withQueryString(),
            'categories' => Category::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menus.create', [
        'title' => 'Create Menu',
        'categories' => Category::latest()->get(),
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'category_id' => 'required',
        'name' => 'required|max:255',
        'price' => 'required|numeric',
        'stock' => 'required|numeric',
        'description' => 'required',
        'rating' => 'required|numeric|min:1|max:5',
    ]);

    try {

        DB::beginTransaction();

        Menu::create($validated);

        DB::commit();

        return to_route('menus.index')
            ->withSuccess('Menu berhasil ditambahkan');

    } catch (\Exception $e) {

        DB::rollBack();

        return back()
            ->withInput()
            ->withErrors([
                'error' => 'Terjadi kesalahan saat menyimpan data.'
            ]);
    }
}

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
         return view('menus.show', [
        'title' => 'Detail Menu',
        'menu' => $menu,
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
         return view('menus.edit', [
        'title' => 'Edit Menu',
        'menu' => $menu,
        'categories' => Category::latest()->get(),
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $validated = $request->validate([
        'category_id' => 'required',
        'name' => 'required|max:255',
        'price' => 'required|numeric',
        'stock' => 'required|numeric',
        'description' => 'required',
        'rating' => 'required|numeric|min:1|max:5',
    ], [
        'category_id.required' => 'Category wajib dipilih',
        'name.required' => 'Menu name wajib diisi',
        'price.required' => 'Price wajib diisi',
        'stock.required' => 'Stock wajib diisi',
        'description.required' => 'Description wajib diisi',
        'rating.required' => 'Rating wajib diisi',

    ]);

    try {

        DB::beginTransaction();

        Menu::create($validated);

        DB::commit();

        return to_route('menus.index')
            ->withSuccess('Menu berhasil ditambahkan');

    } catch (\Exception $e) {

        DB::rollBack();

        return back()
            ->withInput()
            ->withErrors([
                'error' => 'Terjadi kesalahan saat menyimpan data.'
            ]);
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();

    return to_route('menus.index')
        ->withSuccess('Menu berhasil dihapus');
    }
    
    public function trash()
{
    return view('menus.trash', [
        'title' => 'Trash Menu',
        'menus' => Menu::onlyTrashed()
            ->latest()
            ->paginate(5),
    ]);
}
}