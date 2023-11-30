<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
<div id="whole_page">
    <div id="header">RailsSpace</div>
    <div id="nav">
        @include('site.includes.navbar')
    </div>
    <div id="content">
        @yield('content')
    </div>
</div>



</body>
</html>
