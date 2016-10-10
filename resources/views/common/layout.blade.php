<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css" media="screen">
        <link rel="stylesheet" href="/css/theme.css" media="screen">
        <title>{{$title}}</title>

        <!-- Vue Js -->
        <script type="text/javascript" src="https://unpkg.com/vue@2.0.1/dist/vue.js"></script>


    </head>
    <body>
        @include('common.navbar')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
