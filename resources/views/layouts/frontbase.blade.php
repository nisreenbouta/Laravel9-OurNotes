<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>@yield("title")</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">


    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300i,400,400i,600" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="{{asset('assets')}}/css/custom.css" rel="stylesheet">

    @yield("head")
</head>
<body>
@include("home.header")

@section('slider')

@show

@yield('content')

@section('sidebar')
    @include("home.sidebar")
@show


@include("home.footer")
@yield('foot')
</body>
</html>
