const { src, dest, watch, series, parallel } = require("gulp");
const del = require("del");
const sass = require("gulp-dart-sass");
const plumber = require("gulp-plumber");
const notify = require("gulp-notify");
const sourcemaps = require("gulp-sourcemaps");
const rename = require("gulp-rename");
const browserSync = require("browser-sync");
const concat = require("gulp-concat");
const uglify = require("gulp-uglify");

// ファイル削除を検知
const deleteFile = () => {
  return del("./penn_theme/**");
};

// phpのコピー
const copyPHP = () => {
  return src("./src/php/**/*.php").pipe(dest("./penn_theme"));
};

// style.css(テーマの設定ファイル)をコピー
const copyFile = () => {
  return src("./src/style.css").pipe(dest("./penn_theme"));
};

// Scssのコンパイル
const compileScss = () => {
  return src("./src/scss/index.scss")
    .pipe(plumber(notify.onError("Error: <%= error.message %>")))
    .pipe(sourcemaps.init())
    .pipe(sass({ outputStyle: "compressed" }))
    .pipe(sourcemaps.write())
    .pipe(rename("style.min.css"))
    .pipe(dest("./penn_theme/css"));
};

// JSのバンドル
const bundleJS = () => {
  return src("./src/js/**/*.js")
    .pipe(plumber(notify.onError("Error: <%= error.message %>")))
    .pipe(concat("index.js"))
    .pipe(uglify())
    .pipe(dest("./penn_theme/js"));
};

// 画像のコピー
const copyImage = () => {
  return src("./src/img/**").pipe(dest("./penn_theme/img"));
};

// ブラウザ初期設定
const browserInitialize = (done) => {
  browserSync.init({
    proxy: "penn.local",
    notify: false,
    open: "local",
  });
  done();
};

// ブラウザ自動リロード
const browserReload = (done) => {
  browserSync.reload();
  done();
};

const watchFile = () => {
  watch("./src/scss/**/*.scss", series(compileScss, browserReload));
  watch("./src/php/**/*.php", series(copyPHP, browserReload));
  watch("./src/style.css", series(copyFile, browserReload));
  watch("./src/js/**/*.js", series(bundleJS, browserReload));
  watch("./src/img/**", series(copyImage, browserReload));
};

exports.default = series(
  deleteFile,
  compileScss,
  copyPHP,
  copyFile,
  bundleJS,
  copyImage,
  parallel(watchFile, browserInitialize)
);
