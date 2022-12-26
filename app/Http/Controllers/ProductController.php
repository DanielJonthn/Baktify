<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('pages.productPage', compact('products'));
    }

    public function showDetail($id)
    {
        $productDetail = Product::findOrFail($id);
        return view('pages.productDetail', compact('productDetail'));
    }

    public function editProduct($id){
        $product = Product::findOrFail($id);
        return view('pages.editProduct', compact('product'));
    }

    //submit product belum bisa gambar, tanyain dulu tentang storage
    public function submitProduct($id){
        $product = Product::findOrFail($id);
        $data = request()->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required'
        ]);

        $updateData = [
            'description' => $data['description'],
            'price' => $data['price'],
            'stock' => $data['stock']
        ];
        $product->update($updateData);

        return redirect()->route('product');
    }

    public function removeProduct($id){
        Product::where('id', '=', $id)->delete();
        return redirect()->back();
    }

    public function addProduct(){
        return view('pages.addProduct');
    }

    public function insertProduct(Request $request){
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'category' => 'required'
        ]);
        $newProduct = new Product();
        $newProduct->name = $request->input('name');
        $newProduct->description = $request->input('description');
        $newProduct->price = $request->input('price');
        $newProduct->stock = $request->input('stock');
        $newProduct->category_id = $request->input('category');
        $newProduct->image = 'image';
        $newProduct->save();

        return redirect()->route('product');
    }



    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
