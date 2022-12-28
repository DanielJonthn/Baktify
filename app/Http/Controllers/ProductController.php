<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Carbon;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $totalproducts = 0;
        if($request->has('search')){
            $products = Product::where('name', 'LIKE', '%'.$request->search.'%')->paginate(12);
            $products->appends($request->all());
            $totalproducts = Product::where('name', 'LIKE', '%'.$request->search.'%')->get();
        }else{
            $products = Product::paginate(12);
            $products->appends($request->all());
            $totalproducts = Product::all();
        }
        return view('pages.productPage', compact('products', 'totalproducts'));
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
    public function submitProduct(Request $request, $id){
        $product = Product::findOrFail($id);
        $data = request()->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required|min:15|max:500',
            'price' => 'required|numeric|min:1000|max:10000000',
            'stock' => 'required|numeric|min:1|max:10000'
        ]);

        $updateData = [
            'description' => $data['description'],
            'price' => $data['price'],
            'stock' => $data['stock']
        ];
        if(request('image')){
            $images = $request->image->getClientOriginalName();
            $file = $request->file('image')->storeAs('public/images', $images);
            $updateData['image'] = $images;
        }
        $product->update($updateData);

        return redirect()->route('product');
    }

    public function removeProduct($id){
        Product::where('id', '=', $id)->delete();
        return redirect()->back()->with('alert', 'Success remove product');
    }

    public function addProduct(){
        return view('pages.addProduct');
    }

    public function insertProduct(Request $request){
        if(!request('image')){
            return redirect()->back()->with('alert', 'You must upload an image!');
        }
        else if($request->image->extension() != 'jpeg' && $request->image->extension() != 'png' && $request->image->extension() != 'jpg'){
            return redirect()->back()->with('alert', 'Image must be a jpg / jpeg / png file!');
        }
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|min:5',
            'description' => 'required|min:15|max:500',
            'price' => 'required|numeric|min:1000|max:10000000',
            'stock' => 'required|numeric|min:1|max:10000',
            'category' => 'required'
        ]);
        $newProduct = new Product();
        $newProduct->name = $request->input('name');
        $newProduct->description = $request->input('description');
        $newProduct->price = $request->input('price');
        $newProduct->stock = $request->input('stock');
        $newProduct->category_id = $request->input('category');
        $images = $request->image->getClientOriginalName();
        $file = $request->file('image')->storeAs('public/images', $images);
        $newProduct->image = $images;
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

        return redirect()->back()->with('alert', 'Product added to cart successfully!');
    }

    public function updateCart($id, Request $request){
        if($request->number <= 0){
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
        // $cart = session()->get('CART'.Auth::user()->id);
        // dd(session('CART'.Auth::user()->id));
        // for($i = 0; $i < count($cart); $i++){
        //     dump($cart[1]);        
        // }
        // foreach (session('CART'.Auth::user()->id) as $id => $details){
        //     dump($details['id']);  
        // }
        // dd();
        if($pass != $request->pass){
            return redirect()->back()->withErrors('Passcode does not match');
        }
        else{
            // return redirect()->back()->withErrors('Passcode matches');
            $newTransactionDetail = new TransactionDetail();
            $newTransactionDetail->user_id = Auth::user()->id;
            $newTransactionDetail->date = \Carbon\Carbon::now();
            // dump($newTransactionDetail->date);
            // dd($newTransactionDetail->date->shiftTimezone('Asia/Jakarta'));
            $newTransactionDetail->save();
            foreach (session('CART'.Auth::user()->id) as $id => $details){
                $newTransaction = new Transaction();
                $newTransaction->transaction_detail_id = $newTransactionDetail->id;
                $newTransaction->product_id = $details['id'];
                $newTransaction->quantity = $details['quantity'];
                $newTransaction->save();
            }
            session()->forget('CART'.Auth::user()->id);
            return redirect()->route('home')->with('alert', 'You will receive our products soon! Thank you for shopping with us!');
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
