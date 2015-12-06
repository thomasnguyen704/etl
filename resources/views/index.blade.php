@extends('layouts.master')

@section('head')
@stop

@section('title') 
ETL Work Tracker
@stop


@section('content')

@if(Auth::check())
    <h1 class="page-header"> ETL Work Tracker </h1> 
    <div class="row">
        <div class="col-sm-4">
            <p class="lead"> <a href="/req/create">Create</a> <br>
            <span class="small">Start a new ETL request where you can track workflow and documentation</span>
            </p>
            <p class="lead"> <a href="/req">View and Edit</a> <br>
            <span class="small">View and search ETL requests with key attributes and docmentation</span>
            </p>
        </div>
        <div class="col-sm-8 well">
            <div id="myChart"></div>
        </div>
    </div>

    @else
    <div class="jumbotron text-center">
        <h1 class="page-header"> ETL Work Tracker </h1>
        <h2> Document and Track ETL Work </h2><br>
        <div class='login-form'>   
            <form method='POST' action='/login' class='form-inline'>
                {!! csrf_field() !!}
                <div class='form-group'>
                    <label for='user' class='sr-only'>Username</label>
                    <input type='text' name='user' id='user' class='form-control' placeholder="Username" value='{{ old('user') }}'>
                </div>
                <div class='form-group'>
                    <label for='password' class='sr-only'>Password</label>
                    <input type='password' name='password' id='password' class='form-control' placeholder="Password" value='{{ old('password') }}'>
                </div>
                <button type='submit' class='btn btn-danger'>Login</button>
            </form><br>
            @if(count($errors) > 0)
                @foreach ($errors->all() as $error)
                <small class='text-danger text-center'>{{ $error }}</small><br>
                @endforeach
            @endif
        </div><!--./login form -->
    </div>
    @endif

@stop<!-- end content -->


@section('js')
<script>
$(function () {
    var months = ["1","2","3","4","5","6","7",">7"];

    $('#myChart').highcharts({
        chart: { type: 'line' },
        title: { text: '# Open Requests' },
        subtitle: { text: 'Goal: 7 Day Cycle Time' },
        xAxis: { title: {text:'Day'}, categories: months, crosshair: true },
        yAxis: { min: 0, title: { text: '# Requests' } },
        plotOptions: { column: { pointPadding: 0.2, borderWidth: 0 } },
        series: [{ name: '# Requests', data: [20,15,10,5,3,2,1,1] }]
    });
});
</script>

@stop









