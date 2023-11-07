const mix = require('laravel-mix');

// Theme JS Compiling
mix.scripts([
        'resources/theme/js/jquery-3.6.0.min.js',
        'resources/theme/js/plugins-jquery.min.js',
        'resources/theme/js/plugin_path.min.js',
        'resources/theme/js/dependencies/revolution/jquery.themepunch.tools.min.js',
        'resources/theme/js/dependencies/revolution/jquery.themepunch.revolution.min.js',
        'resources/theme/js/dependencies/revolution/extensions/revolution.extension.actions.min.js',
        'resources/theme/js/dependencies/revolution/extensions/revolution.extension.carousel.min.js',
        'resources/theme/js/dependencies/revolution/extensions/revolution.extension.kenburn.min.js',
        'resources/theme/js/dependencies/revolution/extensions/revolution.extension.layeranimation.min.js',
        'resources/theme/js/dependencies/revolution/extensions/revolution.extension.migration.min.js',
        'resources/theme/js/dependencies/revolution/extensions/revolution.extension.navigation.min.js',
        'resources/theme/js/dependencies/revolution/extensions/revolution.extension.parallax.min.js',
        'resources/theme/js/dependencies/revolution/extensions/revolution.extension.slideanims.min.js',
        'resources/theme/js/dependencies/revolution/extensions/revolution.extension.video.min.js',
        'resources/theme/js/dependencies/revolution/revolution.addon.particles.min.js',
        'resources/theme/js/dependencies/revolution/revolution-custom.min.js',
        'resources/theme/js/custom.min.js',
        'resources/theme/js/revolution-settings.min.js',
    ], 'resources/js/theme.min.js')

// Dependencies JS Compiling
mix.scripts([
    'resources/theme/js/dependencies/isotope/isotope.pkgd.min.js',
    'resources/theme/js/dependencies/mega-menu/mega_menu.min.js',
    'resources/theme/js/dependencies/owl-carousel/owl-carousel.min.js',
    'resources/theme/js/dependencies/magnific-popup/jquery.magnific-popup.min.js',
    'resources/theme/js/dependencies/nicescroll/jquery.nicescroll.min.js'
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
