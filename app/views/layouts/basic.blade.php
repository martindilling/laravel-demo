@extends('layouts.master')


@section('styles')
    {{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css') }}
    {{ HTML::style('assets/admin-lte/css/AdminLTE.css') }}
@endsection

@section('scripts')
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}
    {{ HTML::script('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js') }}
    {{ HTML::script('assets/admin-lte/js/AdminLTE/app.js') }}
@endsection


@section('skin', 'bg-black')


@section('body')

    @yield('content')

@endsection