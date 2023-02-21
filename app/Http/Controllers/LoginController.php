<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function show()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
   
        $request->validate([
            'username' => "required",
            'password' => "required",
        ]);
        
        if (Auth::attempt(['email' => $request->username, 'password' => $request->password])) {
            session([
                'email' => $request->username,
                'password' => $request->password
            ]);
            return redirect('/dashboard');
        } else {
            return redirect('/login')->withErrors(['username' => 'Invalid Email or password']);
        }

        
    }


	public function logout(Request $request)
	{
	    Auth::logout();
        session()->flush();
        return redirect('/');
	}
}
