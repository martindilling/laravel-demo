@extends('layouts.master')


@section('styles')
    {{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css') }}
    {{ HTML::style('assets/admin-lte/css/font-awesome.min.css') }}
    {{ HTML::style('assets/admin-lte/css/ionicons.min.css') }}
    {{ HTML::style('assets/admin-lte/css/AdminLTE.css') }}
    {{ HTML::style('assets/css/main.css') }}
@endsection


@section('scripts')
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}
    {{ HTML::script('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js') }}
    {{ HTML::script('assets/admin-lte/js/AdminLTE/app.js') }}
@endsection


@section('body')

    @include('layouts.partials.header')
    <div class="wrapper row-offcanvas row-offcanvas-left">
        @include('layouts.partials.sidebar')
        <aside class="right-side">
            @include('layouts.partials.content-header')
            @include('flash::message')
            @include('layouts.partials.errors')
            <section class="content">
                @yield('content')
            </section>
        </aside>
    </div>

@endsection