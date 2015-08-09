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
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="//cdn.jsdelivr.net/vue/0.12.9/vue.min.js"></script>
        <script src="{{ asset('/js/app.js') }}"></script>

        @yield('script')
    </body>
</html>

