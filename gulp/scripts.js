var gulp = require('gulp');
var webpack = require('webpack');

gulp.task('scripts', function(callBack){
  webpack(require('../webpack.config.js'), function(Err,stats){
    if(Err){
      console.log( Err.toString() );
    }
    console.log(stats.toString());
    callBack();
  });
  
});