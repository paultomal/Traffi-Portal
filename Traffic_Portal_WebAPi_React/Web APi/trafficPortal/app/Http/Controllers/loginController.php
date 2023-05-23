<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SystemUser;
use App\Models\Token;
use DB;
use PhpParser\Parser\Tokens;
use DateTime;


class loginController extends Controller
{
    public function loginVeiw(){
        return view('login');
    }
    

    public function login(Request $request){
        // $validate = $request->validate([
        //     "email"=>"required",
        //     "password"=>"required"
        // ]
        // );

        $data = SystemUser::where('email','=',$request->email)->where('password','=',$request->password)->first();
        if($data)
        {
            // $request->session()->put('id',$data->employee_id);
            // $request->session()->put('role',$data->role);
            // if($data->role == "ai")
            // {
            //     return redirect('/ai');
            // }
            // else if($data->role == "tp")
            // {
            //     return redirect('/tpi');
            // }
            // else if($data->role == "de")
            // {
            //     return redirect('/dutyemployee');
            // }
            $token =  substr(bin2hex(random_bytes(25)),
                                          0, 25);
            $tokens = new Token;
    
            $tokens->token_key = $token;
            $tokens->emplyee_id = $data->employee_id;
            $tokens->role = $data->role;
            
         
    
            //DB::insert('insert into tokens values(?)',[$tokens->token_key,$tokens->emplyee_id,$tokens->role]);
            $tokens->save();
            //$test = Token::all();


            return $tokens;
           
        }
        else{
            //return redirect()->to('/login?msg ="wrong"');
            return "invalid usser name or Password";
            
        }
  
    }
    public function logout(Request $request){
        // session()->forget('id');
        // session()->forget('role');
        $token = Token::where('token_key','=', $request->token_key)
                ->update(['expire' => new DateTime()]);
        $token->save();


        return $token;
    }
    
}
