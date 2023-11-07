const mix = require('laravel-mix');

// Theme JS Compiling
mix.scripts([
        'resources/js/theme/jquery-3.6.0.min.js',
        'resources/js/theme/plugins-jquery.min.js',
        'resources/js/theme/plugin_path.min.js',
        'resources/js/theme/dependencies/revolution/jquery.themepunch.tools.min.js',
        'resources/js/theme/dependencies/revolution/jquery.themepunch.revolution.min.js',
        'resources/js/theme/dependencies/revolution/extensions/revolution.extension.actions.min.js',
        'resources/js/theme/dependencies/revolution/extensions/revolution.extension.carousel.min.js',
        'resources/js/theme/dependencies/revolution/extensions/revolution.extension.kenburn.min.js',
        'resources/js/theme/dependencies/revolution/extensions/revolution.extension.layeranimation.min.js',
        'resources/js/theme/dependencies/revolution/extensions/revolution.extension.migration.min.js',
        'resources/js/theme/dependencies/revolution/extensions/revolution.extension.navigation.min.js',
        'resources/js/theme/dependencies/revolution/extensions/revolution.extension.parallax.min.js',
        'resources/js/theme/dependencies/revolution/extensions/revolution.extension.slideanims.min.js',
        'resources/js/theme/dependencies/revolution/extensions/revolution.extension.video.min.js',
        'resources/js/theme/dependencies/revolution/revolution.addon.particles.min.js',
        'resources/js/theme/dependencies/revolution/revolution-custom.min.js',
        'resources/js/theme/custom.min.js',
        'resources/js/theme/revolution-settings.min.js',
    ], 'resources/js/theme.min.js')

// Dependencies JS Compiling
mix.scripts([
    'resources/js/theme/dependencies/isotope/isotope.pkgd.min.js',
    'resources/js/theme/dependencies/mega-menu/mega_menu.min.js',
    'resources/js/theme/dependencies/owl-carousel/owl-carousel.min.js',
    'resources/js/theme/dependencies/magnific-popup/jquery.magnific-popup.min.js',
    'resources/js/theme/dependencies/nicescroll/jquery.nicescroll.min.js'
], 'resources/js/dependencies.min.js')

// App JS Compiling
mix.scripts([
        'resources/js/theme.min.js',
        'resources/js/dependencies.min.js',
    ], 'public/js/app.min.js')

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
