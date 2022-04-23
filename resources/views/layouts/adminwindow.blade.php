<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield("title")</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('adminassets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('adminassets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLES-->

    <link href="{{asset('adminassets/css/custom.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    @yield("head")
</head>
<body>


@yield('content')

@yield('foot')
</body>
</html>
