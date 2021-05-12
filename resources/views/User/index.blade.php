@extends('layouts.app') 
@section('title')
Index |  Mima Water 
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available User</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                            ID
                                        </th>
                                       
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Position
                                        </th>
                                        <th>
                                            Mobile
                                        </th>
                                        <th>
                                            Address
                                        </th>
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @if(count($users) > 0)
                                        @foreach($users as $user)
                                        <tr>
                                            <td>
                                                {{$user->id}}
                                            </td>
                                            <td>
                                                {{$user->name}} 
                                            </td>
                                            <td>
                                                {{$user->email}} 
                                            </td>
                                            <td>
                                                {{$user->position}} 
                                            </td>
                                            <td>
                                                {{$user->mobile}} 
                                            </td>
                                            <td>
                                                {{$user->address}} 
                                            </td>
                                            <td class="text">
                                                <a href="{{url('/user')}}/{{$user->id}}" class="btn btn-warning">VIEW Users</a>
                                                {{-- <a href="{{url('/admin')}}/{{$courses->id}}/edit" class="btn btn-warning">EDIT program</a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p> No user found </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <li> <a href="{{url('dashboard')}}">Back To Dashboard</a></li>

</div>
@endsection