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

mix.sass('resources/sass/app.scss', 'public/css')
	.styles([
    'resources/assets/css/animate.css',
    'resources/assets/css/app.css',
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/default.css',
    'resources/assets/css/ionicons.min.css',
    'resources/assets/css/jquery-ui.min.css',
    'resources/assets/css/jquery.fancybox.css',
    'resources/assets/css/linearicons.css',
    'resources/assets/css/meanmenu.min.css',
    'resources/assets/css/nice-select.css',
    'resources/assets/css/orange-color.css',
    'resources/assets/css/owl.carousel.min.css',
    'resources/assets/css/past-color.css',
    'resources/assets/css/purple-color.css',
    'resources/assets/css/responsive.css',
    'resources/assets/css/style.css',
], 'public/css/all.css')
	.scripts([
    'resources/assets/js/ajax-mail.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/jquery-ui.min.js',
    'resources/assets/js/jquery.countdown.min.js',
    'resources/assets/js/jquery.fancybox.min.js',
    'resources/assets/js/jquery.meanmenu.min.js',
    'resources/assets/js/jquery.nice-select.min.js',
    'resources/assets/js/jquery.nivo.slider.js',
    'resources/assets/js/plugins.js',
    'resources/assets/js/wow.min.js',
], 'public/js/all.js')
    .version();