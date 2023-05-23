<!-- Modal -->
@extends('layouts.aiApp')
@section('content')
<link href="{{ asset('css/ai_dashboard.css') }}" rel="stylesheet">

<div class="container-parent">
    
    <div class="child-container-1">
        
        <div style="padding:10px">
            <h1>Traffic Point</h1>
        </div>
        <hr>
        <div style="padding: 10px">
            <table id="trafficpoint">
            <tr>
            <th>Traffic Point ID</th>
            <th>Traffic Point Name</th>
            <th>Traffic Point Incharge</th>
            <th></th>
        </tr>
        @foreach($trafficpoint as $trafficpoint)
        <tr>
            <td>{{$trafficpoint->tp_id}}</td>
            <td>{{$trafficpoint->tp_name}}</td>
            <td>{{$trafficpoint->tp_incharge_name}}</td>
            <td><button onclick="preview(<?php echo $trafficpoint->tp_id?>)" class="btn btn-outline-secondary">View</button></td>
        </tr>
        @endforeach
                
            </table>
        </div>
    </div>
    {{-- 2nd grid --}}
    <div style="background-color:rgb(300, 255, 255);margin:10px">
    
    <div style="padding:10px">
            <h1>Details of Employees</h1>
        </div>
    <div id= "trafficpoint" ><div  id="detils_table" id="trafficpoint" class="p-3 text-center" style="padding:10px" >
            



            </div>
        
            
           

        </div>
        
    </div>

    {{-- 3rd --}}
    <div class="d-flex justify-content-center" style="background-color:rgb(255, 255, 255); margin:10px;padding 10px;">
        <div style="width:400px;margin-top:20px">
        <h1>Area Based</h1>
            <select class="form-select" aria-label="Default select example" id="chart_option_one"  onclick="chartt()">
                <option selected>Monthly</option>
                <option value="1">Weekly</option>
                <option value="2">Daily</option>
            </select>
            <div >
                <canvas id="myChart"></canvas>
            </div>
        </div>
        
    </div>
    <div class="d-flex justify-content-center" style="background-color:rgb(255, 255, 255); margin:10px;padding 10px;">
        <div style="width:400px;margin-top:20px">
        <h1>Traffic Point Based</h1>
            <select class="form-select" aria-label="Default select example" id="chart_option_one"  onclick="chartt()">
                <option selected>Monthly</option>
                <option value="1">Weekly</option>
                <option value="2">Daily</option>
            </select>
            <div >
                <canvas id="2ndchart"></canvas>
            </div>
        </div>
        
    </div>


  
  

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript" src="{{asset('js/ai_dashboard.js')}}"></script>
@endsection