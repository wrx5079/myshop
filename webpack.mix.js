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

mix.styles([
    'resources/admin/bootstrap/css/bootstrap.min.css',
    'resources/admin/font-awesome/4.5.0/css/font-awesome.min.css',
    'resources/admin/ionicons/2.0.1/css/ionicons.min.css',
    'resources/admin/plugins/iCheck/minimal/_all.css',
    'resources/admin/plugins/datepicker/datepicker3.css',
    'resources/admin/plugins/select2/select2.min.css',
    'resources/admin/plugins/datatables/dataTables.bootstrap.css',
    'resources/admin/dist/css/AdminLTE.min.css',
    'resources/admin/dist/css/skins/_all-skins.min.css'
],'public/css/admin.css');

mix.scripts([
    'resources/admin/plugins/jQuery/jquery-2.2.3.min.js',
    'resources/admin/bootstrap/js/bootstrap.min.js',
    'resources/admin/plugins/select2/select2.full.min.js',
    'resources/admin/plugins/datepicker/bootstrap-datepicker.js',
    'resources/admin/plugins/datatables/jquery.dataTables.min.js',
    'resources/admin/plugins/datatables/dataTables.bootstrap.min.js',
    'resources/admin/plugins/slimScroll/jquery.slimscroll.min.js',
    'resources/admin/plugins/fastclick/fastclick.js',
    'resources/admin/plugins/iCheck/icheck.min.js',
    'resources/admin/dist/js/app.min.js',
    'resources/admin/dist/js/demo.js',
    'resources/admin/dist/js/scripts.js'
],'public/js/admin.js');

mix.copy('resources/admin/bootstrap/fonts', 'public/fonts');
mix.copy('resources/admin/dist/fonts', 'public/fonts');
mix.copy('resources/admin/dist/img', 'public/img');
mix.copy('resources/admin/plugins/iCheck/minimal/blue.png', 'public/css');


mix.styles([
    'resources/front/css/bootstrap.min.css',
    'resources/front/css/style.css'
],'public/css/front.css');

mix.scripts([
    'resources/front/js/jquery.min.js',
    'resources/front/js/bootstrap.min.js',
    'resources/front/js/script.js'
], 'public/js/front.js');

mix.copy('resources/front/img', 'public/img');
mix.copy('resources/front/fonts', 'public/fonts');
