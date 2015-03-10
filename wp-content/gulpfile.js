var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('styles', function(){
	gulp.src('themes/theme-hackeryou/style.scss')
	.pipe(sass())
	.pipe(gulp.dest('themes/theme-hackeryou/'))
	});

gulp.task('watch', function(){
	gulp.watch('themes/theme-hackeryou/style.scss', ['styles']);
	});