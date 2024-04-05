<?php

namespace App\Http\Controllers;

use App\Models\shops;
use App\Models\users;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showRegister()
    {
        //
        return View('registerPage.register');
    }

    public function showLogin()
    {
        //
        return View('loginPage.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function handleLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công
            // Lấy user đăng nhập hiện tại
            $user = Auth::user();

            // Kiểm tra xem người dùng có liên kết với một cửa hàng nào không
            $shop = shops::where('user_id', $user->id)->first();

            // Lưu trạng thái có shop vào session
            if ($shop) {
                Session::put('has_shop', true);
            } else {
                Session::forget('has_shop');
            }
            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin');
            }
            return redirect()->intended('/');
        }

        // Đăng nhập thất bại
        return back()->withErrors([
            'email' => 'Sai tài khoản hoặc mật khẩu.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'country_region' => ['required', 'string', 'max:255'],
            'trade_role' => ['required', 'string', 'max:255', 'in:Buyer,Seller,Both'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
            'full_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
        ]);
        // dd($request->all());

        if ($validator->fails()) {
            // $validator->errors()->add('password_confirmation', 'The password confirmation does not match.');
            return redirect()->route('register')
                ->withErrors($validator)
                ->withInput();
        }

        $user = users::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'country_region' => $request->country_region,
            'trade_role' => $request->trade_role,
            'company_name' => $request->company_name,
            'full_name' => $request->full_name,
            'phone_number' => $request->phone_number,
        ]);
        event(new Registered($user));
        // dd($request->user());
        return redirect()->route('login');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
