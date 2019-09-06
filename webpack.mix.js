let mix = require('laravel-mix');

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

mix.styles([
    'resources/assets/bootstrap/css/bootstrap.min.css',
    'resources/assets/font-awesome/4.5.0/css/font-awesome.min.css',
    'resources/assets/ionicons/2.0.1/css/ionicons.min.css',
    'resources/assets/plugins/iCheck/minimal/_all.css',
    'resources/assets/plugins/datepicker/datepicker3.css',
    'resources/assets/plugins/select2/select2.min.css',
    'resources/assets/plugins/datatables/dataTables.bootstrap.css',
    'resources/assets/dist/css/AdminLTE.min.css',
    'resources/assets/dist/css/skins/_all-skins.min.css',
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/font-awesome.min.css',
    'resources/assets/css/animate.min.css',
    'resources/assets/css/owl.carousel.css',
    'resources/assets/css/owl.theme.css',
    'resources/assets/css/owl.transitions.css',
    'resources/assets/css/style.css',
    'resources/assets/css/responsive.css'
], 'public/css/app.css');

mix.scripts([
    'resources/assets/plugins/jQuery/jquery-2.2.3.min.js',
    'resources/assets/bootstrap/js/bootstrap.min.js',
    'resources/assets/plugins/select2/select2.full.min.js',
    'resources/assets/plugins/datepicker/bootstrap-datepicker.js',
    'resources/assets/plugins/datatables/jquery.dataTables.min.js',
    'resources/assets/plugins/datatables/dataTables.bootstrap.min.js',
    'resources/assets/plugins/slimScroll/jquery.slimscroll.min.js',
    'resources/assets/plugins/fastclick/fastclick.js',
    'resources/assets/plugins/iCheck/icheck.min.js',
    'resources/assets/dist/js/app.min.js',
    'resources/assets/dist/js/demo.js',
    'resources/assets/dist/js/scripts.js',
    'resources/assets/js/jquery-1.11.3.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/owl.carousel.min.js',
    'resources/assets/js/jquery.stickit.min.js',
    'resources/assets/js/menu.js',
    'resources/assets/js/scripts.js'
], 'public/js/app.js');

mix.copy('resources/assets/bootstrap/fonts', 'public/fonts');
mix.copy('resources/assets/dist/fonts', 'public/fonts');
mix.copy('resources/assets/dist/img', 'public/img');
mix.copy('resources/assets/plugins/iCheck/minimal/blue.png', 'public/css');
mix.copy('resources/assets/fonts', 'public/fonts');
mix.copy('resources/assets/images', 'public/images');
