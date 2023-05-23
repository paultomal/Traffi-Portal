@extends('layouts.deApp')
@section('content')
<link href="{{ asset('css/de_dashboard.css') }}" rel="stylesheet">
<div class="container-parent1">
    
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
    </div>