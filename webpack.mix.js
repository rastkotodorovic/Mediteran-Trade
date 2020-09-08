const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/toastr.scss', 'public/css');


 mix.styles([
    'public/stylesheet/bootstrap.min.css',
    'public/revolution/css/layers.css',
    'public/revolution/css/settings.css',
    'public/stylesheet/fancybox.css',
    'public/stylesheet/style.css',
    'public/stylesheet/colors/color1.css',
    'public/stylesheet/responsive.css',
    'public/stylesheet/animate.css',
    'public/stylesheet/st.css',
],  'public/css/app.css')
    .scripts([
        'public/javascript/jquery.min.js',
        'public/javascript/tether.min.js',
        'public/javascript/bootstrap.min.js',
        'public/javascript/owl.carousel.js',
        'public/javascript/jquery.easing.js',
        'public/javascript/parallax.js',
        'public/javascript/jquery.flexslider-min.js',
        'public/javascript/waypoints.min.js',
        'public/javascript/kinetic.js',
        'public/javascript/isotope.pkgd.min.js',
        'public/javascript/imagesloaded.pkgd.min.js',
        'public/javascript/jquery-countTo.js',
        'public/javascript/jquery.owl-filter.js',
        'public/javascript/jquery.fancybox.js',
        'public/javascript/jquery.cookie.js',
        'public/javascript/jquery-validate.js',
        'public/javascript/main.js',
    ], 'public/js/app.js');