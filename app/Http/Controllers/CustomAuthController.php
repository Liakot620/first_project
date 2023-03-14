<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function registration(){
        return view("auth.registration");
    }

    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12'
        ]);

        $user= new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password= Hash::make($request->password);
        $res =$user->save();
        if($res){
            return back()->with('success','you have register successfully');
        }
        else{
            return back()->with('fail','Something wrong');
        }
    }

    public function loginUser(request $request){
        $request->validate([
            'email'=>'required|email|',
            'password'=>'required|min:5|max:12'
        ]);

        $user=User::where('email','=' ,$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginiID',$user->id);
                return redirect('dashboard');
            }
            else{
                return back()->with('fail','Password not matches ');
            }
        }
        else{
            return back()->with('fail','This email is not registerd ');
        }
    }
    public function dashboard(){


        if(Session::get('loginiID')){
            $user_id = Session::get('loginiID');
            
            $data['user'] = User::find($user_id);
           
            return view('dashboard',$data);
        }else{
            return redirect('login');
        }
    }
    public function logout(){
        if(Session::has('loginiID')){
            Session::pull('loginiID');
            return redirect('login');
        }
    }
}
