<!DOCTYPE html>
<html lang="{{ current_language() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ seo_description() }}">
        <meta name="keywords" content="{{ seo_keywords() }}">
        <meta name="author" content="Alex NGOMBOL">

        <title>Accueil - MBOA CUTZ</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="apple-touch-icon" sizes="57x57" href="{{ favicon_img_asset('apple-icon-57x57') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ favicon_img_asset('apple-icon-60x60') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ favicon_img_asset('apple-icon-72x72') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ favicon_img_asset('apple-icon-76x76') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ favicon_img_asset('apple-icon-114x114') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ favicon_img_asset('apple-icon-120x120') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ favicon_img_asset('apple-icon-144x144') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ favicon_img_asset('apple-icon-152x152') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ favicon_img_asset('apple-icon-180x180') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ favicon_img_asset('android-icon-192x192') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ favicon_img_asset('favicon-32x32') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ favicon_img_asset('favicon-96x96') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ favicon_img_asset('favicon-16x16') }}">
        <link rel="manifest" href="{{ favicon_file_asset('manifest') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="{{ css_asset('base') }}" type="text/css">
        <link rel="stylesheet" href="{{ css_asset('vendor') }}" type="text/css">
        <link rel="stylesheet" href="{{ css_asset('main') }}" type="text/css">

        <script src="{{ js_asset('modernizr') }}" type="text/javascript"></script>
        <script src="{{ js_asset('pace.min') }}" type="text/javascript"></script>
    </head>

    <body>
        <!-- home ================================================== -->
        <main class="s-home s-home--particles">

            <div id="particles-js" class="home-particles"></div>

            <div class="gradient-overlay"></div>

            <div class="home-content">

                <div class="home-logo">
                    <a href="index-particles.html">
                        <img src="images/logo.svg" alt="Homepage">
                    </a>
                </div>

                <div class="row home-content__main">

                    <div class="col-eight home-content__text pull-right">
                        <h3>Welcome to Count</h3>

                        <h1>
                            We are currently working <br>
                            on a new super awesome <br> website.
                        </h1>

                        <p>
                            Nulla porttitor accumsan tincidunt. Nulla quis lorem ut libero malesuada feugiat.
                            Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                            Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada feugiat.
                        </p>

                        <div class="home-content__subscribe">
                            <form id="mc-form" class="group" novalidate="true">
                                <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                                <input type="submit" name="subscribe" value="Notify Me">
                                <label for="mc-email" class="subscribe-message"></label>
                            </form>
                        </div>
                    </div>  <!-- end home-content__text -->

                    <div class="col-four home-content__counter">
                        <h3>Launching In</h3>

                        <div class="home-content__clock">
                            <div class="top">
                                <div class="time days">
                                    325
                                    <span>Days</span>
                                </div>
                            </div>
                            <div class="time hours">
                                09
                                <span>H</span>
                            </div>
                            <div class="time minutes">
                                54
                                <span>M</span>
                            </div>
                            <div class="time seconds">
                                30
                                <span>S</span>
                            </div>
                        </div>  <!-- end home-content__clock -->
                    </div>  <!-- end home-content__counter -->

                </div>  <!-- end home-content__main -->

                <ul class="home-social">
                    <li>
                        <a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i><span>Facebook</span></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-behance" aria-hidden="true"></i><span>Behance</span></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a>
                    </li>
                </ul> <!-- end home-social -->

                <div class="row home-copyright">
                    <span>Copyright Count 2018</span>
                    <span>Design by <a href="https://www.styleshout.com/">styleshout</a></span>
                </div> <!-- end home-copyright -->


                <div class="home-content__line"></div>

            </div> <!-- end home-content -->

        </main> <!-- end s-home -->


        <!-- info ================================================== -->
        <a class="info-toggle" href="#0">
            <span class="info-menu-icon"></span>
        </a>

        <div class="s-info">

            <div class="row info-wrapper">

                <div class="col-seven tab-full info-main">
                    <h1>We are Count. We make awesome stuff.</h1>
                    <p>
                        Quisque velit nisi, pretium ut lacinia in, elementum id enim. Mauris blandit aliquet elit,
                        eget tincidunt nibh pulvinar a. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                    </p>

                    <p>
                        Officiis nostrum adipisci minima. Enim tenetur animi ipsum a itaque temporibus necessitatibus.
                        Dolores ad perspiciatis. Voluptatem et molestiae adipisci laboriosam assumenda. Deleniti vero
                        labore eos repudiandae. Vel commodi tenetur ex quia. Quisque velit nisi, pretium ut lacinia in,
                        elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere.
                    </p>
                </div>

                <div class="col-four tab-full pull-right info-contact">

                    <div class="info-block">
                        <h3>Start A Conversation</h3>
                        <p>
                            <a href="mailto:#0" class="info-email">mailus@ourwebsite.com</a><br>
                            <a href="tel:+18587338912" class="'info-phone">+1.858.733.8912</a>
                        </p>
                    </div>

                    <div class="info-block">
                        <h3>Visit Our Office</h3>

                        <p class="info-address">
                            1600 Amphitheatre Parkway<br>
                            Mountain View, CA<br>
                            94043 US
                        </p>
                    </div>

                    <div class="info-block">
                        <h3>Find Us On</h3>

                        <ul class="info-social">
                            <li>
                                <a href="#0"><i class="fab fa-facebook" aria-hidden="true"></i>
                                    <span>Facebook</span></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i>
                                    <span>Twiiter</span></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i>
                                    <span>Instagram</span></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fab fa-behance" aria-hidden="true"></i>
                                    <span>Behance</span></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fab fa-dribbble" aria-hidden="true"></i>
                                    <span>Dribbble</span></a>
                            </li>
                        </ul>
                    </div>

                </div>  <!-- end info contact -->

            </div>  <!-- end info wrapper -->

        </div> <!-- end s-info -->


        <!-- preloader ================================================== -->
        <div id="preloader">
            <div id="loader">
                <div class="line-scale-pulse-out">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>

        <script src="{{ js_asset('jquery-3.2.1.min') }}" type="text/javascript"></script>
        <script src="{{ js_asset('plugins') }}" type="text/javascript"></script>
        <script src="{{ js_asset('polygons') }}" type="text/javascript"></script>
        <script src="{{ js_asset('main') }}" type="text/javascript"></script>
    </body>
</html>
