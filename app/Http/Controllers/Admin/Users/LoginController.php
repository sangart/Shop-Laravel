<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('admin.users.login', ['title' => 'Đăng nhập hệ thống']);
    }

    public function store(Request $request ){
        // dd($request->input());  //lấy toàn bộ thông tin từ inout gửi lên
        // $remember = isset($request->remember) ? true : false; //check xem có tồn tại remember

        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->input('email'),
                            'password' => $request->input('password')],
                            $request->input('remember')))
        {
            return redirect()->route('admin');
        }

        $request->session()->flash('error', 'Email hoặc pass không chính xác');


        // Session::flash('error', 'Email hoặc pass không chính xác');

        return redirect()->back();
        
    }
}
