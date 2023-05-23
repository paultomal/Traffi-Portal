<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DutyList;
use App\Models\EChalan;

class dutyEmployeeControler extends Controller
{
    //
    function loadDutyEmployeeView()
    {

        $id = session()->get('id');
        $employe = DutyList::where('employe_id','=',$id)->get(); 

        

        return view("Duty_Employee.DeDashboard")->with("employe",$employe);

    }
    function loadDutyScheduleView()
    {
        $id = session()->get('id');
        $employe = DutyList::where('employe_id','=',$id)->get(); 
        return view("Duty_Employee.DeWeekSchedule")->with("employe",$employe);
    }
    function loadE_ChalanView()
    {
        $id = session()->get('id');
        $chalan = EChalan::where('employe_id','=',$id)->get(); 
        return view("Duty_Employee.DeEchalan")->with("chalan",$chalan);
    }
   
   //
    // public function weekSchedule()
    // {
       
    // }
}
