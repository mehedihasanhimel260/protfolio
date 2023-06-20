<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = category::all();
        return view('backend.category.index',compact('categories'));
    }

    public function create()
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        $product = new category;
        $product->name = $request->name;
        $product->save();
        session()->flash('success', 'Category added');
        return redirect()->back();
    }
    public function edit()
    {
       //
    }
    public function update()
    {
       //
    }
    public function destroy()
    {
       //
    }

}
