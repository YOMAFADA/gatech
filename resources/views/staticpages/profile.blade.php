@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit</h1>
    {!! Form::open(['action'=>['ProfileController@update', Auth::user()->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'name')}}
            {{Form::text('name', Auth::user()->name, ['class' =>'form-control', 'placeholder' => " Name"])}}
        </div>
        <div class="form-group">
            {{Form::label('position',  'position')}}
            {{Form::text('position', Auth::user()->position, ['class' =>'form-control', 'placeholder' => "Position"])}}
        </div>
        <div class="form-group">
            {{Form::label('address',  'address')}}
            {{Form::text('address', Auth::user()->address, ['class' =>'form-control', 'placeholder' => "Address"])}}
        </div>

        <div class="form-group">
            {{Form::label('email',  'Email')}}
            {{Form::text('email', Auth::user()->email, ['class' =>'form-control', 'placeholder' => "Email"])}}
        </div>

        <div class="form-group">
            {{Form::label('password',  'password')}}
            {{Form::text('password', '', ['class' =>'form-control', 'placeholder' => "Password"])}}
        </div>
<div style="padding-top:15px;">      
{{Form::submit('Update', ['class'=>'btn btn-primary'])}}     
{{Form::hidden('_method', 'PUT')}}
{!! Form::close() !!}
</div>
@endsection