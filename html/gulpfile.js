var gulp = require('gulp');
var sourcemaps = require('gulp-sourcemaps');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');
var rigger = require('gulp-rigger');


gulp.task('html', function () {
    return gulp.src('app/**/*.html')
        .pipe(rigger())
        .pipe(gulp.dest('dist/'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

gulp.task('sass', function(){
    return gulp.src('app/scss/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(gulp.dest('dist/css/'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

gulp.task('js', function(){
    return gulp.src('app/js/**/*.js')
        .pipe(gulp.dest('dist/js/'))
});

gulp.task('img', function(){
    return gulp.src('app/img/**/*.*')
        .pipe(gulp.dest('dist/img/'))
});

gulp.task('browserSync',  function() {
    browserSync.init({
        server: {
            baseDir: 'dist'
        }
    })
});

gulp.task('watch', function(){
    gulp.watch('app/**/*.js', gulp.series('js'))
    gulp.watch('app/**/*.*', gulp.series('img'))
    gulp.watch('app/**/*.html', gulp.series('html'))
    gulp.watch('app/scss/**/*.scss', gulp.series('sass'));
});

gulp.task('build', gulp.parallel('sass','html','js'));



gulp.task('default', gulp.series(
    gulp.parallel('watch', 'build', 'browserSync')
));

