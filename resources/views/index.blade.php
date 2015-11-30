@extends('layouts.master')

@section('head')
@stop

@section('title') 
    ETL Work Tracker
@stop


@section('content')

    @if(Auth::check())
    <div class="container">

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <h1 class="page-header"> ETL Work Tracker </h1>	
        
        <!-- tablesorter example -->
        <table id="myTable" class="table tablesorter">
            <thead>
                <tr class='active'>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Email</th>
                    <th>Due</th>
                    <th>Web Site</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Smith</td>
                    <td>John</td>
                    <td>jsmith@gmail.com</td>
                    <td>$50.00</td>
                    <td>http://www.jsmith.com</td>
                </tr>
                <tr>
                    <td>Bach</td>
                    <td>Frank</td>
                    <td>fbach@yahoo.com</td>
                    <td>$50.00</td>
                    <td>http://www.frank.com</td>
                </tr>
                <tr>
                    <td>Doe</td>
                    <td>Jason</td>
                    <td>jdoe@hotmail.com</td>
                    <td>$100.00</td>
                    <td>http://www.jdoe.com</td>
                </tr>
                <tr>
                    <td>Conway</td>
                    <td>Tim</td>
                    <td>tconway@earthlink.net</td>
                    <td>$50.00</td>
                    <td>http://www.timconway.com</td>
                </tr>
            </tbody>
        </table>

    </div><!-- /.container -->

    @else
    <div class="jumbotron text-center">
        <h1 class="page-header"> ETL Work Tracker </h1>
        <h2> Document and Track ETL Work </h2>
        <br>
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
            </form>
            <br>
            @if(count($errors) > 0)
                @foreach ($errors->all() as $error)
                <small class='text-danger text-center'>{{ $error }}</small><br>
                @endforeach
            @endif            
        </div><!--./login form -->
    </div>
    @endif

@stop



















@section('js')
<script>
    $(function() {
        // call the tablesorter plugin
        $("#myTable").tablesorter({
            widthFixed : true,
            widgets: ["filter"],
            widgetOptions : {
            filter_reset : '.reset',
            filter_searchFiltered : false // set to false because it is difficult to determine if a filtered row is already showing when looking at ranges
            }
        });
    });
</script>
@stop