const mix = require('laravel-mix');

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

mix.scripts(['resources/datatable/js/jquery.js',
	'resources/datatable/js/jquery-dt.min.js',
	'resources/datatable/js/bootstrap4.min.js'	
	],'public/js/app.js')
   .styles(['resources/datatable/css/bootstrap.css',
   	'resources/datatable/js/bootstrap-dt.min.css'
   	],'public/css/app.css')
   .sass('resources/sass/app.scss', 'public/css/fonts-icons.css');
