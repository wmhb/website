var gulp = require('gulp');
var browserSync = require('browser-sync');
var $ = require('gulp-load-plugins')();

gulp.task('browser-sync', function() {
    browserSync({
        server: {
            baseDir: "./"
        },
        notify: false
    });
});

gulp.task('bs-reload', function () {
    browserSync.reload();
});

gulp.task('images', function(){
    gulp.src('assets/images/**/*')
    .pipe($.cache($.imagemin({ optimizationLevel: 3, progressive: true, interlaced: true })))
    .pipe(gulp.dest('assets/images/'));
});

gulp.task('styles', function(){
    gulp.src('assets/scss/**/*.scss')
    .pipe($.plumber({
        errorHandler: function (error) {
            console.log(error.message);
            this.emit('end');
        }}))
        .pipe($.sass())
        .pipe($.autoprefixer('last 2 versions'))
        .pipe(gulp.dest('assets/css/'))
        .pipe(browserSync.reload({stream:true}))
});

gulp.task('scripts', function(){
    return gulp.src('assets/scripts/**/*.js')
    .pipe($.plumber({
        errorHandler: function (error) {
            console.log(error.message);
            this.emit('end');
        }}))
        .pipe($.jshint())
        .pipe($.jshint.reporter('default'))
        .pipe($.concat('main.js'))
        .pipe(gulp.dest('assets/js/'))
        .pipe($.rename({suffix: '.min'}))
        .pipe($.uglify())
        .pipe(gulp.dest('assets/js/'))
        .pipe(browserSync.reload({stream:true}))
});

gulp.task('default', ['browser-sync'], function(){
    gulp.watch("assets/scss/**/*.scss", ['styles']);
    gulp.watch("assets/scripts/**/*.js", ['scripts']);
    gulp.watch("*.html", ['bs-reload']);
});
