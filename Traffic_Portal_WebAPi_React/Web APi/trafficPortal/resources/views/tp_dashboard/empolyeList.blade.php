@extends('layouts.tpApp')
@section('content')
<style>
    #employee{
font-family: Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 100%;
}

#employee td, #customers th {
border: 1px solid #ddd;
padding: 8px;
}

#employee tr:nth-child(even){background-color: #f2f2f2;}

#employee tr:hover {background-color: #ddd;}

#employee th {
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #4895a0;
color: white;
}
</style>
<div class="d-flex justify-content-center" style="padding: 20px;margin-top:40px">
    <table id="employee">
        <tr>
            <th>Employe id</th>
            <th>Employe Name</th>
            <th>Slot</th>
        </tr>
        @foreach($empolye as $empolye)
        <tr>
            <td>{{$empolye->emplyee_id}}</td>
            <td>{{$empolye->employe_name}}</td>
            <td>8 Am - 4 Pm</td>
        </tr>
        @endforeach
        
    </table>
</div>
@endsection