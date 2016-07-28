@extends('layouts.master')


@section('title')

    Welcome to omdb
@stop
@section('content')

    <div class="wrapper">
        <div class="col-md-6">
        <form class="form-signup" method="post" action = "{{  route('login') }}">
            {{ csrf_field() }}
            <h2 class="form-signup-heading">Register</h2>
            <label >Name</label>
            <input class="form-control" name="first_name" id="first_name"  type="text" value="{{ Request :: old('first_name') }}" />
            <label >Email</label>
            <input class="form-control" name="email" id="email"  type="text" value="{{ Request :: old('email') }}" />
            <label >Password</label>
            <input class="form-control" name="password" id="password"  type="password" value="{{ Request :: old('password') }}" />
            <label class="checkbox">
                <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
            </label>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
        </form>
        </div>
        <div class="col-md-6">
            <form class="form-signin" method="post" action = "{{  route('signin') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <h2 class="form-signin-heading">Sign In</h2>
                <label >Email</label>
                <input class="form-control" name="email" id="email"  type="text" value="{{ Request :: old('email') }}" />
                <label >Password</label>
                <input class="form-control" name="password" id="password"  type="password" value="{{ Request :: old('password') }}" />
                <label class="checkbox">
                    <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
                </label>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
            </form>
        </div>
    </div>
@stop