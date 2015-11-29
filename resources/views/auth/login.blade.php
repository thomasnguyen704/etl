@extends('layouts.master')

@section('content')
<div class='col-md-8 col-lg-6'>

    <h1>Login</h1>
    <p>Don't have an account? <a href='/register'>Register here...</a></p>
    <br>
    
    @if(count($errors) > 0)
    <ul class='errors'>
        @foreach ($errors->all() as $error)
            <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
        @endforeach
    </ul>
    <br>
    @endif

    <form method='POST' action='/login' class='form-horizontal'>

        {!! csrf_field() !!}

        <div class='form-group'>
            <label for='user' class='col-xs-3'>Username</label>
            <input type='text' name='user' id='user' class='col-xs-9' value='{{ old('user') }}'>
        </div>

        <div class='form-group'>
            <label for='password' class='col-xs-3'>Password</label>
            <input type='password' name='password' id='password' class='col-xs-9' value='{{ old('password') }}'>
        </div>

        <!--
        <div class='form-group'>
            <input type='checkbox' name='remember' id='remember'>
            <label for='remember' class='checkboxLabel'>Remember me</label>
        </div>
        -->
        
        <button type='submit' class='btn btn-primary'>Login</button>

    </form>
</div>
@stop