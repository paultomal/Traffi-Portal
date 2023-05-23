<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeDetails;

class tpdutyController extends Controller
{
    public function em_list()
    {
        $student = array();

        for($i=0; $i<8; $i++){
            $student = array(
                "name" => "Student " . ($i+1),
                "id" =>($i+1)

            );
            $students[] = (object)$student; 
        }
   
        return view('tp_dashboard.duty')->with('empolye', $students);
       
    }

    public function generate()
    {
        $a=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16);

        $random_keys=array_rand($a,12);

            $morningperson1 = $a[$random_keys[0]];
            $morningperson2 = $a[$random_keys[1]];
            $morningperson3 = $a[$random_keys[2]];
            $morningperson4 = $a[$random_keys[3]];
            $afternoonperson1 = $a[$random_keys[4]];
            $afternoonperson2 = $a[$random_keys[5]];
            $afternoonperson3 = $a[$random_keys[6]];
            $afternoonperson4 = $a[$random_keys[7]];
            $night1 = $a[$random_keys[8]];
            $night2 = $a[$random_keys[9]];
            $night3 = $a[$random_keys[10]];
            $night4 = $a[$random_keys[11]];
    
        $employe = EmployeeDetails::whereIn('emplyee_id',[$morningperson1,$morningperson2,$morningperson3,$morningperson4,
                                                          $afternoonperson1,$afternoonperson2,$afternoonperson3,$afternoonperson4,
                                                          $night1,$night2,$night3,$night4])->get();
   
        //return view('tp_dashboard.empolyeList')->with('empolye', $employe);
        
        return $employe;
       
    }
}
