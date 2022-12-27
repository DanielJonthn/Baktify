<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            'address' => 'required',
            'phone' => 'required'
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
        return redirect('home');
      }

    public function submitLogin(Request $request){
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:20'
        ]);
        // $email = $request->input('email');
        // $password = $request->input('password');
        if(!Auth::attempt($credential)){
            return redirect()->back()->withErrors('Invalid Credential!');
        }

        // if(!Auth::attempt(['user_email' => $email, 'user_password' => $password])){
        //     return redirect()->back()->withErrors('Invalid Credential!');
        // }

        return redirect()->route('home');
    }

    public function editProfile(){
        return view('pages.editProfile');
    }

    public function submitEdit(){
        $user = User::findOrFail(Auth::user()->id);
        $data = request()->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|max:20',
            'confirm' => 'required|same:password',
            'address' => 'required',
            'phone' => 'required'
        ]);

        $updateData = [
            'name' => $data['username'],
            'password' => Hash::make($data['password']),
            'address' => $data['address'],
            'phone' => $data['phone']
        ];
        $user->update($updateData);

        return redirect()->route('profile');
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
