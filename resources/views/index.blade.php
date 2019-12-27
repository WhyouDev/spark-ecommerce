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
        <link rel='icon' href="{{ asset('site/favicon.ico') }}" type='image/x-icon'/>

    </head>
    <body>
        <header>
            <div class="top-nav container">
                <div class="logo"><a href="/">PT. Spark Integrated Solution</a></div>
                <ul>
                    <li><a class="list" href="/pages/shop">Shop</a></li>
                    <li><a class="list" href="/pages/about">About</a></li>
                    <li><a class="list" href="/pages/cart">Cart</a></li>
                </ul>
            </div> <!-- end top-nav -->
        </header>
    
        {{-- put your content right here --}}
        
        <div class="container ">
            @yield('content')
        </div>
    
         {{-- start footer --}}
        @include('/partials/footer')
        <!-- end footer-content -->
    </body>
</html>
