const mix_ = require('laravel-mix');

mix_.setPublicPath('./dist')
  .sass('./assets/scss/style.scss', 'css/style.min.css')
  .options({
    processCssUrls: false
  });

if (mix_.inProduction()) {
  mix_.version();
} else {
  mix_.sourceMaps();
}
