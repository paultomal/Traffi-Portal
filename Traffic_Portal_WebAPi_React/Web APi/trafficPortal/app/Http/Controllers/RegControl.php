<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use DB;

class RegControl extends Controller
{
    public function ApiView(){
        return Registration::all();
    }

    public function Create(Request $req){
        $reg = new Registration();
        $reg->name = $req->name;
        $reg->age = $req->age;
        $reg->email = $req->email;
        $reg->phn = $req->phn;
        $reg->adrs = $req->adrs;
        $reg->pass = $req->pass;
       
        $reg->save();
        return $req;
    }
}
