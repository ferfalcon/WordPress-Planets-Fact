const gulp = require('gulp');
const browserSync = require('browser-sync').create();

function serve() {
  browserSync.init({
    proxy: "http://wordpress-planets-project.local", // Your Local site URL
    notify: false,
    open: false
  });

  gulp.watch("**/*.php").on("change", browserSync.reload);
  gulp.watch("assets/css/**/*.css").on("change", browserSync.reload);
  gulp.watch("assets/js/**/*.js").on("change", browserSync.reload);
}

exports.default = serve;
