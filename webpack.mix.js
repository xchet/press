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
    ]);

// mix.js('resources/js/app.js', 'public/js/app.js')
//     .js('resources/js/admin.js', 'public/js/admin.js')
//     // .js('resources/js/home.js', 'public/js/home.js')
//     // .sass('resources/css/home.scss', 'public/css/home.css')
//     .css('resources/css/app.css', 'public/css/app.css')
//     .css('resources/css/admin.css', 'public/css/admin.css')
//     .version();
