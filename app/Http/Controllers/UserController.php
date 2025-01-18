<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    function signUp(){
        return view('signup');
    }
    function signForm(Request $req){
        $data = $req->all();
        $data['password']=bcrypt($data['password']);
        $user = User::create($data);
        $result['token']=$user->createToken('test')->plainTextToken;
        return ["sucess"=>true,"massege"=>"user added Sucess","result"=>$result];
    }

    function login(){
        return view('login');
    }

    
    function loginForm(Request $req){
        // return $req->input();
        $data = User::where('email',$req->email)->first();
        if(!$data || !Hash::check($req->password,$data->password)){
            return ['Login Failed' => true, 'success' => false, 'message' => "User Login Failed"];
        }
        $result['token']=$data->createToken('test')->plainTextToken;
        return ["sucess"=>true,"massege"=>"user added Sucess","result"=>$result];
    }
}
