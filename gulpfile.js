var gulp          = require("gulp");
var browserSync   = require('browser-sync').create();
var reload        = browserSync.reload;

gulp.task('default', ['server'], function() {
  gulp.watch('./*', ['reload']);
});

gulp.task('server', function() {
  browserSync.init({
      debugInfo: true,
      open: false,
      host: "www.practice.local.lcl"
  });
});

gulp.task('reload', function() {
  return browserSync.reload();
});
