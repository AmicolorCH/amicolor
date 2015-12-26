/* File: gulpfile.js */

'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
  gulp.src('themes/amicolor/scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('themes/amicolor/css'));
});

gulp.task('sass:watch', function () {
  gulp.watch('themes/amicolor/scss/**/*.scss', ['sass']);
});
