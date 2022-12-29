<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function addCategory(){
        $categories = Category::all();
        return view('pages.addCategory', compact('categories'));
    }

    public function insertCategory(Request $request){
        $request->validate([
            'name' => 'required'
        ]);
        $newCategory = new Category();
        $newCategory->name = $request->input('name');
        $newCategory->save();

        return redirect()->route('product');
    }
}