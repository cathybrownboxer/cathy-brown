var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    minifyCSS = require('gulp-minify-css'),
    rename = require('gulp-rename'),
    watch = require('gulp-watch');

var gulpPaths = {
  sass:'scss/',
  cssDist:'../wordpress/wp-content/themes/wpex-elegant/styles/'
}

gulp.task('sass', function () {
  gulp.src(gulpPaths.sass + '**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest(gulpPaths.cssDist))
    .pipe(concat(gulpPaths.cssDist + 'cathy-brown.css'))
    .pipe(gulp.dest('./'))
    .pipe(minifyCSS())
    .pipe(rename('cathy-brown.min.css'))
    .pipe(gulp.dest(gulpPaths.cssDist));
});

gulp.task('watch', function () {
  gulp.watch(['scss/**/*.scss'], ['sass']);
});

gulp.task('default', ['sass']);