<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Invalid username or password.');

    }

    public function index()
    {
        $role = Auth::user()->role;

        switch ($role) {
            case 'admin':
                return view('admin.dashboard');
            case 'user': {
                // $categories = Category::all();
                return view('user.dashboard');
            }
                
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
