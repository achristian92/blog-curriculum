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
    .scripts([
        'resources/js/material-dashboard/core/jquery.min.js',
        'resources/js/material-dashboard/core/popper.min.js',
        'resources/js/material-dashboard/core/bootstrap-material-design.min.js',
        'resources/js/material-dashboard/material-dashboard.js',
    ],'public/js/app2.js')
    .browserSync({
        proxy: "http://aruiz.test/"
    });
