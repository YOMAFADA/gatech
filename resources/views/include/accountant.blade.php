@extends('layouts.app')
@section('content')
<li>Accountant Dashboard</li>
<ul>
<li><a href="{{url('salary')}}">View Salary</a></li>
    <li><a href="{{url('profile')}}">View profile</a></li>
    <li><a href="{{url('dailyreport')}}">View Daily Report</a></li>
</ul>
<li>Pay Salaries</li>
<ul>
    
    <li> <a href="{{url('salary/create')}}">Create Salaries</a></li>
    <li> <a href="{{url('dailyreport/create')}}">Create Reports</a></li>
 
</ul>


@endsection