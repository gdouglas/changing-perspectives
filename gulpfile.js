const gulp = require('gulp');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const rename = require("gulp-rename");
const babel = require('gulp-babel');
const { watch } = require('gulp');
require('js-cookie')
var nm = "./node_modules/";
function scripts() {
    return gulp.src(["./scripts/validation.js", "./scripts/app.js"])
      .pipe(concat('app.js'))
      .pipe(gulp.dest('./dist'))
      .pipe(babel({
          presets: ['@babel/preset-env']
      }))
      .pipe(rename("app.min.js"))
      .pipe(uglify())
      .pipe(gulp.dest('./dist'))
};


exports.watch = function(){
    watch('scripts/**/*', scripts);
}
exports.default = scripts;
