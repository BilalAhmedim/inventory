var gulp = require('gulp'),
webpack = require('webpack');

gulp.task('scripts', function(callBack){
  
  webpack(function(Err,Status){
    if(Err){
      console.log( Err.toString() );
    }
    console.log(status);
    callBack();
  });
  
});


gulp.task('scriptsRefresh', ['scripts'], function(){

});