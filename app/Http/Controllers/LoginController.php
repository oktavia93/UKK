<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //class AuthController extends Controller

    public function login()
    {
        return view('login');
    }

    public function loginUser(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($data)) {
            $user = Auth::user();
            if ($user->role === 'Admin') {
                return redirect()->route('admin.dataproduk');
            } else {
                Session::flash ('error', 'Email atau Password Salah');
                return redirect()->back()->withInput();
            }
        }
    }
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validasi data registrasi
        // Validasi data yang diterima dari request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        // Buat user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Auth::login($user);

        // Tampilkan pesan sukses atau alihkan ke halaman tertentu
        return redirect('/login')->with('success', 'User berhasil dibuat!');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/'); // Redirect ke halaman lain setelah logout
    }
}
