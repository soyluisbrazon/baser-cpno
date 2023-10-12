<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function perform(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
    
    $request->session()->regenerateToken();
 
    return redirect('/');
}
}
