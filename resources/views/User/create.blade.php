@extends('layouts.app')
User | Mima
@section('content')
<div class="container">
    {!! Form::open(['action'=>'UserController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name',  'name')}}
    {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "name"])}}
</div>

<div class="form-group">
    {{Form::label('position',  'position')}}
    {{Form::text('position','', ['class' =>'form-control', 'placeholder' => "position"])}}
</div>


<div class="form-group">
    {{Form::label('mobile',  'mobile')}}
    {{Form::text('mobile','', ['class' =>'form-control', 'placeholder' => "mobile"])}}
</div>


<div class="form-group">
    {{Form::label('address',  'address')}}
    {{Form::text('address','', ['class' =>'form-control', 'placeholder' => "address"])}}
</div>
<div class="form-group">
    {{Form::label('email',  ' Email')}}
    {{Form::text('email','', ['class' =>'form-control', 'placeholder' => " Email"])}}
</div>
<div class="form-group row">
    <label for="password" class="col-md-7 col-form-label text-md-left">{{ __('Password') }}</label>
    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    </div>
</div>
{{-- <div class="form-group">
    {{Form::label('password',  'Password')}}
    {{Form::text('password','', ['class' =>'form-control', 'placeholder' => "Password"])}}
</div>  --}}


{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection