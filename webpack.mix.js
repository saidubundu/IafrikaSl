const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    .scripts([
        'resources/assets/js/modernizr.custom.js',
        'resources/assets/js/jquery-3.5.0.min.js',
        'resources/assets/js/styleswitcher.js',
        'resources/assets/js/preloader.min.js',
        'resources/assets/js/fm.revealator.jquery.min.js',
        'resources/assets/js/imagesloaded.pkgd.min.js',
        'resources/assets/js/masonry.pkgd.min.js',
        'resources/assets/js/classie.js',
        'resources/assets/js/cbpGridGallery.js',
        'resources/assets/js/jquery.hoverdir.js',
        'resources/assets/js/popper.min.js',
        'resources/assets/js/bootstrap.js',
        'resources/assets/js/custom.js',
    ], 'public/js/front.js')

    .styles([
        'resources/assets/css/bootstrap.min.css',
        'resources/assets/css/preloader.min.css',
        'resources/assets/css/circle.css',
        'resources/assets/css/font-awesome.min.css',
        'resources/assets/css/fm.revealator.jquery.min.css',
        'resources/assets/css/style.css',
        'resources/assets/css/skins/purple.css',
        'resources/assets/css/style.css',
    ], 'public/css/front.css')
;
