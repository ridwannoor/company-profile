<!DOCTYPE html>
<html>

<!-- Mirrored from portotheme.com/html/porto/7.5.0/index-classic-color.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2019 04:04:28 GMT -->
@include('front.component.head')

<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay
    data-plugin-options="{'hideDelay': 500}">
    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="body">
        @include('front.component.header')


        <div role="main" class="main">

            @yield('main');
            

        </div>

        @include('front.component.footer')
    </div>

    <!-- Vendor -->
    <script src="{{ asset('front/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('front/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('front/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('front/vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
    <script src="{{ asset('front/master/style-switcher/style.switcher.js') }}" id="styleSwitcherScript" data-base-path="" data-skin-src="">
    </script>
    <script src="{{ asset('front/vendor/popper/umd/popper.min.js') }}"></script>
    <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/vendor/common/common.min.js') }}"></script>
    <script src="{{ asset('front/vendor/jquery.validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('front/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('front/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
    <script src="{{ asset('front/vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
    <script src="{{ asset('front/vendor/isotope/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('front/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front/vendor/vide/jquery.vide.min.js') }}"></script>
    <script src="{{ asset('front/vendor/vivus/vivus.min.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('front/js/theme.js') }}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{ asset('front/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('front/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('front/js/custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('front/js/theme.init.js') }}"></script>

    <!-- Examples -->
    <script src="{{ asset('front/js/examples/examples.portfolio.js') }}"></script>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-42715764-5', 'auto');
        ga('send', 'pageview');

    </script>
    <script src="{{ asset('front/master/analytics/analytics.js') }}"></script>

</body>

<!-- Mirrored from portotheme.com/html/porto/7.5.0/index-classic-color.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2019 04:04:33 GMT -->

</html>
