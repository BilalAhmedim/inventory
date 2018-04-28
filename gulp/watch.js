var gulp = require('gulp'),
watch = require('gulp-watch'),
sync = require('browser-sync').create();

gulp.task('watch', function(){

  sync.init({
    notify: false,
    proxy: "http://localhost/inventory/app/",
    port: 80
  })

  gulp.watch('./app/**/*.php', function(){
    sync.reload();
  });

  gulp.watch('./app/assets/styles/**/*.pcss', function(){
    gulp.start('injectCss');
  });

  gulp.watch('./app/assets/scripts/**/*.js', function(){
    gulp.start('scriptRefresh');
  });

});

gulp.task('injectCss', ['styles'], function(){
  return gulp.src('./app/temp/css/style.css')
  .pipe(sync.stream());
});