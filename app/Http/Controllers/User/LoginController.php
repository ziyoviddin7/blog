<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function create()
    {
        return view('user.login');
    }

    public function store(Request $request) 
    {
        
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (! Auth::attempt($credentials))
        {
            return back()
            ->withInput()
            ->withErrors([
                'email' => 'These credentials do not match our records.'
            ]);
        }

        return redirect()->route('task.index');
    }
}
