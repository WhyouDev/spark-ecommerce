<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Spark Ecommerce | @yield('judul_halaman')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('frontend/style/css/frontmain.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/style/css/frontrespons.css') }}">

    </head>
    <body>
        <header>
            <div class="top-nav container">
                <div class="logo"><a href="/">PT. Spark Integrated Solution</a></div>
                <ul>
                    <li><a class="list" href="/pages/shop">Shop</a></li>
                    <li><a class="list" href="#">About</a></li>
                    <li><a class="list" href="#">Blog</a></li>
                    <li><a class="list" href="#">Cart</a></li>
                </ul>
            </div> <!-- end top-nav -->
        </header>

        <div class="container ">
            @yield('content')
        </div>
       

        <footer>
            <div class="footer-content container">
                
                <ul>
                    {{-- <li>Follow Me:</li> --}}
                    <li><a href="#"><i class="fa fa-globe"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div> <!-- end footer-content -->
        </footer>

    </body>
</html>
