<!doctype html>
<html class="no-js" lang="">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{asset('assets/front/img/logo-32x32.png')}}" sizes="32x32"/>
        <link rel="icon" href="{{asset('assets/front/img/logo-192x192.png')}}" sizes="192x192"/>

        <title>Contact Us | BB Productions</title>

        <link href="{{asset('assets/front/css/plugins.css')}}" rel="stylesheet"/>
        <link href="{{asset('assets/front/css/style.css')}}" rel="stylesheet" >
    </head>

    <body class="v-light dsn-ajax v-dark">

        @include('includes.front.preloader')

        <main id="main_root" class="main-root">

            <!-- ========== Menu ========== -->
            @include('includes.front.menu')
            <!-- ========== End Menu ========== -->

            <!-- ========== Header Normal========== -->
            <header id="dsn_header" class="dsn-header-animation header-normal">
                <div class="background-overlay bg-pattern p-absolute left-0 top-0 w-100 h-100"></div>
                <div class="entry-header p-relative over-hidden">
                    <div id="hero_content" class="d-flex p-relative h-100 dsn-hero-parallax-title container align-items-center pb-section ">
                        <div class="content p-relative ">
                            <div class="intro-project w-100">
                                <div class="intro-title ">
                                    <div id="hero_title" class="mt-20">
                                        <h1 class="title text-upper">
                                            Look around you<br> everything is changing.
                                        </h1>
                                    </div>
                                    <p class="mt-20 max-w570">
                                        What if the time has come for you to change? Starting a collaboration is easy! Order a
                                        free consultation or call back. We are always in touch and happy to cooperate with you
                                    </p>
                                    <div class="dsn-def-btn dsn-hover-icon dsn-icon-heading-color mt-20 d-flex">
                                        <a class="dsn-btn dsn-border border-color-default  background-section effect-ajax has-icon-left"
                                           href="work-card-1.html" data-dsn-text="OUR PORTFOLIO">
                                            <span class="dsn-icon dsn-bg-before btn-icon-left heading-color z-index-1">
                                                <i class="fas fa-angle-right" aria-hidden="true"></i>
                                            </span>
                                            <span class="title-btn p-relative  z-index-1 ">See More Works</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#page_wrapper" rel="nofollow" class="dsn-scroll-bottom"
                   data-dsn-option='{"ease": "power4.inOut" , "duration" : 1.5}'>
                    <div class="text">SCROLL</div>
                </a>
            </header>
            <!-- ========== End Header Normal ========== -->

            <div id="page_wrapper" class="wrapper">
                <!-- ========== Contact  ========== -->
                <div class="p-relative contact-form over-hidden section-padding">
                    <div class="dsn-mask p-absolute w-70 left-0 top-0 h-100 background-section"></div>
                    <div class="p-relative container d-grid grid-1-half" data-dsn-gap="30px 60px">
                        <div class="box-form">
                            <h2 class="title-h2 ">
                                IF YOU HAVE QUESTIONS PLEASE <br>CONTACT US
                            </h2>
                            <p class="mt-10">Fill fields and find approximate your repair</p>
                            <div class="dsn-form mt-20 form-box d-flex flex-column">
                                <form id="contact-form" class="form w-100" method="post" action="https://theme.dsngrid.com/blackdsn/light/contact.php"
                                      data-toggle="validator">
                                    <div class="messages"></div>
                                    <div class="input__wrap controls">
                                        <div class="d-grid grid-md-2" data-dsn-gap="0px 30px">
                                            <div class="form-group dsn-up">
                                                <div class="entry-box">

                                                    <input id="form_name" type="text" name="name" placeholder="Type your name"
                                                           required="required"
                                                           data-error="name is required."/>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group dsn-up">
                                                <div class="entry-box">

                                                    <input id="form_email" type="email" name="email"
                                                           placeholder="Type your Email Address"
                                                           required="required" data-error="Valid email is required."/>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>


                                        <div class="form-group dsn-up">
                                            <div class="entry-box">

                                            <textarea id="form_message" class="form-control" name="message" rows="7"
                                                      placeholder="Tell us about you and the world" required="required"
                                                      data-error="Please,leave us a message."></textarea>
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="d-flex dsn-up">
                                            <div class="image-zoom move-circle border-color-default border-style border-rdu"
                                                 data-dsn="parallax">
                                                <input type="submit" value="Send Message">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="box-info p-30 background-theme ">
                            <div class="icon-left dsn-icon-heading-color d-flex align-items-center h-100">
                                <div class="d-grid dsn-service icon-left align-items-center">
                                    <div class="service-item p-relative grid-item style-box  background-transparent">

                                        <div class="service-item-inner number-item h-100">
                                            <div class="dsn-icon"><i class="fas fa-map-marker-alt" aria-hidden="true"></i></div>
                                            <div class="service-content p-relative">
                                                <h4 class="service_title  sm-title-block ">Location:</h4>
                                                <div class="service_description mt-10 max-w570 dsn-auto"><p>Blk 279 Balestier Point<br>329727 Singapore</p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-item p-relative grid-item style-box  background-transparent">

                                        <div class="service-item-inner number-item h-100">
                                            <div class="dsn-icon"><i class="fas fa-phone-volume" aria-hidden="true"></i></div>
                                            <div class="service-content p-relative"><h4 class="service_title  sm-title-block ">
                                                Phones:</h4>
                                                <div class="service_description mt-10 max-w570 dsn-auto">
                                                    <p>+65 8283 9400</p>
                                                    <p>+65 8624 4781</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-item p-relative grid-item style-box  background-transparent">

                                        <div class="service-item-inner number-item h-100">
                                            <div class="dsn-icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
                                            <div class="service-content p-relative"><h4 class="service_title  sm-title-block ">
                                                Write Us:</h4>
                                                <div class="service_description mt-10 max-w570 dsn-auto"><p>balestierboysproductions@gmail.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ========== End Contact  ========== -->
                
                <!-- ========== Footer ========== -->
                @include('includes.front.footer')
                <!-- ========== End Footer ========== -->
            </div>
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

    </body>
</html>
