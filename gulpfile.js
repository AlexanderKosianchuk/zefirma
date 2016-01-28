var gulp = require('gulp');  
var browserify = require('gulp-browserify');  
var concat = require('gulp-concat');  
var styl = require('gulp-styl');  
var sass = require('gulp-sass');
var refresh = require('gulp-livereload');  
var lr = require('tiny-lr');  
var server = lr();

gulp.task('scripts', function() {  
    gulp.src(['resources/**/*.js'])
        .pipe(browserify())
        .pipe(concat('all.js'))
        .pipe(gulp.dest('build'))
        .pipe(refresh(server))
})

gulp.task('sass', function () {
  gulp.src('resources/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(gulp.dest('web/css'));
});

gulp.task('lr-server', function() {  
    server.listen(35729, function(err) {
        if(err) return console.log(err);
    });
})

gulp.task('default', function() {  
    gulp.run('lr-server', 'scripts', 'sass');

    gulp.watch('resources/js/**/*.js', function(event) {
        gulp.run('scripts');
    })

    gulp.watch('resources/scss/**/*.scss', function(event) {
        gulp.run('sass');
    })
})