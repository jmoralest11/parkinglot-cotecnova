<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
    <!-- My's styles -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>

<div class="container">
    @yield('content')
</div>

<!-- jQuery -->
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>

<!-- Bootstrap Js-->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- AdminLTE -->
<script src="{{asset('js/adminlte.js')}}"></script>

</body>

</html>