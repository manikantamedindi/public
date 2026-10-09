var gulp = require('gulp'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    gutil = require('gulp-util'),
    watch = require('gulp-watch'),
    notify = require('gulp-notify'),
    gsass = require('gulp-sass'),
    sass = require('gulp-ruby-sass'),
    sourcemaps = require('gulp-sourcemaps');

// SASS compile and compress
// -----------------------------------
gulp.task('sass', function() {
    gulp.src('./css/sass/style.scss')
        .pipe(gsass({
              errLogToConsole: true,
              outputStyle: "expanded"
        }).on('error', notify.onError("SCSS compilation error"))
        .on('error', gutil.log))
        .pipe(gulp.dest('./'))
        .pipe(notify("SCSS Compilation Complete"));

  
  
  
  /*sass('./css/sass/style.scss', {
            noCache: true,
            quiet: true,
            style: "compressed",
            sourcemap: false,
        })
        .on('error', notify.onError("SASS compilation error"))
        .on('error', gutil.log)
        .pipe(gulp.dest('./'))
		.pipe(notify("SCSS Compilation Complete")); */
});

// JavaScript concat and compress
// -----------------------------------
gulp.task('script', function() {
    return gulp.src(['js/jquery.min.js', 'js/menu.js', 'js/video.js', 'js/ready.js', 'js/popup.js', 'js/youtube.js', 'js/dealership_video.js'])
        .pipe(concat('script.js'))
        .pipe(uglify())
        .pipe(gulp.dest('.'));
});

// Watch Task
// -----------------------------------
gulp.task('watch', function() {
    gulp.watch('css/sass/**/*.scss', ['sass']);
    gulp.watch('js/*.js', ['script']);
});

// Put it all together
// -----------------------------------
gulp.task('default', ['watch']);
