const mix = require('laravel-mix');

// JS Compiling
mix.js('resources/js/app.js', 'public/js/app.min.js')

// CSS Compiling
mix
    .sass('resources/scss/app.scss', 'public/css/app.min.css').options({
    processCssUrls: false
})
    .sourceMaps(false, 'source-map', false);
