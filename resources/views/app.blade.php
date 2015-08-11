<!DOCTYPE html>
<html>
    <head>
        <title>Roundup Helper</title>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
        <div class="container">
            <div class="content">
                @yield('content')
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="{{ asset('/js/vendor/vue.min.js') }}"></script>
        <script src="{{ asset('/js/app.js') }}"></script>

        @yield('script')
    </body>
</html>

