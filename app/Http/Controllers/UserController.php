<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Cookie;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.profile');
    }
    
    public function register(){
        return view('pages.register');
    }

    public function submitRegister(Request $request){
        $credential = $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|max:20',
            'confirm' => 'required|same:password',
            'address' => 'required|min:15',
            'phone' => 'required|min:11'
        ]);

        $newUser = new User();
        $newUser->name = $request->input('username');
        $newUser->email = $request->input('email');
        $newUser->password = Hash::make($request->input('password'));
        $newUser->address = $request->input('address');
        $newUser->phone = $request->input('phone');
        $newUser->role = 'Member';
        $newUser->save();

        return redirect()->route('login');
    }

    public function login(){
        return view('pages.login');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
      }

    public function submitLogin(Request $request){
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:20'
        ]);
        if($request->has('remember')){
            Cookie::queue('cemail', $request->email,30);
            Cookie::queue('cpassword', $request->password,30);
        }
        
        if(!Auth::attempt($credential)){
            return redirect()->back()->withErrors('Invalid Credential!');
        }

        $cart = session()->get('CART'.Auth::user()->id);
        if($cart)
        foreach (session('CART'.Auth::user()->id) as $id => $details){
            $product = Product::findOrFail($details['id']);
            if($product->stock == 0 || $product->stock < 1){
                unset($cart[$details['id']]);
            }
        }
        session()->put('CART'.Auth::user()->id, $cart);
        return redirect()->route('home');
    }

    public function editProfile(){
        return view('pages.editProfile');
    }

    public function submitEdit(){
        $user = User::findOrFail(Auth::user()->id);
        $data = request()->validate([
            'username' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8|max:20',
            'confirm' => 'required|same:password',
            'address' => 'required|min:15',
            'phone' => 'required|min:11'
        ]);

        $updateData = [
            'name' => $data['username'],
            'password' => Hash::make($data['confirm']),
            'address' => $data['address'],
            'phone' => $data['phone']
        ];
        $user->update($updateData);

        return redirect()->route('profile')->with('alert', 'Success Update Profile');
    }
}