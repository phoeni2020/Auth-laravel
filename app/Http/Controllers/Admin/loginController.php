<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Session;
class loginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showformlogin()
    {
        Session::flash('message', 'This is a message!');
        return view('admin.auth.login');
        //view('admin.auth.login')->with('name','khaled');
    }


    public function login(Request $request)
    {
        if (Auth::guard('admin')
            ->attempt(['email' => $request->email, 'password' => $request->password ])) {

            return redirect()->route('admin.dashbord');
        }
        else{
            return 'worng pass';
        }
    }
}
