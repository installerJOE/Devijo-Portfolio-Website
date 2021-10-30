<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400&display=swap" rel="stylesheet">

    <!-- Latest compiled and minified CSS and Javascript for bootstrap 5-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
    
    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ asset('/css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/footer.css') }}" rel="stylesheet">
    <link href="{{URL::asset('/storage/images/favicon.png')}}" type="image/x-icon" rel="shortcut icon"> 
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <style>
        .alert-msg{
            background-color: none !important;
            border-color: none !important;
            padding: 10px;
        }
        .alert-success-msg{
            color: green;
        }
        .alert-info-msg{
            color: #7b9de0;
        }
        .alert-danger-msg{
            color: rgb(191, 3, 3);
        }
        .btn-alert-modal{
            padding: 5px 10px;
            font-size: 16px;
        }
        @media only screen and and (max-width: 992px) {
            .icon-sign-in, .fa-sign-in-alt{
                display:none !important;
            }
        }
    </style>
    {{-- metadata of each page --}}
    @yield('meta-content')
    
</head>
<body>
    <div id="app">
        @include('inc.navbar')
        <main class="py-4">
            @yield('content')
        </main>
        @include('inc.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('/js/scripts.js') }}" defer></script>
</body>
</html>
