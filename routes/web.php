<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\sanpham;
use App\Models\DanhMuc;
class loginadmin 
{
    public function index()
    {
        return view('admin.login');
    }

    public function trangchu()
    {
        return view('admin.index');
    }

    


    public function login1(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/');
        }

        // Authentication failed
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}
