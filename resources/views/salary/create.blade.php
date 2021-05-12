@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['action'=>'SalaryController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('months',  'months')}}
    {{Form::text('months','', ['class' =>'form-control', 'placeholder' => "Months"])}}
</div>

<div class="form-group">
    {{Form::label('amount',  'amount')}}
    {{Form::text('amount','', ['class' =>'form-control', 'placeholder' => "Amount"])}}
</div>

<div class="form-group">
    <label for="users">Pick a Registered User</label>
    <select type="users" name="user_id" class="form-control" >
    <!-- @if(count($user) > 0) -->
        @foreach ($user as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>
</div>
<!-- @endif -->
{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
</div>
@endsection