var gulp = require('gulp'),
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
  return gulp.src('./app/assets/styles/style.pcss')
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