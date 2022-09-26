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
        require('postcss-import'),
        require('tailwindcss'),
    ]);

    // mix.js('resources/js/app.js', 'public/js')
    // .postCss('resources/scss/app.css', 'public/css', [
    //     //
    // ]);




if (mix.inProduction()) {
    mix.version();
}

mix.scripts([ 
    'public/asset/plugins/global/plugins.bundle.js', 
    'public/asset/js/scripts.bundle.js', 
    ], 'public/js/app-demo1.js');
    
    mix.styles([ 
        'public/asset/plugins/global/plugins.bundle.css', 
        'public/asset/css/style.bundle.css', 
    ], 'public/css/app-demo1.css');