require("es6-promise").polyfill();
var gulp = require("gulp"),
    sass = require("gulp-sass"),
    autoprefixer = require("gulp-autoprefixer"),
	rename = require("gulp-rename"),
    plumber = require("gulp-plumber"),
    gutil = require("gulp-util"),
    concat = require("gulp-concat"),
    uglify = require("gulp-uglify"),
    imagemin = require("gulp-imagemin"),
    browserSync = require("browser-sync").create();

var reload = browserSync.reload;

var onError = function(err) {
  console.log("An error occured: ", gutil.colors.magenta(err.message));
  gutil.beep();
  this.emit("end");
}

gulp.task("sass", function() {
  return gulp.src("./sass/**/*.scss")
  .pipe(plumber({errorHandler: onError}))
  .pipe(sass())
  .pipe(autoprefixer())
  .pipe(gulp.dest("./"))

});

gulp.task("js", function() {
  return gulp.src(["./js/*.js"])
  .pipe(concat("app.js"))
  .pipe(rename({suffix: ".min"}))
  .pipe(uglify())
  .pipe(gulp.dest("./js"));
});

gulp.task("images", function() {
  return gulp.src("images/src/*")
  .pipe(plumber({errorHandler: onError}))
  .pipe(imagemin({optimizationLevel: 7, progessive: true}))
  .pipe(gulp.dest("images/dest"));

});

gulp.task("watch", function() {
  browserSync.init({
    files: ["./**/*.php"],
    proxy: "http://localhost/wplapizzeria/"
  });
  gulp.watch("./sass/**/*.scss", ["sass", reload]);
  gulp.watch("./js/*.js", ["js", reload]);
  gulp.watch("./images/src/*", ["images", reload]);
});

// default task
gulp.task("default", ["sass", "js", "images", "watch"]);
