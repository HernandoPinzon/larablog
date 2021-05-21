<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    
    <title>Document</title>
</head>
<body>
    @include('dashboard.partials.nav-header-main')
    <div class="container">
        @include('dashboard.partials.session-status')
        @if(session('status'))
        <div class="alert alert-primary">
            {{session('status')}}
        </div>
        @endif
        @yield('contenido')
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>