<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            $request->session()->put('key', 'value');
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }


    public function custominfo(Request $request)
    {


        $data = $request->all(); 
// dd($data);
        $file = $request->file('image');
        $user_img = $request->file('userimg');


        $fileName = '';

        if (!empty($file)) {
            $path = public_path('user_banner');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $file = $request->file('image');

            $fileName = uniqid() . '_' . trim($file->getClientOriginalName());

            $this->image = $fileName;


            $file->move($path, $fileName);
        }

        $user_img = $request->file('userimg');

        $user_img_pro = '';
        if (!empty($user_img)) {

            $path = public_path('user_img');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $file = $request->file('userimg');

            $user_img_pro = uniqid() . '_' . trim($file->getClientOriginalName());

            $this->image = $user_img_pro;


            $file->move($path, $user_img_pro);
        }



        if (!empty($data['linkedin'])) {

            $linkedin = ['linkedin', $data['linkedin']];
            dd($linkedin );
            array_push($data, $linkedin);
        }

        $arry = [
            'bio' => $data['bio'],
            'user_banner' => $fileName,
            'user_name' => $data['user_name'],
            'user_img' => $user_img_pro,  
            // 'linkedin', $data['linkedin'],
            // 'fb', $data['facebook'],
        ];

        $affected = DB::table('users')
            ->where('id', $data['id'])
            ->update($arry);



        return redirect("profile")->withSuccess('You have signed-in');
    }



    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('main_dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function  profile()
    {
        if (Auth::check()) {
            return view('profile');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function  notification_setting()
    {
        if (Auth::check()) {
            return view('notification_setting');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }




    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
