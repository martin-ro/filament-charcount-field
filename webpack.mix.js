const mix = require('laravel-mix');

mix.setPublicPath('dist');
mix.sourceMaps();
mix.version();

mix.js('resources/js/filament-charcounted-field.js', 'dist/js');
mix.sourceMaps();

mix.postCss('resources/css/filament-charcounted-field.css', 'dist/css', [
    require('tailwindcss'),
    require('autoprefixer'),
]);
