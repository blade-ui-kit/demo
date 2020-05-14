const mix = require('laravel-mix');

require('laravel-mix-tailwind');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css')
   .tailwind('./tailwind.config.js');

if (mix.inProduction()) {
  mix.version();
}
