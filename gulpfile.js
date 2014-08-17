// Include gulp
var gulp = require('gulp'); 

// Include Our Plugins
var jshint = require('gulp-jshint');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var clean = require('gulp-clean');
var sourcemaps = require('gulp-sourcemaps');

var jsFiles = [
    'public/js/app.js',
    'public/js/filters.js',
    'public/js/services.js',
    'public/js/controllers.js',
    'public/js/directives.js',
    'public/js/modules/**/*.js'    
];

gulp.task('clean', function() {
    return gulp.src(['public/js/all.js'], {read: false})
        .pipe(clean({force: true}));
});

gulp.task('lint', function() {
    return gulp.src(jsFiles)
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

gulp.task('minify', ['lint'], function() {
    return gulp.src(jsFiles)
        .pipe(sourcemaps.init())
        .pipe(uglify())
        .pipe(concat('all.min.js'))
        .pipe(gulp.dest('public/js'));
});

gulp.task('watch', function() {
    gulp.watch(jsFiles, ['minify']);
});

// Default Task
gulp.task('default', ['minify']);