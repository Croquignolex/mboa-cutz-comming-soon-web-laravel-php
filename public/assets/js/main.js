/* ===================================================================
 * Count - Main JS
 *
 * ------------------------------------------------------------------- */

(function($) {

    "use strict";
    
    var cfg = {
        scrollDuration : 800, // smoothscroll duration
        mailChimpURL   : 'https://facebook.us8.list-manage.com/subscribe/post?u=cdb7b577e41181934ed6a6a44&amp;id=e6957d85dc'   // mailchimp url
    },


    $WIN = $(window);

    // Add the User Agent to the <html>
    // will be used for IE10 detection (Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0))
    var doc = document.documentElement;
    doc.setAttribute('data-useragent', navigator.userAgent);

    // svg fallback
    if (!Modernizr.svg) {
        $(".home-logo img").attr("src", "images/logo.png");
    }

    const locale = $('#main-bloc').data('locale');

   /* Preloader
    * -------------------------------------------------- */
    var ssPreloader = function() {
        
        $("html").addClass('ss-preload');

        $WIN.on('load', function() {

            // will first fade out the loading animation 
            $("#loader").fadeOut("slow", function() {
                // will fade out the whole DIV that covers the website.
                $("#preloader").delay(300).fadeOut("slow");
            }); 
            
            // for hero content animations 
            $("html").removeClass('ss-preload');
            $("html").addClass('ss-loaded');
        
        });
    };


   /* info toggle
    * ------------------------------------------------------ */
    var ssInfoToggle = function() {

        //open/close lateral navigation
        $('.info-toggle').on('click', function(event) {

            event.preventDefault();
            $('body').toggleClass('info-is-visible');

        });

    };


   /* slick slider
    * ------------------------------------------------------ */
    var ssSlickSlider = function() {
        
        $('.home-slider').slick({
            arrows: false,
            dots: false,
            autoplay: true,
            autoplaySpeed: 3000,
            fade: true,
            speed: 3000
        });

    };


   /* placeholder plugin settings
    * ------------------------------------------------------ */
    var ssPlaceholder = function() {
        $('input, textarea, select').placeholder();
    };


   /* final countdown
    * ------------------------------------------------------ */
    var ssFinalCountdown = function() {

        const finalDate =  new Date("November 2, 2020 00:00:00").getTime();
        const daysStr = locale === 'fr' ? 'Jour' : 'Day';

        $('.home-content__clock').countdown(finalDate)
        .on('update.countdown finish.countdown', function(event) {

            var str = '<div class=\"top\"><div class=\"time days\">' +
                      '%D <span>'+ daysStr +'%!D</span>' +
                      '</div></div>' +
                      '<div class=\"time hours\">' +
                      '%H <span>H</span></div>' +
                      '<div class=\"time minutes\">' +
                      '%M <span>M</span></div>' +
                      '<div class=\"time seconds\">' +
                      '%S <span>S</span></div>';

            $(this)
            .html(event.strftime(str));

        });
    };


   /* AjaxChimp
    * ------------------------------------------------------ */
    var ssAjaxChimp = function() {
        
        $('#mc-form').ajaxChimp({
            language: 'es',
            url: cfg.mailChimpURL
        });

        // Mailchimp translation
        //
        //  Defaults:
        //	 'submit': 'Submitting...',
        //  0: 'We have sent you a confirmation email',
        //  1: 'Please enter a value',
        //  2: 'An email address must contain a single @',
        //  3: 'The domain portion of the email address is invalid (the portion after the @: )',
        //  4: 'The username portion of the email address is invalid (the portion before the @: )',
        //  5: 'This email address looks fake or invalid. Please enter a real email address'

        if(locale === 'fr') {
            $.ajaxChimp.translations.es = {
                'Envoyé': 'En cours...',
                0: '<i class="fas fa-check"></i> Merci. Vous serez contacté dans les plus bref délais.',
                1: '<i class="fas fa-exclamation-triangle"></i> S\'il vous plais, entrez une valeur.',
                2: '<i class="fas fa-exclamation-triangle"></i> Une adresse email doit avoir un caractère @.',
                3: '<i class="fas fa-exclamation-triangle"></i> La partie du domaine n\'est pas valide (la portion après le @: ).',
                4: '<i class="fas fa-exclamation-triangle"></i> La partie nom d\'utilisateur n\'est pas valide (la portion avant le @: ).',
                5: '<i class="fas fa-exclamation-triangle"></i> L\'adresse mail n\'a pas l\'air valide. S\'il vous plais, entrez une adresse mail valide.'
            }
        } else {
            $.ajaxChimp.translations.es = {
                'Submited': 'Processing...',
                0: '<i class="fas fa-check"></i> Thank you. You will be contacted as soon as possible.',
                1: '<i class="fas fa-exclamation-triangle"></i> Please enter a value',
                2: '<i class="fas fa-exclamation-triangle"></i> An email address must contain a single @.',
                3: '<i class="fas fa-exclamation-triangle"></i> The domain portion of the email address is invalid (the portion after the @: ).',
                4: '<i class="fas fa-exclamation-triangle"></i> The username portion of the email address is invalid (the portion before the @: ).',
                5: '<i class="fas fa-exclamation-triangle"></i> This email address looks fake or invalid. Please enter a real email address.'
            }
        }
    };

   /* initialize
    * ------------------------------------------------------ */
    (function ssInit() {
        
        ssPreloader();
        ssInfoToggle();
        ssSlickSlider();
        ssPlaceholder();
        ssFinalCountdown();
        ssAjaxChimp();

    })();


})(jQuery);