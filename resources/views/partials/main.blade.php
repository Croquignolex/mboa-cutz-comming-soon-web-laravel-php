<main class="s-home s-home--particles" id="main-bloc" data-locale="{{ Illuminate\Support\Facades\App::getLocale() }}">

    <div id="particles-js" class="home-particles"></div>

    <div class="gradient-overlay"></div>

    <div class="home-content">

        <div class="home-logo">
            <a href="javascript: void(0)">
                <img src="{{ img_asset('logo', 'jpg') }}" alt="Homepage">
            </a>
        </div>

        <div class="row home-content__main">

            <div class="col-eight home-content__text pull-right">
                <h3>{{ trans('home.welcome', ['app' => env('APP_NAME')]) }}</h3>

                <h1>{{ trans('home.welcome_description') }}</h1>

                <p style="text-align: justify;text-justify: inter-word;">{{ trans('home.short_description', ['app' => env('APP_NAME')]) }}</p>
                <p style="text-align: justify;text-justify: inter-word;">{{ trans('home.short_description_plus') }}</p>

                <div class="home-content__subscribe">
                    <form id="mc-form" class="group" novalidate="true" method="POST">
                        <input type="email" name="email" class="email" id="mc-email" placeholder="Email">
                        <input type="submit" name="subscribe" value="{{ trans('home.notify_me') }}">
                        <label for="mc-email" class="subscribe-message"></label>
                    </form>
                </div>
            </div>

            <div class="col-four home-content__counter">
                <h3>{{ trans('home.available_in') }}</h3>

                <div class="home-content__clock">
                    <div class="top"><div class="time days"><span></span></div></div>
                    <div class="time hours"><span>H</span></div>
                    <div class="time minutes"><span>M</span></div>
                    <div class="time seconds"><span>S</span></div>
                </div>
            </div>

        </div>

        <ul class="home-social">
            <li>
                <a href="https://www.facebook.com/mboacutz" target="_blank">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    <span>Facebook</span>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/mboa_cutz/" target="_blank">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <span>Twiiter</span>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/mboa_cutz/" target="_blank">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <span>Instagram</span>
                </a>
            </li>
            <li>
                <a href="{{ language_url() }}">
                    <i class="fab fa-font-awesome-flag" aria-hidden="true"></i>
                    <span>{{ language_title() }}</span>
                </a>
            </li>
        </ul>

        <div class="row home-copyright">
            <span>Copyright MBOA CUTZ 2020</span>
            <span>
                Design by
                <a href="https://croquignolex-tikiton.dmsemergence.com/" target="_blank">
                    Croquignolex Tikiton
                </a>
            </span>
        </div>
    </div>
</main>