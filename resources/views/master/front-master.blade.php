<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   

        <title>BBProductions - Balestire Boys</title>

        <meta name="keywords" content="Best DJ Event in Singapore" />
        <meta name="description" content="BBProductions - Balestire Boys Productions">
        <meta name="author" content="bbproductions.info">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('assets/front/img/favicon.png')}}" type="image/x-icon" />
        <link rel="apple-touch-icon" href="{{asset('assets/front/img/apple-touch-icon.png')}}">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

        <!-- Web Fonts  -->
        <link href="{{asset('assets/front/css/google-fonts.css')}}" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link href="{{asset('assets/front/css/plugins.css')}}" rel="stylesheet"/>
        <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">

        <style type="text/css">
            
        </style>
        @yield('css')
    </head>
    <script type="text/javascript">
        
    </script>
    <body class="bg-dots dsn-ajax v-dark">
        @include('includes.front.preloader')
        <main id="main_root" class="main-root">
            @include('includes.front.menu')
            @include('includes.front.header')
            <div id="page_wrapper" class="wrapper">
                @yield('content')
            </div>
            @include('includes.front.footer')
        </main>

        <!-- ========== Cursor ========== -->
        <div id="dsn_cursor" class="ball"></div>
        <div id="dsn_cursor_inner" class="ball"></div>
        <!-- ========== End Cursor ========== -->


        <!-- ==========  Social ========== -->
        <div class="social-side d-flex align-items-center flex-column justify-content-center">

            <ul class="socials d-flex flex-column-reverse">
                <li style="--dsn-index-animate : 0;">
                    <a href="#0" target="_blank" rel="nofollow">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i> <span>Fb</span>
                    </a>
                </li>
                <li style="--dsn-index-animate : 1;">
                    <a href="#0" target="_blank" rel="nofollow">
                        <i class="fab fa-instagram" aria-hidden="true"></i><span>Instagram</span>
                    </a>
                </li>
                <li style="--dsn-index-animate : 2;">
                    <a href="#0" target="_blank" rel="nofollow">
                        <i class="fab fa-twitter" aria-hidden="true"></i><span>Tw</span>
                    </a>
                </li>
                <li style="--dsn-index-animate : 3;">
                    <a href="#0" target="_blank" rel="nofollow">
                        <i class="fab fa-linkedin-in" aria-hidden="true"></i><span>Linkedin</span>
                    </a>
                </li>
            </ul>
            <div class="icon">FOLLOW US</div>
        </div>
        <!-- ========== End Social ========== -->

        <!-- ========== Line BG ========== -->
        <div id="line_head"><span class="container"></span></div>
        <!-- ========== End Line BG ========== -->

        <script src="{{asset('assets/front/js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{asset('assets/front/js/plugins.min.js')}}"></script>
        <script src="{{asset('assets/front/js/plugins/dsn-grid.min.js')}}"></script>
        <script src="{{asset('assets/front/js/custom.js')}}"></script>

        <script type="text/javascript">
            $(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            });
        </script>
        @yield('js')
    </body>
</html>