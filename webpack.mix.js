const mix = require('laravel-mix');

// Theme JS Compiling
mix.scripts([
    // jQuery
    'resources/theme/js/jquery-3.6.0.min.js',
    // All plugins
    'resources/theme/js/plugins-jquery.min.js',
    // Plugin path
    'resources/theme/js/plugin_path.min.js',
    // Revolution JS files
    'resources/theme/js/dependencies/revolution/jquery.themepunch.tools.min.js',
    'resources/theme/js/dependencies/revolution/jquery.themepunch.revolution.min.js',
    // Revolution Slider 5.0 extensions
    'resources/theme/js/dependencies/revolution/extensions/revolution.extension.actions.min.js',
    'resources/theme/js/dependencies/revolution/extensions/revolution.extension.carousel.min.js',
    'resources/theme/js/dependencies/revolution/extensions/revolution.extension.kenburn.min.js',
    'resources/theme/js/dependencies/revolution/extensions/revolution.extension.layeranimation.min.js',
    'resources/theme/js/dependencies/revolution/extensions/revolution.extension.migration.min.js',
    'resources/theme/js/dependencies/revolution/extensions/revolution.extension.navigation.min.js',
    'resources/theme/js/dependencies/revolution/extensions/revolution.extension.parallax.min.js',
    'resources/theme/js/dependencies/revolution/extensions/revolution.extension.slideanims.min.js',
    'resources/theme/js/dependencies/revolution/extensions/revolution.extension.video.min.js',
    // Revolution Slider Add-On
    'resources/theme/js/dependencies/revolution/revolution.addon.particles.min.js',
    // Revolution custom
    'resources/theme/js/dependencies/revolution/revolution-custom.min.js',
    // Custom
    'resources/theme/js/custom.min.js',
    // Revolution Slider Settings
    'resources/theme/js/revolution-settings.min.js',
], 'resources/theme/js/theme.min.js')

// Dependencies JS Compiling
mix.scripts([
    'resources/theme/js/dependencies/isotope/isotope.pkgd.min.js',
    'resources/theme/js/dependencies/mega-menu/mega_menu.min.js',
    'resources/theme/js/dependencies/owl-carousel/owl-carousel.min.js',
    'resources/theme/js/dependencies/magnific-popup/jquery.magnific-popup.min.js',
    'resources/theme/js/dependencies/nicescroll/jquery.nicescroll.min.js'
], 'resources/theme/js/dependencies.min.js')

// App JS Compiling
mix.scripts([
    'resources/theme/js/theme.min.js',
    'resources/theme/js/dependencies.min.js',
], 'public/js/app.min.js');

// CSS Compiling
mix
    .sass('resources/scss/app.scss', 'public/css/app.min.css').options({
        processCssUrls: false
    })
    .sourceMaps(false, 'source-map', false);

// Copying Assets
mix
    // Images
    .copy('resources/images', 'public/images')
    // Videos
    .copy('resources/video', 'public/video')
    // Fonts
    .copy('resources/theme/fonts/google/s', 'public/fonts/google/s')
    .copy('resources/theme/fonts/fontawesome', 'public/fonts/fontawesome')
    .copy('resources/theme/fonts/themify', 'public/fonts/themify')
    .copy('resources/theme/revolution/fonts/revicons', 'public/fonts/revicons');