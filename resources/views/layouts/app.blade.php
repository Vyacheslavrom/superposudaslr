<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- <link rel="stylesheet" href="/public/css/app.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">

    <!-- Styles -->
    <style>
   .input-group  { 
    font-size: 120%; 
    font-family: Verdana, Arial, Helvetica, sans-serif; 
   }
  </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                
            </div>
        </nav>

        <main class="py-4">
            @yield('creating')
            @yield('get-prod')
        </main>
        
    </div>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">
</script>
    <script>

    $('#form-creating').on('click', function(){
        article=$('#article').val();
        brand=$('#brand').val();                   
        // $.get("https://superposuda.retailcrm.ru/api/v5/store/products?apiKey=QlnRWTTWw9lv3kjxy1A8byjUmBQedYqb",
        // {}, function (data) {
        //     $("#view-block").html(JSON.parse(data).join('<br />'));

        // });
    
    });
    
</script>
</body>
</html>