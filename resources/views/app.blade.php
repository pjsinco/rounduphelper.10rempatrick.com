<!DOCTYPE html>
<html>
    <head>
        <title>Roundup Helper</title>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="content">
                @yield('content')
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        @yield('script')
    </body>
</html>

