<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <title>Turfstamp</title>
    <script type="text/javascript" src="js/app.js"></script>
    <link rel="stylesheet" href="css/app.css">
    {{--<link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">--}}

</head>

<body>

    @include('inc.navbar')

    <br>
    <br>

    <div class="container">
        @if(Request::is('/'))
            @include('inc.showcase')
        @endif
        <div class="row">
            <div class="col-md-8 col-lg-8">
                @include('inc.messages')
                @yield('content')
            </div>
            <div class="col-md-4 col-lg-4">
                @include('inc.sidebar')
            </div>
        </div>
    </div>
    <div id="footer-man">
        <footer id="footer" class="text-center navbar navbar-fixed-bottom ">
            <p>Copyright 2017 &copy; Turfstamp</p>
        </footer>
    </div>

</body>
</html>