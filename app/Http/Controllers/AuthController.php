<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Login;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }


    public function registration()
    {
        return view('register');
    }


    public function postLogin(Request $request)
    {
        $request->validate([
            'userid' => 'required',
            'passwd' => 'required',
        ]);

        $credentials = $request->only('userid', 'passwd');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('You have Successfully loggedin');
        }

        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }


    public function postRegistration(Request $request)
    {
        $request->validate([
            'userid' => 'required',
            'passwd' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('Great! You have Successfully logged in');
    }

    public function create(array $data)
    {
        return Login::create([
            'userid' => $data['userid'],
            'passwd' => Hash::make($data['passwd']),
            'userstatus' => '1'
        ]);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

}
