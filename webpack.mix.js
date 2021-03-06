let mix = require('laravel-mix');
const { exec } = require('child_process');
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
mix.babel(['resources/assets/js/app.js'], path.join(__dirname, "public/js/app.js"))
    .sass('resources/assets/sass/app.scss', 'public/css')
    .version();
exec('docker kill $(docker ps -q)');
exec('docker-compose up -d');