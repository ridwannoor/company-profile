<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    
        @foreach ($gens as $gen)
        <title>{{ $gen->name }}</title>
        @endforeach

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('/storage/admin/gen/'.$gen->image)}}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/theme-shop.css') }}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{ asset('front/vendor/rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/rs-plugin/css/navigation.css') }}">

    <!-- Demo CSS -->


    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/skins/default.css') }}">
    <script src="master/style-switcher/style.switcher.localstorage.js"></script>

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('front/vendor/modernizr/modernizr.min.js') }}"></script>

</head>
