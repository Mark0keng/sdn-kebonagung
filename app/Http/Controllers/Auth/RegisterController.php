<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'alpha', 'min:3', 'max:50'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed','max:20', Password::min(8)->letters()->numbers()]
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);

        Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect('/login-admin');
    }
}
