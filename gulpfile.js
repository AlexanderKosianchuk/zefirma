var gulp = require('gulp');  
var browserify = require('gulp-browserify');  
var concat = require('gulp-concat');  
var styl = require('gulp-styl');  
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');
var refresh = require('gulp-livereload');  
var lr = require('tiny-lr');  
var server = lr();

gulp.task('scripts', function() {  
    gulp.src(['resources/js/*.js'])
        .pipe(browserify())
        .pipe(uglify())
        .pipe(concat('all_1.min.js'))
        .pipe(gulp.dest('web/js'))
        .pipe(refresh(server))
})

gulp.task('jquery', function() {  
    gulp.src(['bower_components/jquery/dist/jquery.js'])
    	.pipe(uglify())
        .pipe(concat('jquery.min.js'))
        .pipe(gulp.dest('web/js'))
        .pipe(refresh(server))
})

gulp.task('bootstrap', function() {  
    gulp.src(['bower_components/bootstrap/dist/js/bootstrap.js'])
    	.pipe(uglify())
        .pipe(concat('bootstrap.min.js'))
        .pipe(gulp.dest('web/js'))
        .pipe(refresh(server))
})

gulp.task('sass', function () {
  gulp.src(['bower_components/**/*.css', 'resources/scss/*.scss'])
    .pipe(sass().on('error', sass.logError))
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(concat('style.css'))
    .pipe(gulp.dest('web/css'));
});

gulp.task('lr-server', function() {  
    server.listen(35729, function(err) {
        if(err) return console.log(err);
    });
})

gulp.task('watch', function() {  
    gulp.run('lr-server', 'jquery', 'bootstrap', 'scripts', 'sass');

    gulp.watch('bower_components/**/*.js', function(event) {
        gulp.run(['jquery', 'bootstrap']);
    })
        
    gulp.watch('resources/js/**/*.js', function(event) {
        gulp.run('scripts');
    })

    gulp.watch('resources/scss/**/*.scss', function(event) {
        gulp.run('sass');
    })
})