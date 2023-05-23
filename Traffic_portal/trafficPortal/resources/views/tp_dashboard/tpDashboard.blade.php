<!-- Modal -->
@extends('layouts.tpApp')
@section('content')
<link href="{{ asset('css/tp_dashboard.css') }}" rel="stylesheet">
<div id="popup">
    <button class="btn popup-exit" onclick="cnclemail()"><i class="fa-solid fa-xmark"></i></button>
    <form action="index.html" method="post">
        
        <h1>Email Form</h1>
        
        <fieldset>
         
          
          <label for="name">Subject:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="mail">Email Body:</label>
          <input type="email" id="mail" name="user_email">
        </fieldset>
          
        <button type="submit">Sign Up</button>
        
      </form>
</div>
<div class="container-parent">
    
    <div class="child-container-1">
        
        <div style="padding:10px">
            <h1>Duty employee</h1>
            <p class="fs-5">Total Employe: 16</p>
            <p class="fs-5">Available  Employe: {{$count}}</p>
        </div>
        <hr>
        <div style="padding: 10px">
            <table id="employee">
                <tr>
                    <th>Employe id</th>
                    <th>Slot</th>
                </tr>
                @foreach($employee as $employee)
                <tr ondblclick="details(<?php echo $employee->d_id?>)">
                    <td>{{$employee->d_id}}</td>
                    <td>{{$employee->schedule_name	}}</td>
                </tr>
                @endforeach
                
            </table>
        </div>
    </div>
    {{-- 2nd grid --}}
    <div style="background-color:rgb(255, 255, 255);margin:10px">
        
        <div  id="detils_table" class="p-3 text-center">
           

        </div>
        
    </div>

    {{-- 3rd --}}
    <div class="d-flex justify-content-center" style="background-color:rgb(255, 255, 255); margin:10px;padding 10px;">
        <div style="width:500px;margin-top:20px">
           <select class="form-select" aria-label="Default select example" id="chart_option_one"  onclick="chartt()">
                <option selected>Monthly</option>
                <option value="1">Daily</option>
            </select>
            <div >
                <canvas id="myChart"></canvas>
            </div>
            
        </div>
        
    </div>
    <div style="background-color:rgb(255, 255, 255); margin:10px;padding 10px;">
        <div style="width:500px">
            <canvas id="2ndchart"></canvas>
        </div>
    </div>
</div>


  
  

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript" src="{{asset('js/tp_dashboard.js')}}"></script>
<script>
    
    
</script>
@endsection