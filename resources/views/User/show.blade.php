@extends('layouts.app')
@section('title', 'users | Findworka')
@section('content')
<div class="container">
    <h1>user firstName:{{$users->firstname}}</h1>
    <p><b>user lastname</b>:{{$users->lastname}}</p>
    <p><b>user id</b>:{{$users->id}}</p>
    <p><b>user email</b>:{{$users->email}}</p>
    <a class="btn btn-primary mb-3" href="{{url('/user')}}/{{$users->id}}/edit" class="btn btn-default">Edit Users</a>
{!!Form::open(['action'=> ['UserController@destroy', $users->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>     
<li> <a href="{{url('dashboard')}}">Back To Dashboard</a></li>
@endsection