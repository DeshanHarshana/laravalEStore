<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LoginController extends Controller
{
    function index(){
        return view('login');
    }
    function successLogin(){
        return view('success');
    }
    function admin(){
        return view('admin.admin');
    }
    function employee(){
        return view('employee.employee');
    }
    function error(){
        return view('error');
    }
    function registor(){
        return view('registor');
    }
    function customer(){
        return view('customer.customer');
    }
    function checkLogin(Request $request){
        //validation
        $request->validate(
            [
                'email'=>'required',
                'password' => 'required'
            ]
            );

        //authentication
        $user_data=array(
            'email'=>$request->get('email'),
            'password'=>$request->get('password'),
            'role'=>"emp"
        );
        $user_data2=array(
            'email'=>$request->get('email'),
            'password'=>$request->get('password'),
            'role'=>"admin"
        );
        $user_data3=array(
            'email'=>$request->get('email'),
            'password'=>$request->get('password'),
            'role'=>"customer"
        );

        if(Auth::attempt($user_data)){
            setcookie("currentUser",$request->get('email'));
                return redirect('employee');


        }
        else if(Auth::attempt($user_data2)){
            return redirect('admin');
        }
        else if(Auth::attempt($user_data3)){
            setcookie("currentUser",$request->get('email'));

            return redirect('customer');
        }
        else{
            return redirect('/')->with('error', 'Wrong Details') ;
        }
        return redirect('/')->with('error', 'Wrong Details') ;
    }
    function logout(){
        Auth::logout();
        setcookie("currentUser", "", time() - 3600);

        return redirect('/');
    }
}
