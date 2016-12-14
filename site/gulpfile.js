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

gulp.task('default', ['scss']);
/**
 * SCSS - Compile Foundation from SCSS
 */
gulp.task('scss', function() {
  /* Compile SCSS from Foundation*/
  console.log(SOURCE_PATH+'foundation/app.scss');
  gulp.src(SOURCE_PATH+'foundation/app.scss')
  .pipe(sass({
   includePaths: ['node_modules/foundation-sites/scss', SOURCE_PATH+'foundation/foundation_settings.scss']
  }))
  .pipe(rename("foundation.css"))
  .pipe(gulp.dest(BUILD_PATH+'css/'))
  .pipe(notify('Foundation SASS complete'));
});
