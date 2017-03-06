// var
var gulp = require('gulp'),
    concat = require('gulp-concat'),
    sass = require('gulp-sass'),
    minifyCSS = require('gulp-minify-css'),
    rename = require("gulp-rename"),
    notify = require("gulp-notify"),
    autoprefixer = require('gulp-autoprefixer'),
    useref = require('gulp-useref'),
    sourcemaps = require('gulp-sourcemaps');

// css
gulp.task('css', function() {
    return gulp.src('sass/main.scss')
        .pipe(autoprefixer('last 5 versions'))
        .pipe(sass().on('error', sass.logError))
        .pipe(rename('style.css'))
        .pipe(gulp.dest('.'))
        .pipe(notify("Done!"))
});

gulp.task('vendor', function() {
    return gulp.src('sass/vendor.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(minifyCSS())
        .pipe(rename('vendor.css'))
        .pipe(gulp.dest('css/'))
        .pipe(notify("Done!"))
});

// js
gulp.task('vendorJS', function() {
    return gulp.src([
        'libs/jquery/dist/jquery.min.js',
        'libs/bootstrap-sass/assets/javascripts/bootstrap.min.js',
        'libs/slick-carousel/slick/slick.min.js'
    ])
        .pipe(concat('vendor.js'))
        .pipe(gulp.dest('js/'))
        .pipe(notify("Done!"))
});

// watch
gulp.task('watch', function() {
    gulp.watch('sass/**/*.scss', ['css']);
    gulp.watch('sass/vendor.scss', ['vendor']);
    gulp.watch('lesson19/*.php');
    gulp.watch('lesson19/js/*.js');
});

// default
gulp.task('default', ['css', 'vendor', 'watch']);

