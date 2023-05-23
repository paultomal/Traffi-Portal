@extends('layouts.deApp')
@section('content')
<link href="{{ asset('css/de_dashboard.css') }}" rel="stylesheet">
<div class="container-parent1">
    
    <div class="child-container-1"align="center">
        
        <div style="padding:10px">
        <h1>Display a Submit Button</h1>

<form action="/DeEchalan">
    <table id="customers">
  <label for="fname">First name: </label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="transport">Transport: </label>
  <input type="text" id="transport" name="transport"><br><br>
  <label for="vahicalno">Vehicle No: </label>
  <input type="text" id="vahicalno" name="vahicalno"><br><br>
  <label for="crime">Crime: </label>
  <input type="text" id="crime" name="crime"><br><br>
  <label for="fee">Fee: </label>
  <input type="text" id="fee" name="fee"><br><br>
  <input type="submit" value="Submit">
</table>
</form> 
        <h1>E-Chalan</h1>

<table id="customers" >
  <tr >
    <th>Name</th>
    <th>Transport</th>
    <th>vehicle No.</th>
    <th>Crime</th>
    <th>Fee</th>
  </tr>
  @foreach($chalan as $chalan)
                <tr>
                    <td>{{$chalan->name}}</td>
                    <td>{{$chalan->trasport}}</td>
                    <td>{{$chalan->vehicle_no}}</td>
                    <td>{{$chalan->crime}}</td>
                    <td>{{$chalan->fee}}</td>
                    
                </tr>
  @endforeach
  
 
</table>

        </div>

    </div>
    </div>