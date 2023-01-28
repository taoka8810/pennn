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
  return del("./pennn_theme/**");
};

// phpのコピー
const copyPHP = () => {
  return src("./src/php/**/*.php").pipe(dest("./pennn_theme"));
};

// style.css(テーマの設定ファイル)をコピー
const copyFile = () => {
  return src("./src/style.css").pipe(dest("./pennn_theme"));
};

// Scssのコンパイル
const compileScss = () => {
  return src("./src/scss/index.scss")
    .pipe(plumber(notify.onError("Error: <%= error.message %>")))
    .pipe(sourcemaps.init())
    .pipe(sass({ outputStyle: "compressed" }))
    .pipe(sourcemaps.write())
    .pipe(rename("style.min.css"))
    .pipe(dest("./pennn_theme/css"));
};

// JSのコピー
const bundleJS = () => {
  return src("./src/js/**/*.js")
    .pipe(plumber(notify.onError("Error: <%= error.message %>")))
    .pipe(uglify())
    .pipe(dest("./pennn_theme/js"));
};

// 画像のコピー
const copyImage = () => {
  return src("./src/img/**").pipe(dest("./pennn_theme/img"));
};

const copyRocket = () => {
  return src("./src/rocket/**/*").pipe(dest("./pennn_theme/rocket"));
};

// ライブラリのコピー
const copyLibrary = () => {
  return src("./src/lib/**").pipe(dest("./pennn_theme/lib"));
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
  watch("./src/rocket/**", series(copyRocket, browserReload));
  watch("./src/lib/**", series(copyLibrary, browserReload));
};

exports.default = series(
  deleteFile,
  compileScss,
  copyPHP,
  copyFile,
  bundleJS,
  copyImage,
  copyLibrary,
  copyRocket,
  watchFile
);

exports.build = series(
  deleteFile,
  compileScss,
  copyPHP,
  copyFile,
  bundleJS,
  copyImage,
  copyRocket,
  copyLibrary
);
