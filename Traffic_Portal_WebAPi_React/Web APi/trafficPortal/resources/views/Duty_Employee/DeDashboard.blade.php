
@extends('layouts.deApp')
@section('content')
<link href="{{ asset('css/de_dashboard.css') }}" rel="stylesheet">
<div class="container-parent">
    
    <div class="child-container-1"align="center">
        
        <div style="padding:10px">
            <h1>Employees Daily Duty</h1>
            <p class="fs-5">Today's Duty</p>
            <p class="fs-5">From 8am to 4pm </p>
        </div>

    </div>
    <div class="child-container-1"align="center">
        
        <div style="padding:10px" >
            <h1>Employee's Profile </h1>
            <p class="fs-5" ><img src="pexels-pixabay-220453.jpg" alt="Employee's Display Picture" width="200" height="80"></p>
            <p class="fs-5">Name: Paul Tamal </p>
        </div>

    </div>

</div>
<div class="container-parent">
    
    <div class="child-container-1"align="center">
        
        <div style="padding:10px">
        <h1>Weekly Schedule</h1>

<table id="customers">
  <tr>
    <th>Day</th>
    <th>Traffic point</th>
    <th>Schedule</th>
  </tr>
 
  
  @foreach($employe as $employe)
                <tr>
                    <td>{{$employe->date}}</td>
                    <td>{{$employe->tp_id}}</td>
                    <td>{{$employe->schedule_name}}</td>
                    
                </tr>
  @endforeach
  
</table>

        </div>

    </div>
        <div class="child-container-1"align="center">
        
        <div class="child-container-2"align="center">
        
        <div style="padding:10px" >
            <h1>Traffic Incharge </h1>
            <p class="fs-5" ><img src="pexels-pixabay-220453.jpg" alt="Employee's Display Picture" width="200" height="80"></p>
            <p class="fs-5">Name: Mr. Paul </p>
            <p class="fs-5">Phone No: 01745454545 </p>
        </div>

    </div>
    <div class="child-container-2"align="center">
        
        <div style="padding:10px" >
            <h1>Area Incharge </h1>
            <p class="fs-5" ><img src="pexels-pixabay-220453.jpg" alt="Employee's Display Picture" width="200" height="80"></p>
            <p class="fs-5">Name: Mr. Paul </p>
            <p class="fs-5">Phone No: 01745454545 </p>
        </div>

    </div>


    </div>

</div>