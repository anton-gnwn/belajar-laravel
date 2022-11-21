<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        // return $request->all();    == Untuk mengecek apakah berhasil atau tidak

        // Validasi data
        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:15'
        ]);

        // Mengubah Password menjadi script Versi 1
        // $validatedData['password'] = bcrypt($validatedData['password']);    
        // Versi 2 
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Menambahkan/INSERT kedalam database tabel Users
        User::create($validatedData);

        // Menampilkan alert success
        // $request->session()->flash('success', 'Registration successfull! Please login.');

        // Setelah register di arahkan ke halaman Login dengan membawa alert success
        return redirect('/login')->with('success', 'Registration successfull! Please login.');
    }
}
