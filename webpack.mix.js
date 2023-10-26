const mix = require('laravel-mix');

// JS Compiling
mix.js('resources/js/app.js', 'public/js/app.min.js')
    .scripts([
        //
    ], 'public/js/all.min.js')

// CSS Compiling
mix
    .sass('resources/scss/app.scss', 'public/css/app.min.css').options({
    processCssUrls: false
})
    .sourceMaps(false, 'source-map', false);

// Copying Images
mix.copy('resources/images', 'public/images');

// Copying Fonts
mix.copy('resources/fonts', 'public/fonts');
