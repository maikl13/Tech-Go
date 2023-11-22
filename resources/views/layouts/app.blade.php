<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>لوحة التحكم</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="/assets/css/plugins.css" rel="stylesheet" type="text/css" />
 
 <!-- END GLOBAL MANDATORY STYLES -->
 <link rel="stylesheet" type="text/css" href="/assets/css/elements/alert.css">
 <link rel="stylesheet" type="text/css" href="/assets/css/forms/theme-checkbox-radio.css">
 <link rel="stylesheet" type="text/css" href="/assets/css/forms/switches.css">
 <link href="/assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
 <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0-2/css/all.min.css" integrity="sha512-uNOFYDWi8Y7/BN/9S2QDx/BVTEvSwdrZ53NHLgt+fDTdyQeOwmBpHrLrxOT3TQn78H0QKJWLvD7hsDOZ9Gk45A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link href="/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/custom.css" rel="stylesheet" type="text/css" />
    <link href="/css/refresh_v1.css" rel="stylesheet" type="text/css" />
    <style>
        .app-header {
            padding:0
        }
        .app-header__logo {
            display:block;
            margin:0 auto
        }
        .app-content {
            margin-top:0px !important;
            padding-top:0px !important
        }
    </style>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
