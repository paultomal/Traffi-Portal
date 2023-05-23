<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SystemUser;

class loginController extends Controller
{
    public function loginVeiw(){
        return view('login');
    }

    public function login(Request $request){
        $validate = $request->validate([
            "email"=>"required",
            "password"=>"required"
        ]
        );

        $data = SystemUser::where('email','=',$request->email)->where('password','=',$request->password)->first();
        if($data)
        {
            $request->session()->put('id',$data->employee_id);
            $request->session()->put('role',$data->role);
            if($data->role == "ai")
            {
                return redirect('/ai');
            }
            else if($data->role == "tp")
            {
                return redirect('/tpi');
            }
            else if($data->role == "de")
            {
                return redirect('/dutyemployee');
            }
           
        }
        else{
            return redirect()->to('/login?msg ="wrong"');
            
        }
  
    }
    public function logout(){
        session()->forget('id');
        session()->forget('role');
        return redirect('/login');
    }
    
}
