@extends('layouts.master')

@section('content')
<div class='col-md-8 col-lg-6'>

    <h1>Register</h1>
    <p>Already have an account? <a href='/login'>Login here...</a></p>
    <br>


    @if(count($errors) > 0)
    <ul class='errors'>
        @foreach ($errors->all() as $error)
            <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
        @endforeach
    </ul>
    <br>
    @endif


    <form method='POST' action='/register' class='form-horizontal'>

        {!! csrf_field() !!}

        <div class='form-group'>
            <label for='name' class='col-xs-3'>Name</label>
            <input type='text' name='name' id='name' class='col-xs-9' value='{{ old('name') }}'>
        </div>

        <div class='form-group'>
            <label for='email' class='col-xs-3'>Email</label>
            <input type='text' name='email' id='email' class='col-xs-9' value='{{ old('email') }}'>
        </div>

        <div class='form-group'>
            <label for='user' class='col-xs-3'>Username</label>
            <input type='text' name='user' id='user' class='col-xs-9' value='{{ old('user') }}'>
        </div>

        <div class='form-group'>
            <label for='password' class='col-xs-3'>Password</label>
            <input type='password' name='password' class='col-xs-9' id='password'>
        </div>

        <div class='form-group'>
            <label for='password_confirmation' class='col-xs-3'>Confirm Password</label>
            <input type='password' name='password_confirmation' id='password_confirmation' class='col-xs-9'>
        </div>

        <button type='submit' class='btn btn-primary'>Register</button>

    </form>
</div>
@stop