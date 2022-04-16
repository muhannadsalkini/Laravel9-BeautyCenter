<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // Category list
    public static function categorylist()
    {
        return Category::with('children')->where('parent_id',0)->get();
    }

    public static function getsetting()
    {
        return Setting::first();
    }

    public function index()
    {
        $setting = HomeController::getsetting();
        return view('home.index', ['setting'=>$setting]);
    }

    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else
        {
            return view('admin_login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/');
    }

    // Home pages
    public function about()
    {
        return view('home.about');
    }

    public function blog()
    {
        return view('home.blog');
    }

    public function cart()
    {
        return view('home.cart');
    }

    public function checkout()
    {
        return view('home.checkout');
    }

    public function contact()
    {
        $setting = HomeController::getsetting();
        return view('home.contact',['setting'=>$setting]);
    }

    public function shop()
    {
        return view('home.shop');
    }

    public function comingsoon()
    {
        return view('home._coming_soon');
    }
}
