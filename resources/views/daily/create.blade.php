@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['action'=>'DailyreportController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('title',  'title')}}
    {{Form::text('title','', ['class' =>'form-control', 'placeholder' => "title"])}}
    
</div>
<div class="form-group">
    <label for="file">File Select</label>
    <input required type="file" class="form-control" name="file">
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