<!DOCTYPE html>
@langrtl
    <html lang="{{ app()->getLocale() }}" dir="rtl">
@else
    <html lang="{{ app()->getLocale() }}">
@endlangrtl

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Laravel 5 Boilerplate')">
        <meta name="author" content="@yield('meta_author', 'Nikita Biriukov')">
        @yield('meta')

        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->



        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">

        @stack('after-styles')


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    {{--<script src="assets/js/modernizr.js"></script>--}}

    </head>
    <body>
        <div id="app">
            @include('includes.partials.logged-in-as')
            @include('frontend.includes.nav')

            <div class="container">
                @include('includes.partials.messages')

            </div><!-- container -->

            @yield('content')

            @include('frontend.includes.footer')
        </div><!-- #app -->

        <!-- Scripts -->
{{--        @stack('before-scripts')
        {!! script(mix('js/frontend.js')) !!}
        @stack('after-scripts')--}}

       {{-- @include('includes.partials.ga')--}}




        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/retina-1.1.0.js"></script>
        <script src="assets/js/jquery.hoverdir.js"></script>
        <script src="assets/js/jquery.hoverex.min.js"></script>
        <script src="assets/js/jquery.prettyPhoto.js"></script>
        <script src="assets/js/jquery.isotope.min.js"></script>
        <script src="assets/js/custom.js"></script>


        <script>
            // Portfolio
            (function($) {
                "use strict";
                var $container = $('.portfolio'),
                    $items = $container.find('.portfolio-item'),
                    portfolioLayout = 'fitRows';

                if( $container.hasClass('portfolio-centered') ) {
                    portfolioLayout = 'masonry';
                }

                $container.isotope({
                    filter: '*',
                    animationEngine: 'best-available',
                    layoutMode: portfolioLayout,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    },
                    masonry: {
                    }
                }, refreshWaypoints());

                function refreshWaypoints() {
                    setTimeout(function() {
                    }, 1000);
                }

                $('nav.portfolio-filter ul a').on('click', function() {
                    var selector = $(this).attr('data-filter');
                    $container.isotope({ filter: selector }, refreshWaypoints());
                    $('nav.portfolio-filter ul a').removeClass('active');
                    $(this).addClass('active');
                    return false;
                });

                function getColumnNumber() {
                    var winWidth = $(window).width(),
                        columnNumber = 1;

                    if (winWidth > 1200) {
                        columnNumber = 5;
                    } else if (winWidth > 950) {
                        columnNumber = 4;
                    } else if (winWidth > 600) {
                        columnNumber = 3;
                    } else if (winWidth > 400) {
                        columnNumber = 2;
                    } else if (winWidth > 250) {
                        columnNumber = 1;
                    }
                    return columnNumber;
                }

                function setColumns() {
                    var winWidth = $(window).width(),
                        columnNumber = getColumnNumber(),
                        itemWidth = Math.floor(winWidth / columnNumber);

                    $container.find('.portfolio-item').each(function() {
                        $(this).css( {
                            width : itemWidth + 'px'
                        });
                    });
                }

                function setPortfolio() {
                    setColumns();
                    $container.isotope('reLayout');
                }

                $container.imagesLoaded(function () {
                    setPortfolio();
                });

                $(window).on('resize', function () {
                    setPortfolio();
                });
            })(jQuery);
        </script>


    </body>
</html>
