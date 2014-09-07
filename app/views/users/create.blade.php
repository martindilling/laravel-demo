@extends('layouts.dashboard')

@section('content')

    {{ Form::open(['route' => 'users.store', 'class' => 'user-create', 'role' => 'form']) }}

    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Account Information</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        {{ Form::label('email', 'Email:') }}
                        {{ Form::text('email', null, array(
                            'class' => 'form-control',
                            'placeholder' => 'Email',
                            'autofocus')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('password', 'Password:') }}
                        {{ Form::text('password', null, array(
                            'class' => 'form-control',
                            'placeholder' => 'Password',
                            'autofocus')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('roles', 'Roles:') }}

                        @foreach($roles as $role)
                            <div class="checkbox">
                                <label>
                                    {{ Form::checkbox('roles[]', $role->machinename) }}
                                    {{ $role->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Personal Information</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        {{ Form::label('firstname', 'First name:') }}
                        {{ Form::text('firstname', null, array(
                            'class' => 'form-control',
                            'placeholder' => 'First name',
                            'autofocus')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('lastname', 'Last name:') }}
                        {{ Form::text('lastname', null, array(
                            'class' => 'form-control',
                            'placeholder' => 'Last name',
                            'autofocus')) }}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-footer">
                    {{ Form::submit('Create user', array('class' => 'btn btn-primary')) }}
                </div>
            </div>
        </div>
    </div>



    {{ Form::close() }}


@endsection