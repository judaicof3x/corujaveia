const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 */

mix.copyDirectory('resources/src', 'public');

if (mix.inProduction()) {
    mix.version();
}