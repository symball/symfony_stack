var gulp = require('gulp');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var notify = require("gulp-notify");
var del = require('del');
var cache = require('gulp-cached');
var jshint = require('gulp-jshint');
var merge = require('merge-stream');

var SOURCE_PATH = '';
var BUILD_PATH = 'build/src/AppBundle/Resources/public/';

gulp.task('default', ['foundation']);
/**
 * SCSS - Compile Foundation from SCSS
 */
gulp.task('foundation', function() {
  /* Compile SCSS from Foundation*/
  console.log(SOURCE_PATH+'foundation/app.scss');
  gulp.src([
    SOURCE_PATH+'foundation/app.scss',
    SOURCE_PATH+'foundation/common.scss'
  ])
  .pipe(sass({
   includePaths: [SOURCE_PATH+'foundation/foundation_settings.scss', 'node_modules/foundation-sites/scss'],
   errLogToConsole: true
  }))
  .pipe(rename("common.css"))
  .pipe(gulp.dest(BUILD_PATH+'css/'))
  .pipe(notify('Foundation SASS complete'));

  gulp.src(SOURCE_PATH+'node_modules/foundation-sites/dist/js/foundation.min.js')
  .pipe(gulp.dest(BUILD_PATH+'js/'))
});
