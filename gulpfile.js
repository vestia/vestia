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

//Concat & Minify Vendor JS
gulp.task('vendor_js', function() {

    var vendor_js = [
        'public/assets/vendor/jquery/dist/jquery.js', // jQuery
        'public/assets/vendor/modernizr/modernizr.js',  // Modernizr
        'public/assets/vendor/jquery-bridget/jquery-bridget.js',  // Bridget
        'public/assets/vendor/bootstrap/dist/js/bootstrap.js', // Bootstrap
        'public/assets/vendor/jasny-bootstrap/js/offcanvas.js', // Jasny-Bootstrap Off-Canvas Component
        'public/assets/vendor/seiyria-bootstrap-slider/js/bootstrap-slider.js'  // Seiyria Slider Component
    ];

    return gulp.src(vendor_js)
        .pipe(concat('vendor.js'))
        .pipe(gulp.dest('public/js'))
        .pipe(rename('vendor.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('public/js'));
});

//Concat & Minify Our Own JS for production
gulp.task('js', function() {

    var js = [
        'public/assets/js/*.js',
    ];

    return gulp.src(js)
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