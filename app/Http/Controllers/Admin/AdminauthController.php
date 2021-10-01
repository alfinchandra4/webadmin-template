<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminauthController extends Controller
{
    public function login() {
        return view('login');
    }

    public function attempting(Request $request) {
        if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('/admin/dashboard/');
        }
        return back()->withError('Invalid credentials');
    }

    public function logout() {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        }
        return redirect('/login');
    }
}
