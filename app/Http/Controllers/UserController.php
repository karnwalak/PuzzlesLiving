<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Models\User;
use Validator;
class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['status'=>'error', 'errors'=>$validator->errors()]);
        }else{
            $email = $request->email;
            $password = $request->password;
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                return response()->json(['status'=>'success','message'=>'Login Successfully!']);
            }else{
                return response()->json(['status'=>'error', 'error'=>'Invalid email or password!']);
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
