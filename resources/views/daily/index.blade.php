@extends('layouts.app') 
@section('title')
   G A Technology
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available Dailyreports</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            ID
                                        </th>
                                       
                                        <th>
                                            title
                                        </th>
                                        
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @if(count($dailyreports) > 0)
                                        @foreach($dailyreports as $dailyreport)
                                        <tr>
                                            <td>
                                                {{$dailyreports->id}}
                                            </td>
                                            <td>
                                                {{$dailyreports->title}} 
                                            </td>
                                           
                                            <td class="text">
                                                <!-- <a href="{{url('dashboard')}}" class="btn btn-warning">VIEW dailyreport</a> -->
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p> No Report found </p>
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