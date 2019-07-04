var gulp = require('gulp');
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
        .pipe(sass())
        .pipe(gulp.dest('dist/css/'))
        .pipe(browserSync.reload({
            stream: true
        }))
});




gulp.task('browserSync',  function() {
    browserSync.init({
        server: {
            baseDir: 'dist'
        }
    })
});

gulp.task('watch', function(){
    gulp.watch('app/**/*.html', gulp.series('html'))
    gulp.watch('app/scss/**/*.scss', gulp.series('sass'));
});

gulp.task('build', gulp.parallel('sass','html'));





gulp.task('default', gulp.series(
    gulp.parallel('watch', 'build', 'browserSync')
));

