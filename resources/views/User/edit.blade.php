@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit</h1>
    {!! Form::open(['action'=>['UserController@update', $users->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'name')}}
            {{Form::text('name', $users->name, ['class' =>'form-control', 'placeholder' => " name"])}}
        </div>

        <div class="form-group">
            {{Form::label('position',  'position')}}
            {{Form::text('position', $users->position, ['class' =>'form-control', 'placeholder' => " position"])}}
        </div>

        <div class="form-group">
            {{Form::label('mobile',  'mobile')}}
            {{Form::text('mobile', $users->mobile, ['class' =>'form-control', 'placeholder' => " mobile"])}}
        </div>
        <div class="form-group">
            {{Form::label('address',  'address')}}
            {{Form::text('address', $users->address, ['class' =>'form-control', 'placeholder' => " address"])}}
        </div>

        <div class="form-group">
            {{Form::label('email',  'Email')}}
            {{Form::text('email', $users->Email, ['class' =>'form-control', 'placeholder' => " Email"])}}
        </div>

        <div class="form-group">
            {{Form::label('password',  'Password')}}
            {{Form::text('password', $users->password, ['class' =>'form-control', 'placeholder' => " Password"])}}
        </div>
        
    
<div style="padding-top:15px;">      
{{Form::submit('Update', ['class'=>'btn btn-primary'])}}     
{{Form::hidden('_method', 'PUT')}}
{!! Form::close() !!}
</div>
<li> <a href="{{url('dashboard')}}">Back To Dashboard</a></li>
@endsection