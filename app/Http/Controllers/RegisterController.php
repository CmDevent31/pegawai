<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'register',
            'active' => 'register'
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        Akun::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('/home');
    }
}
