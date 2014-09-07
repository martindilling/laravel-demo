@extends('layouts.basic')


@section('styles')
    @parent
    {{ HTML::style('assets/admin-lte/css/font-awesome.min.css') }}
@endsection


@section('skin', 'bg-black')


@section('content')

    <div class="form-box" id="login-box">
        <div class="header">Sign In</div>
        @include('flash::message', ['extraClass' => 'alert-login'])
        @include('layouts.partials.errors', ['extraClass' => 'alert-login'])
        {{ Form::open(['route' => 'sessions.store']) }}
            <div class="body bg-gray">
                <div class="form-group">
                    {{ Form::text('email', null, array(
                        'class' => 'form-control',
                        'placeholder' => 'Email',
                        'autofocus')) }}
                </div>
                <div class="form-group">
                    {{ Form::password('password', array(
                        'class' => 'form-control',
                        'placeholder' => 'Password')) }}
                </div>
                <div class="form-group">
                    <label class="checkbox">
                        {{ Form::checkbox('remember_me') }}
                        Remember me
                    </label>
                </div>
            </div>
            <div class="footer">
                {{ Form::submit('Sign me in', array('class' => 'btn bg-olive btn-block')) }}

                <p><a href="#">I forgot my password</a></p>

                <a href="register.html" class="text-center">Register a new membership</a>
            </div>
        {{ Form::close() }}

        <div class="margin text-center">
            <span>Sign in using social networks</span>
            <br/>
            <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
            <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
            <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

        </div>
    </div>

@endsection