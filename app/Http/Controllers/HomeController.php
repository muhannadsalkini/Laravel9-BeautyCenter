<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Message;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // reviwes

    public static function countreviews($id)
    {
        return Review::where('service_id',$id)->count();
    }
    public static function avrgreview($id)
    {
        return Review::where('service_id',$id)->average('rate');
    }

    // Category list
    public static function categorylist()
    {
        return Category::with('children')->where('parent_id',0)->get();
    }

    public static function getsetting()
    {
        return Setting::first();
    }

    public function service($id)
    {
        $setting = HomeController::getsetting();
        $data = Service::find($id);
        $reviews = Review::where('service_id',$id)->get();
        $images = DB::table('images')->where('service_id',$id)->get();
        $services = DB::table('services')->where('category_id', $data->category_id)->get();
        //print_r($data);
        //exit();
        $attributes = [
            'data'=>$data,
            'setting'=>$setting,
            'images'=>$images,
            'services'=>$services,
            'reviews'=>$reviews
        ];
        return view('home.service_detail', $attributes);
    }

    public function getservice(Request $request)
    {
        $search=$request->input('search');

        $count = Service::where('title', 'like', '%'.$search.'%')->get()->count();
        if ($count==1)
        {
            $data = Service::where('title', 'like', '%'.$search.'%')->first();
            return redirect()->route('service',['id'=>$data->id]);
        }
        else
        {
            return redirect()->route('servicelist',['search'=>$search]);
        }
    }

    public function servicelist($search)
    {
        $datalist = Service::where('title' , 'like', '%'.$search.'%')->get();
        return view('home.search_services',['search'=>$search,'datalist'=>$datalist]);
    }

    public function index()
    {
        $setting = HomeController::getsetting();
        $slider = Service::with('category')->limit(4)->get();
        $daily = Service::with('category')->limit(3)->inRandomOrder()->get();
        $category = Category::get();
        //print_r($slider);
        //exit();
        $attributes = [
            'setting'=>$setting,
            'slider'=>$slider,
            'category'=>$category,
            'daily'=>$daily,
        ];
        return view('home.index', $attributes);
    }

    public function categoryservice($id)
    {
        $setting = HomeController::getsetting();
        $datalist = Service::where('category_id', $id)->get();
        $data = Service::find($id);
        //print_r($data);
        //exit();
        return view('home.category_services', ['data'=>$data,'datalist'=>$datalist, 'setting'=>$setting]);
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
        $setting = HomeController::getsetting();
        return view('home.about', ['setting'=>$setting]);
    }

    public function blog()
    {
        $setting = HomeController::getsetting();
        return view('home._coming_soon',['setting'=>$setting]);
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

    public function sendmessage(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);

        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        return redirect('contact-us')->with('success', 'Successfully sent, Thank you.');
    }

    public function comingsoon()
    {
        return view('home._coming_soon');
    }
}
