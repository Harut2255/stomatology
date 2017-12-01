<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="UTF-8">
    <title>Stomatology</title>
    <!-- include css files -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome-4.5.0/css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-4.5.0/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-3.3.5/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-3.3.5/bootstrap-theme.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/material.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
</head>
<body>
{{-----------------------  HEADER  ----------------------}}
@section('header')
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                    <span class="sr-only">Open Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('index') }}">
                    <i class="fa fa-home"></i> Գլխավոր
                </a>
            </div>
            <div class="collapse navbar-collapse" id="responsive-menu">
                <ul class="nav navbar-nav navbar_nav_menu">
                    <li><a href="{{ route('add') }}"><i class="fa fa-plus-circle"></i> Ավելացնել Պոցիենտ</a></li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Դուրս գալ</a></li>
                </ul>
            </div>
        </div>
    </div>
@show

{{--ERROR--}}
{{--@if (count($errors) > 0)--}}
    {{--<div class="alert alert-danger">--}}
        {{--<ul>--}}
            {{--@foreach ($errors->all() as $error)--}}
                {{--<li>{{ $error }}</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--@endif--}}
{{--SESSION--}}
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
{{--MESSAGE--}}
@if(session('message'))
    <div class="alert alert-danger" style="text-align: center">
        {{ session('message') }}
    </div>
@endif


{{-----------------------  CONTENT  ----------------------}}
@yield('content')

<!--include js files-->
@section('js')
    <script src="{{ asset('assets/js/jquery2.1.4/jquery-2.1.4.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-3.3.5/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/material.js') }}"></script>
    <script src="{{ asset('assets/js/javascript.js') }}"></script>
@show
</body>
</html>