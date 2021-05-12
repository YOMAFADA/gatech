@extends('layouts.app') 
@section('title')
   G A Technology
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Registered Users</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <tables>
                                    <tr>
                                        <th>id</th>
                                       
                                        <th>name</th>
                                        <th> email</th>
                                        <th> address</th>
                                        <th> mobile</th>
                                        <th> position</th>
                                        <th class="text"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        @foreach($user as $user)
                                        <tr>
                                            <td> {{$user->id}}</td>
                                            <td>{{$user->name}} </td>
                                            <td>{{$user->email}} </td>
                                            <td>{{$user->address}} </td>
                                            <td>{{$user->mobile}} </td>
                                            <td>{{$user->position}} </td>
                                            <td>
                                            <a href="{{url('salary')}}">Salary</a>
                                            <a href="{{url('salary/create')}}"> Create Salary</a>

                                            </td>
                                        </tr>
                                        @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection