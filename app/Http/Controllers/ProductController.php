<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function addToCart($id){
        $product = Product::findOrFail($id);

        $cart = session()->get('CART'.Auth::user()->id);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                // "name" => $product->name,
                "id" => $id,
                "quantity" => 1
                // "price" => $product->price,
                // "image" => $product->image
            ];
        }
        session()->put('CART'.Auth::user()->id, $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function updateCart($id, Request $request){
        if($request->number == 0){
                $cart = session()->get('CART'.Auth::user()->id);
                    unset($cart[$id]);
                    session()->put('CART'.Auth::user()->id, $cart);
        }
        else{
            $cart = session()->get('CART'.Auth::user()->id);
            $cart[$id]["quantity"] = $request->number;
            session()->put('CART'.Auth::user()->id, $cart);
        }
        return redirect()->back();
    }

    public function checkout($pass, Request $request){
        if($pass != $request->pass){
            return redirect()->back()->withErrors('Passcode does not match');
        }
        else{
            // return redirect()->back()->withErrors('Passcode matches');
            return redirect()->back()->with('alert', 'You will receive our products soon! Thank you for shopping with us!');
        }
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
