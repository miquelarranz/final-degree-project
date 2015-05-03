<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="/css/style.css"/>
        <link href="/css/simple-sidebar.css" rel="stylesheet">

        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>    </head>
    <body>

        @if($currentUser)
            <div id="wrapper">
                @include('layouts.partials.sidebar')

                @include('layouts.partials.sidebarnav')

                <div id="page-content-wrapper">
                    <div class="container-fluid">
                        @include('flash::message')

                        @yield('content')
                    </div>
                </div>
            </div>
        @else
            @include('layouts.partials.nav')
            <div class="container">
                @include('flash::message')

                @yield('content')
            </div>
        @endif

        <script src="//code.jquery.com/jquery.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="/scripts/scripts.js"></script>
    </body>
</html>