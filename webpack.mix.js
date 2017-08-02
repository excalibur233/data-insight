const {mix} = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .extract(['vue'])
    .sass('resources/assets/sass/app.scss', 'public/css/app_pre.css')
    .combine([
        'resources/assets/vendor/AdminLTE-2.4.0/dist/css/AdminLTE.min.css',
        'resources/assets/vendor/AdminLTE-2.4.0/dist/css/skins/_all-skins.min.css',
        'public/css/app_pre.css',
    ],'public/css/app.css');