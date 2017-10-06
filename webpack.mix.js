let mix = require('laravel-mix')

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

/*
mix.js('resources/assets/js/app.js', 'public/js')
  .sass('resources/assets/sass/app.scss', 'public/css') 
*/


// Site
mix.sass('resources/assets/site/sass/site.scss', 'public/css/site')
  .js('resources/assets/site/js/site.js', 'public/js/site')
  .sourceMaps()



// Admin
mix.sass('resources/assets/admin/sass/app.scss', 'public/css/admin')
  .js('resources/assets/admin/js/app.js', 'public/js/admin')
  .sourceMaps()


 mix.styles(
  [
    'node_modules/gentelella/vendors/nprogress/nprogress.css',
    'node_modules/gentelella/vendors/iCheck/skins/flat/green.css',
    'node_modules/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css',
    'node_modules/gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.css',
    'node_modules/gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.css',
    'node_modules/gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.css',
    'node_modules/gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.css',
    'node_modules/gentelella/build/css/custom.css'
  ],
  'public/css/admin/gentelella.css'
)

mix.scripts(
  [
    'node_modules/gentelella/vendors/nprogress/nprogress.js',
    'node_modules/gentelella/vendors/iCheck/icheck.js',
    'node_modules/gentelella/vendors/fastclick/lib/fastclick.js',
    'node_modules/gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.js',
    'node_modules/gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.js',
    'node_modules/gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.js',
    'node_modules/gentelella/vendors/datatables.net-buttons/js/buttons.flash.js', 'node_modules/gentelella/vendors/datatables.net-buttons/js/buttons.html5.js', 'node_modules/gentelella/vendors/datatables.net-buttons/js/buttons.print.js', 'node_modules/gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.js',
    'node_modules/gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.js',
    'node_modules/gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.js',
    'node_modules/gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js', 'node_modules/gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.js',
    'node_modules/gentelella/vendors/validator/validator.js',
    'node_modules/gentelella/vendors/parsleyjs/dist/parsley.js',
    'node_modules/gentelella/vendors/parsleyjs/dist/i18n/pt-br.js',
    'resources/assets/admin/js/gentelella-custom.js'
  ],
  'public/js/admin/gentelella.js'
)


mix.browserSync('localhost:8000')
