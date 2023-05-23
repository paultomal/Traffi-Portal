<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrafficPoint;
use App\Models\EmployeeDetails;
use DB;

class aidashboard extends Controller
{
    public function dutyEmployeProfile($id)
    {
        
        $employee = EmployeeDetails::where('tp_id','=',$id)->get();
        return $employee;

    }
    public function index()
    {
        $trafficpoint = TrafficPoint::where('area_id','=',44223)->get();
   
        return view('area_incharge.aiDashboard')->with('trafficpoint', $trafficpoint);

    }

    public function AiProfile()
    {
        $areaincharge = array();
        $areaincharge = array(
            "name" => "Area Incharge ",
            "id" =>"8743"
        );
        $areaincharges[] = (object)$areaincharge;
        
        return view('area_incharge.areaProfile')->with('areaincharge', $areaincharges);

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
}

