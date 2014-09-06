{{-- Define these sections in the view, to overwrite the defaults --}}
@section('skin',             'skin-black')
@section('page_title',       'Default title')
@section('page_description', 'Default description')


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('page_title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="@yield('page_description')">
    <meta name="author" content="{{ $page_author or 'Default author' }}">

    {{-- Styles --}}
    @yield('styles')

    {{-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --}}
    @include('layouts.partials.shim-respond-js')
</head>
<body class="@yield('skin')">

    @yield('body')


    {{-- Scripts --}}
    @yield('scripts')
</body>
</html>