<!--

   ___    ____    ___    ____   ___   _   _      _      _               __  __   ___   _  __  _____
  / _ \  |  _ \  |_ _|  / ___| |_ _| | \ | |    / \    | |             |  \/  | |_ _| | |/ / | ____|
 | | | | | |_) |  | |  | |  _   | |  |  \| |   / _ \   | |      _____  | |\/| |  | |  | ' /  |  _|
 | |_| | |  _ <   | |  | |_| |  | |  | |\  |  / ___ \  | |___  |_____| | |  | |  | |  | . \  | |___
  \___/  |_| \_\ |___|  \____| |___| |_| \_| /_/   \_\ |_____|         |_|  |_| |___| |_|\_\ |_____|


-->

<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME') }}</title>

    <link href="#" rel="icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a8b644e2d8.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/ckeditor.js') }}"></script>
</head>
<body class="bg-white">
@include('layouts.navbar')
@include('layouts.header')
    @yield('content')
@include('layouts.footer')
</body>
</html>
