@extends('layouts.app') 
@section('title')
   G A Technology
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available salarys</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            ID
                                        </th>
                                       
                                        <th>
                                            months
                                        </th>
                                        <th>
                                            amount
                                        </th>
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @if(count($salarys) > 0)
                                        @foreach($salarys as $salary)
                                        <tr>
                                            <td>
                                                {{$salary->id}}
                                            </td>
                                            <td>
                                                {{$salary->month}} 
                                            </td>
                                            <td>
                                                {{$salary->amount}} 
                                            </td>
                                           
                                            <td class="text">
                                                <!-- <a href="{{url('salary')}}/{{$salary->id}}" class="btn btn-warning">VIEW salary</a> -->
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p> No salary found </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <li> <a href="{{url('dashboard')}}">Back To Dashboard</a></li>
</div>
@endsection