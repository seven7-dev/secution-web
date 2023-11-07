const mix = require('laravel-mix');

// JS Compiling
mix.js('resources/js/app.js', 'public/js/app.min.js')
    .scripts([
        'resources/js/webster/jquery-3.6.0.min.js',
        'resources/js/webster/plugins-jquery.js',
        'resources/js/webster/plugin_path.min.js',
        'resources/js/webster/revolution/js/jquery.themepunch.tools.min.js',
        'resources/js/webster/revolution/js/jquery.themepunch.revolution.min.js',
        'resources/js/webster/revolution/js/extensions/revolution.extension.actions.min.js',
        'resources/js/webster/revolution/js/extensions/revolution.extension.carousel.min.js',
        'resources/js/webster/revolution/js/extensions/revolution.extension.kenburn.min.js',
        'resources/js/webster/revolution/js/extensions/revolution.extension.layeranimation.min.js',
        'resources/js/webster/revolution/js/extensions/revolution.extension.migration.min.js',
        'resources/js/webster/revolution/js/extensions/revolution.extension.navigation.min.js',
        'resources/js/webster/revolution/js/extensions/revolution.extension.parallax.min.js',
        'resources/js/webster/revolution/js/extensions/revolution.extension.slideanims.min.js',
        'resources/js/webster/revolution/js/extensions/revolution.extension.video.min.js',
        'resources/js/webster/revolution/js/revolution.addon.particles.min.js',
        'resources/js/webster/revolution/js/revolution-custom.js',
        'resources/js/webster/custom.js',
        'resources/js/webster/revolution-settings.js',
    ], 'public/js/all.min.js')

// CSS Compiling
mix
    .sass('resources/scss/app.scss', 'public/css/app.min.css').options({
        processCssUrls: false
    })
    .sourceMaps(false, 'source-map', false);

// Copying CSS
mix.copy('resources/css', 'public/css');

// Copying Images
mix.copy('resources/images', 'public/images');

// Copying Videos
mix.copy('resources/video', 'public/video');

// Copying Fonts
mix.copy('resources/fonts', 'public/fonts');
