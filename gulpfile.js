var gulp = require('gulp'),
watch = require('gulp-watch'),
sync = require('browser-sync').create(),
prefix = require('autoprefixer'),
postcss = require('gulp-postcss'),
nested = require('postcss-nested'),
imports = require('postcss-import'),
vars = require('postcss-simple-vars'),
hexrgba = require('postcss-hexrgba'),
mixins = require('postcss-mixins'),
map = require('gulp-sourcemaps'),
rename = require('gulp-rename'),
minify = require('gulp-minify-css'),
del = require('del');

gulp.task('styles',function(){
  return gulp.src('./app/assets/styles/**/*.pcss')
  .pipe(map.init())
  .pipe(postcss([imports, vars, nested, mixins, hexrgba, prefix]))
  .on('error', function(infoError){
    console.log(infoError.toString());
    this.emit('end');
  })
  .pipe(rename({
    extname: '.css'
  }))
  .pipe(map.write('/'))
  .pipe(gulp.dest('./app/temp/css'));
});

gulp.task('watch', function(){

  sync.init({
    proxy: "http://localhost/inventory/app/",
    port: 80
  })

  gulp.watch('./app/**/*.php', function(){
    sync.reload();
  });

  gulp.watch('./app/assets/styles/**/*.pcss', function(){
    gulp.start('injectCss');
  });

});

gulp.task('injectCss', ['styles'], function(){
  return gulp.src('./app/temp/css/style.css')
  .pipe(sync.stream());
});