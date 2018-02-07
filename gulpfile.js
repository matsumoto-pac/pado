var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');

var sass_paths = {
  'scss': './sass/',
  'css': './css/'
}

gulp.task('sass', function() {
  return gulp.src(sass_paths.scss + '**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({
			outputStyle: 'compressed'
		}))
    .pipe(autoprefixer())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(sass_paths.css))
});