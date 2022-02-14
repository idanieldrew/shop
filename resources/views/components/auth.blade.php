<!DOCTYPE html>
<html lang="fa">

<head>

    <title>{{ $title ?? '' }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link type="text/css" href="{{ asset('auth/css/bootstrap-rtl.min.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('auth/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('auth/css/animate.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('auth/css/hamburgers.min.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('auth/css/select2.min.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('auth/css/util.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('auth/css/style.css') }}" rel="stylesheet" />
    <!-- / styles -->
</head>

<body>
    {{ $slot }}



    <!-- scripts -->
    <script src="{{ asset('auth/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('auth/js/popper.min.js') }}"></script>
    <script src="{{ asset('auth/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('auth/js/select2.min.js') }}"></script>
    <script src="{{ asset('auth/js/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="{{ asset('auth/js/scripts.js') }}"></script>
    <!-- / scripts -->
</body>

</html>
<!-- This template has been downloaded from Webrubik.com -->
