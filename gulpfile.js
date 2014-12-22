//Require Gulp
var gulp = require('gulp');

//Plugins
var sass = require('gulp-ruby-sass');
var concat = require('gulp-concat');
var autoprefixer = require('gulp-autoprefixer');
var minifycss = require('gulp-minify-css');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');

//Compile Sass
gulp.task('sass', function() {
  return gulp.src('public/assets/scss/*.scss')
    .pipe(sass({noCache: true, 'sourcemap=none': true }))
    .pipe(autoprefixer('last 5 version'))
    .pipe(gulp.dest('public/css'))
});

//Minify CSS for production
gulp.task('minifycss',function(){
	return gulp.src('public/css/main.css')
	.pipe(rename({suffix: '.min'}))
    .pipe(minifycss())
    .pipe(gulp.dest('public/css'));
});

//Concat & Minify JS
gulp.task('scripts', function() {

    //TODO - separate globs for vendor JS and our JS and send them to different files? 
    var js_glob = [
        'public/assets/js/*.js',
        'public/assets/vendor/jasny-bootstrap/js/offcanvas.js'
    ];

    return gulp.src(js_glob)
        .pipe(concat('main.js'))
        .pipe(gulp.dest('public/js'))
        .pipe(rename('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('public/js'));
});

//Basic watch function for dev
gulp.task('watch', function() {
    //gulp.watch('public/assetsjs/*.js', ['scripts']);
    gulp.watch('public/assets/scss/*.scss', ['sass']);
});

//Run everything
gulp.task('default',['sass','minifycss','scripts','watch']);