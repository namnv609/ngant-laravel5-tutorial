<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

        <title>
            @yield('title')
        </title>
    </head>
    <body>
        <div class="container">
            <header class="row">
                @include('layouts.header')
            </header>
            <div id="main" class="row">
                @yield('content')
            </div>
        </div>
    </body>
</html>
