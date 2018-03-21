require('laravel-elixir-browserify-official');
var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir.config.js.browserify.transformers.push({
    name: 'reactify',
    options: {}
});

elixir.config.js.browserify.transformers.push({
    name: 'extensify',
    options: {
        extensions: [
            'jsx'
        ]
    }
});
elixir.config.js.browserify.options.debug = true;
elixir.config.js.browserify.watchify.enabled = true;

elixir.config.js.browserify.watchify = {
    enabled: true,
    options: {
        poll: true
    }
};

elixir(function(mix) {
    mix.browserify('components/BlogApp.jsx', null, null, {
        paths: ['./node_modules', '.resources/assets/js'],
        cache: {},
        packageCache: {}
    });
});