<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeDetails;
use App\Models\DutyList;
use DB;

class tpdashboard extends Controller
{
    public function dutyEmployeProfile($idd)
    {
        
        $employe = EmployeeDetails::where('emplyee_id','=',$idd)->get();
        return $employe;

    }

    public function index()
    {
        $adtee = date("Y-m-d");
        $employe = DutyList::where('date','=',$adtee)->get();
        $count = EmployeeDetails::where('status','=','running')->count();
        
     
        return view('tp_dashboard.tpDashboard')->with('employee', $employe)->with('count', $count);

    }

    public function em_list()
    {
        $employe = EmployeeDetails::where('status','=','running')->get();
   
        return view('tp_dashboard.empolyeList')->with('empolye', $employe);

    }
    public function monthlyzonechart()
    {
        
        $morning = DB::select("select sum(vechile_numbers) as totalm from traffic_point_statuses where 
                    monthname(date) = 'November' and schedule_name = 'morning' ");
        $afternoon = DB::select("select sum(vechile_numbers) as totala from traffic_point_statuses where 
                    monthname(date) = 'November' and schedule_name = 'afternoon' ");
        $night = DB::select("select sum(vechile_numbers) as totaln from traffic_point_statuses where 
                    monthname(date) = 'November' and schedule_name = 'night' ");
        $alldata = array(
            'morning'=>$morning[0]->totalm,
            'afternoon'=>$afternoon[0]->totala,
            'night'=>$night[0]->totaln
        );
        $alldatas[] = (object)$alldata;


        return $alldatas;

    }
    public function dailyzonechart()
    {
        $adtee = date("Y-m-d");
        $morning = DB::select("select sum(vechile_numbers) as totalm from traffic_point_statuses where 
                    date = CURDATE() and schedule_name = 'morning' ");
        $afternoon = DB::select("select sum(vechile_numbers) as totala from traffic_point_statuses where 
                    date = CURDATE() and schedule_name = 'afternoon' ");
        $night = DB::select("select sum(vechile_numbers) as totaln from traffic_point_statuses where 
                    date = CURDATE() and schedule_name = 'night' ");
        $alldata = array(
            'morning'=>$morning[0]->totalm,
            'afternoon'=>$afternoon[0]->totala,
            'night'=>$night[0]->totaln
        );
        $alldatas[] = (object)$alldata;


        return $alldatas;

    }
}