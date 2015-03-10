 var gulp = require('gulp');
 var sass = require('gulp-sass');

 gulp.task('styles',function(){
   gulp.src('./style.scss')
     .pipe(sass())
     .pipe(concat('style.css')) // concat every file into one
     .pipe(gulp.dest('./css')) // finally put the file into the styles directory
 });

  gulp.task( 'watch', function(){ 	
 	gulp.watch( './style.scss', [ 'styles' ]);
  }); //end gulp.task(watch)