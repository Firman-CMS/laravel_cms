<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FRONT END</title>


        <!--==== CSS ====-->
        <link href="{{ URL::asset('mypage/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
        {{-- <link href="{{ URL::asset('mypage/css/font-awesome.min.css') }}" rel="stylesheet"> --}}

        <link href="{{ URL::asset('mypage/css/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('mypage/css/magnific-popup.css') }}" rel="stylesheet">

        <!--==== CUSTOM CSS ====-->
        <link href="{{ URL::asset('mypage/css/style.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('mypage/css/responsive.css') }}" rel="stylesheet">

        <!-- Start Open Web Analytics Tracker -->


        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

       <!--===== Preloader -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>

        <div id="home"></div>
         <!--=====****************** INTRO SECTION ****************************=====-->
        <div class="intro-section" id="intro-bg">

        <!--===== HEADER AREA =====-->
            <header id="header-sticky-menu" class="header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <div class="logo">
                               <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                                <a href="#home"><img src="{{ URL::asset('mypage/images/logo.png') }}" alt="logo"></a> <!--== logo ==-->
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                           <nav class="main-menu">
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav"> <!--== manin menu ==-->
                                    <li class="active smooth-scroll"><a href="#home">Home</a></li>
                                    <li class="smooth-scroll"><a href="#about">About</a></li>
                                    <li class="smooth-scroll"><a href="#services">service</a></li>
                                    <li class="smooth-scroll"><a href="#resume">resume</a></li>
                                    <li class="smooth-scroll"><a href="#skill">skill</a></li>
                                    <li class="smooth-scroll"><a href="#portfolio">portfolio</a></li>
                                    <li class="smooth-scroll"><a href="#review">review</a></li>
                                    <li class="smooth-scroll"><a href="#contact-info">contact</a></li>
                                </ul>
                            </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
        <!--===== END HEADER AREA ======-->


        <!--======= WELCOME AREA =======-->
            <div class="welcome-area">
               <div class="welcome-table">
                   <div class="welcome-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="welcome-text">
                                        <h1><span class="wlc-color">Hello, I'm</span> Hadiq Afianto</h1>
                                        <div id="typer"></div>
                                        <div class="wlcome-btn">
                                            <a href="#about" class="smooth-scroll"><i class="fa fa-angle-down"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--===== END WELCOME AREA =====-->

        </div>
        <!--=====***************** END INTRO SECTION ***********************=====-->



        <!--=====************** ABOUT SECTION ***************=====-->
       @include('frontend.aboutme')
        <!--=====*********** END ABOUT SECTION **************=====-->



         <!--======**************** SERVICES SECTION ******************=======-->
       @include('frontend.service')
        <!--======*************** END SERVICES SECTION ****************=======-->




        <!--======************** RESUME SECTION **************======-->
        @include('frontend.resume')

        <!--======**************** END RESUME SECTION *******************======-->




        <!--======**************** SKILL SECTION *********************======-->
        @include('frontend.skill')

        <!--=====*************** END  SKILL SECTION ==***************===-->



        <!--====== PORTFOLIO SECTION ======-->
        @include('frontend.portofolio')

        <!--====== END PORTFOLIO SECTION ======-->


        <!--======**************** REVIEW SECTION *****************========-->
        @include('frontend.review')

        <!--======************* END REVIEW SECTION ***************========-->




        <!--======******************** CONTACT INFO SECTION **********************======-->
        <section id="contact-info" class="contact-info-section section-padding">
            <div class="container">
               <h2 class="section-title">Contact</h2> <!-- section title -->
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                          <div class="contact-form">

                            <form id="contact" name="contact" method="post">
                                <div class="row">
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <input type="text" name="name" id="name" size="30" value="" placeholder="Your name" required/>
                                    </div>

                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <input type="text" name="email" id="email" size="30" value="" placeholder="Your Email" required/>
                                    </div>

                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <input type="text" name="phone" id="phone" size="30" placeholder="Your Phone Number" value="" />
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="message" id="message" placeholder="Your massage" required></textarea>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <input id="submit" type="submit" name="submit" value="Send" />
                                    </div>
                                </div>
                            </form>

                            <div id="success">
                              <span>
                                Your message was sent succssfully! I will be in touch as soon as I can.
                              </span>
                            </div>

                            <div id="error">
                              <span>
                                Something went wrong, try refreshing and submitting the form again.
                              </span>
                            </div>

                          </div>
                    </div>
                </div>
            </div>
        </section>
        <!--======**************** END CONTACT INFO SECTION ********************======-->



        <!--======******************* FOOTER SECTION ******************======-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                       <div class="footer-text">
                            <p>&copy;Copyright 2016 - Kavin Cooper</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--======******************* END FOOTER SECTION ***************======-->



        <!--===== JAVASCRIPT FILES =====-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--===PreLoader===-->
        <script type="text/javascript">
            $(window).load(function() {
                $('#status').fadeOut();
                $('#preloader').delay(350).fadeOut('slow');
                $('body').delay(350).css({'overflow':'visible'});
            });
        </script>

        <script src="{{ URL::asset('mypage/js/jquery.typer.js') }}"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
        <script src="{{ URL::asset('mypage/js/validate.js') }}"></script>
        <script src="{{ URL::asset('mypage/js/jquery.scrolly.js') }}"></script>
        <script src="{{ URL::asset('mypage/js/jquery.sticky.js') }}"></script>
        <script src="{{ URL::asset('mypage/js/jquery.mixitup.js') }}"></script>
        <script src="{{ URL::asset('mypage/js/plugins.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="{{ URL::asset('mypage/js/modernizr.js') }}"></script>
        <script src="{{ URL::asset('mypage/js/main.js') }}"></script>
    </body>
</html>
