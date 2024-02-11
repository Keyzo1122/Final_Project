<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use App\Http\Controllers\Controller;

use App\Models\User;

use Throwable;
use Carbon\Carbon;

class AuthController extends Controller
{
    /**
     * Display a login page.
     *
     */
    public function viewLogin(){
        return view('login');
    }
    /**
     * Process login request.
     *
     */
    public function postLogin(Request $request)
    {
        $credetials = [
            'email' => $request->usersLogin,
            'password' => $request->password,
        ];
        if (Auth::attempt($credetials)) {
            return redirect('/');
        }
        return back()->with('error', 'Error Email or Password');
    }
    
 
    /**
     * Process logout request.
     *
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}