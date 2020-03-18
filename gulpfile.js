const gulp = require('gulp');
const { series } = require('gulp');
const concat = require('gulp-concat');
var concatCss = require('gulp-concat-css');
const uglify = require('gulp-uglify');
const uglifycss = require('gulp-uglifycss');
const rename = require("gulp-rename");
const babel = require('gulp-babel');
const php = require('gulp-connect-php');
var browserSync = require('browser-sync');
const autoprefixer = require('gulp-autoprefixer');

// concat and minify site js
function scripts() {
    return gulp.src(["./scripts/validation.js", "./scripts/app.js"])
        .pipe(concat('app.js'))
        .pipe(autoprefixer({
            cascade: false,
            env: [">0.2%","not dead"]
        }))
        .pipe(gulp.dest('./dist'))
        .pipe(babel({
            presets: ['@babel/preset-env']
        }))
        .pipe(rename("app.min.js"))
        .pipe(uglify())
        .pipe(gulp.dest('./dist'))
};
function styles() {
    return gulp.src(["styles/main.css"])
        .pipe(concatCss('app.css'))
        .pipe(gulp.dest('./dist'))
        .pipe(rename("app.min.css"))
        .pipe(uglifycss())
        .pipe(gulp.dest('./dist'))
};

// start php server
function connectSync() {
    php.server({
        // a standalone PHP server that browserSync connects to via proxy
        port: 8000,
        keepalive: true,
        base: "./"
    }, function (){
        browserSync({
            proxy: '127.0.0.1:8000'
        });
    });
}

// start broswersync
function browserSync(done) {
    browserSync.init({
        server: {
            baseDir: "./"
        },
        port: 8000
    });
    done();
}

// call this to reload the browser
function browserSyncReload(done) {
    browserSync.reload();
    done();
}
// tasks run when files are changed
function watchFiles() {
    gulp.watch('scripts/**/*', gulp.series(scripts, browserSyncReload));
    gulp.watch('styles/**/*.css', gulp.series(styles, browserSyncReload));
    gulp.watch('**/*.php', browserSyncReload);
}

const watch = gulp.parallel([watchFiles, connectSync]);
exports.default = watch;
exports.style = styles;