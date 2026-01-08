<!doctype html>
<html class="no-js" lang="">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{asset('assets/front/img/logo-32x32.png')}}" sizes="32x32"/>
        <link rel="icon" href="{{asset('assets/front/img/logo-192x192.png')}}" sizes="192x192"/>

        <title>Home | BB Productions</title>

        <link href="{{asset('assets/front/css/plugins.css')}}" rel="stylesheet"/>
        <link href="{{asset('assets/front/css/style.css')}}" rel="stylesheet" >

    </head>

    <body class="bg-dots dsn-ajax v-dark">

        @include('includes.front.preloader')

        <main id="main_root" class="main-root">

            <!-- ========== Menu ========== -->
            <div class="v-dark v-dark-head">
                @include('includes.front.menu')
            </div>
            <!-- ========== End Menu ========== -->

            <!-- ========== Header ========== -->
            <header id="dsn_header" class="dsn-header-animation dsn-full-header v-dark-head">
                <div class="entry-header p-relative over-hidden">
                    <div id="hero_image" class="p-absolute dsn-hero-parallax-img over-hidden" data-dsn-ajax="img"
                         data-overlay="6">
                        <img src="{{asset('assets/front/img/main-img.jpg')}}" class="cover-bg-img transform-3d" alt=""/>
                    </div>

                    <div id="hero_content" class="d-flex p-relative h-100 dsn-hero-parallax-title container align-items-center">
                        <div class="content p-relative ">
                            <div class="intro-project w-100">
                                <div class="intro-title ">
                                    <h5 class="title-block body-font text-upper">Welcome !</h5>
                                    <div id="hero_title" class="mt-20">
                                        <h1 class="ah-headline title clip is-full-width ">
                                            <span> We</span>
                                            <span class="ah-words-wrapper">
                                                <b class="is-visible">are Balestier Boys.</b>
                                                <b> unleash your rhythm </b>
                                                <b> break the bounderies</b>
                                                <b> are professionals</b>
                                            </span>
                                        </h1>
                                    </div>
                                    <p class="title-block mt-20 max-w570">
                                        Join the evolution
                                    </p>
                                    <div class="dsn-def-btn dsn-icon-heading-color mt-20 d-flex">
                                        <a class="dsn-btn dsn-border border-color-default  background-section  vid   has-icon-left"
                                           href="https://vimeo.com/175353205" target="_blank" rel="nofollow"
                                           data-dsn="parallax"> <span
                                                class="dsn-icon dsn-bg-before btn-icon-left heading-color z-index-1"><i
                                                class="fas fa-play"></i></span> <span
                                                class="title-btn p-relative  z-index-1 heading-color">PLAY INTRO</span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-head w-100 left-0 p-absolute bottom-0 z-index-2 pb-40">
                        <div class="container d-grid grid-1-half">
                            <ul class="dsn-grid-layout dsn-grid dsn-list w-100">
                                <li class="list-item grid-item d-flex align-items-center">
                                    <p class="heading-color "><strong>Location: </strong> Balestier Point </p>
                                </li>
                                <li class="list-item grid-item d-flex align-items-center">
                                    <p class="heading-color "><strong>Phone : </strong> +65 86244781</p>
                                </li>

                                <li class="list-item grid-item d-flex align-items-center">
                                    <p class="heading-color ">balestierboysproduction@gmail.com</p>
                                </li>
                            </ul>
                            <div class="social-icons-wrapper d-grid grid-3 justify-self-end" data-dsn-gap="20px"
                                 data-dsn-iconsize="17px">
                                <span class="grid-item">
                                    <a class="dsn-icon" href="#0" target="_blank" rel="nofollow">
                                        <i class="fab fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </span>
                                <span class="grid-item">
                                    <a class="dsn-icon" href="#0" target="_blank" rel="nofollow">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </span>
                                <span class="grid-item">
                                    <a class="dsn-icon" href="#0" target="_blank" rel="nofollow">
                                        <i class="fab fa-youtube" aria-hidden="true"></i>
                                    </a>
                                </span>

                            </div>
                        </div>

                    </div>
                </div>
                <a href="#page_wrapper" rel="nofollow" class="dsn-scroll-bottom"
                   data-dsn-option='{"ease": "power4.inOut" , "duration" : 1.5}'>
                    <div class="text">SCROLL</div>
                </a>
            </header>
            <!-- ========== End Header ========== -->

            <div id="page_wrapper" class="wrapper">

                <!-- ========== Right Box With Image  ========== -->
                <div class="right-box-image section-margin dsn-container dsn-left-container over-hidden">
                    <div class="box-img">
                        <div class="img-box-parallax h-v-80 w-100 before-z-index dsn-animate dsn-effect-left"
                             data-dsn-triggerhook="bottom"
                             data-dsn-grid="move-up" data-overlay="1">
                            <img src="{{asset('assets/front/img/events/event1/2.png')}}" class="cover-bg-img has-direction"
                                 data-dsn-position="50% 0%" alt=''/>
                        </div>
                    </div>
                    <div class="box-info background-section box-padding section-margin" data-dsn-gap="30px 30px">
                        <h2 class="title-h2">Book your <br>Reservation now!</h2>
                        <p class="mt-10">Fill fields and find approximate your repair</p>
                        <div class="dsn-form mt-20 form-box d-flex flex-column">
                            <form id="contact-form" class="form w-100" method="post" action="https://theme.dsngrid.com/blackdsn/light/contact.php" data-toggle="validator">
                                <div class="messages"></div>
                                <div class="input__wrap controls">
                                    <div class="form-group dsn-up">
                                        <div class="entry-box">
                                            <input id="form_name" type="text" name="name" placeholder="Type your name" required="required" data-error="name is required."/>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group dsn-up">
                                        <div class="entry-box">
                                            <input id="form_fin" type="text" name="fin_nirc" placeholder="Enter your FIN/NIRC" required="required" data-error="FIN/NIRC is required."/>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group dsn-up">
                                        <div class="entry-box">
                                            <input id="form_email" type="email" name="email" placeholder="Enter your Email Address" required="required" data-error="Valid email is required."/>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group dsn-up">
                                        <div class="entry-box">
                                            <input id="form_contact" type="contact" name="contact" placeholder="Enter your Contact Number" required="required" data-error="Valid phone number is required."/>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="d-flex justify-content-end dsn-up" >
                                        <div class="image-zoom move-circle background-theme" data-dsn="parallax">
                                            <input type="submit" value="Book Now">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- ========== End Right Box With Image  ========== -->

                <!-- ========== Portfolio ========== -->
                <div class="p-relative container  section-margin pt-section border-top v-dark-head">
                    <div class="box-image-transform dsn-style-cards ">
                        <div class="root-posts  has-filters">
                            <div class="d-grid grid-md-2 dsn-isotope dsn-posts dsn-post-type-cards box-image-normal use-filters">
                                <article class="dsn-item-post grid-item production over-hidden p-relative box-hover-image">
                                    <div class="box-content d-flex ">
                                        <a class="effect-ajax box-image-link  bg-shadow" href="project-6.html"
                                           data-dsn-ajax="work" title="HEADPHONES">
                                            <div class="box-image-bg before-z-index dsn-swiper-parallax-transform"
                                                 data-overlay="4">
                                                <img class="cover-bg-img" src="{{asset('assets/front/img/events/event1/3.png')}}"
                                                     alt=""/>
                                            </div>
                                        </a>
                                        <div class="post-content dsn-bg p-relative z-index-1 d-flex flex-column">
                                            <div class="post-title-info">
                                                <div class="post-meta max-w750">
                                                    <div class="p-relative d-inline-block dsn-category dsn-bg metas mb-10 entry-meta">
                                                        <span data-separator="&">Progressive Night</span>
                                                    </div>
                                                </div>
                                                <h2 class="post-title title-block">
                                                    <a href="project-6.html" class="effect-ajax"
                                                       data-dsn-ajax="work">
                                                        ABHASSARA 1.0
                                                    </a>
                                                </h2>
                                                <p class="section_description mt-15 max-w570 ">
                                                    This night will be your night which unleash your power beyond your bounderies
                                                </p>
                                                <a href="project-6.html"
                                                   class="effect-ajax dsn-post-link move-circle border-color-heading"
                                                   data-dsn="parallax" data-dsn-ajax="work">
                                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                                                        <path class="arrow-after"
                                                              d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="dsn-item-post grid-item production photography over-hidden p-relative box-hover-image">
                                    <div class="box-content d-flex ">
                                        <a class="effect-ajax box-image-link bg-shadow" href="project-5.html"
                                           data-dsn-ajax="work" title="DOG CHOW">
                                            <div class="box-image-bg before-z-index dsn-swiper-parallax-transform"
                                                 data-overlay="3">
                                                <img class="cover-bg-img" src="{{asset('assets/front/img/events/event2/3.png')}}" alt=""/>
                                            </div>
                                        </a>
                                        <div class="post-content dsn-bg p-relative z-index-1 d-flex flex-column">
                                            <div class="post-title-info">
                                                <div class="post-meta max-w750">
                                                    <div class="p-relative d-inline-block dsn-category dsn-bg metas mb-10 entry-meta">
                                                        <span data-separator=" & ">Progressive Mantra Night</span>
                                                    </div>
                                                </div>
                                                <h2 class="post-title title-block">
                                                    <a href="project-5.html" class="effect-ajax"
                                                       data-dsn-ajax="work">
                                                        ABHASSARA 2.0
                                                    </a>
                                                </h2>
                                                <p class="section_description mt-15 max-w570 ">
                                                    Comming soon. Stay connected. This will be something you never imagine.
                                                </p>
                                                <a href="project-5.html"
                                                   class="effect-ajax dsn-post-link move-circle border-color-heading"
                                                   data-dsn="parallax" data-dsn-ajax="work">
                                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                                                        <path class="arrow-after"
                                                              d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========== End Portfolio ========== -->

                <!-- ========== Contact ========== -->
                <div class="container section-margin pt-section border-top d-grid grid-md-2" data-dsn-gap="30px 120px">
                    <div class="box-left p-relative  pinned-scroll" data-dsn-option='{"end":"250"}'>
                        <div class="section-title  pinned-element">
                            <h2 class="title-h2 text-upper">Contact me</h2>
                        </div>
                    </div>
                    <div class="box-right">
                        <h2 class="title-block ">
                            IF YOU HAVE QUESTIONS PLEASE <br>CONTACT US
                        </h2>
                        <p class="mt-10">Fill fields and find approximate your comment</p>
                        <div class="dsn-form mt-20 form-box d-flex flex-column">
                            <form id="contact-form" class="form w-100" method="post" action="https://theme.dsngrid.com/blackdsn/light/contact.php" data-toggle="validator">
                                <div class="messages"></div>
                                <div class="input__wrap controls">
                                    <div class="form-group dsn-up">
                                        <div class="entry-box">
                                            <input id="form_name" type="text" name="name" placeholder="Type your name" required="required" data-error="name is required."/>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group dsn-up">
                                        <div class="entry-box">
                                            <input id="form_email" type="email" name="email" placeholder="Type your Email Address" required="required" data-error="Valid email is required."/>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group dsn-up">
                                        <div class="entry-box">
                                            <textarea id="form_message" class="form-control" name="message" placeholder="Please your message here..." required="required" data-error="Please,leave us a message."></textarea>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="d-flex justify-content-end dsn-up" >
                                        <div class="image-zoom move-circle background-theme" data-dsn="parallax">
                                            <input type="submit" value="Send Message">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ========== End Contact ========== -->

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
