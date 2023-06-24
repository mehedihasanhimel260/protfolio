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

    public function store(Request $request )
    {
        $product = new category;
        $product->name = $request->name;
        $product->save();
        session()->flash('success', 'Category added');
        return redirect()->back();
    }
    public function edit($id)
    {
        $categories = category::find($id);
        return view('backend.category.edit',compact('categories'));
    }
    public function show($id)
    {
        $categories = category::find($id);
        return view('backend.category.show',compact('categories'));
    }


    public function update(Request $request,$id)
    {
        $product = category::find($id);
        $product->name = $request->name;
        $product->save();
        session()->flash('success', 'Category update');
        return redirect()->back();
    }
    public function delete($id)
    {
        $category = category::find($id);
        $category->delete();
        session()->flash('delete', 'Category Deleted');
        return redirect()->back();
    }

}
