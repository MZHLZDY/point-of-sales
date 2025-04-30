<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category; 
use Illuminate\Http\Request;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = item::all();
        // return ($user);
        return view('item', compact('items'));
        // return view('item');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('item_create', compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'price' => 'required',
            'stock' => 'required',
        ],[ ''
        ]);

        Item::create([
          'category_id' => $request->category_id,
            'name' => $request->name,
          'price' =>$request->price,
          'stock' =>$request->stock,
        ]);
        
        return redirect()->route('item.index')->with('Successadd', 'Item berhasil diperbarui!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        $categories = Category::all();
        return view('item_edit', compact('item', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name' => 'required|min:3|max:100',
            'price' => 'required',
            'stock' => 'required'
        ]);

        $item->update($request->all());

        return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('item.index')->with('Deletesuccess', 'Item berhasil dihapus!');
    }
}
