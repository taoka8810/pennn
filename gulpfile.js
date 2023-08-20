const { src, dest, watch, series, parallel } = require("gulp");
const del = require("del");
const sass = require("gulp-dart-sass");
const plumber = require("gulp-plumber");
const notify = require("gulp-notify");
const sourcemaps = require("gulp-sourcemaps");
const rename = require("gulp-rename");
const browserSync = require("browser-sync");

// ファイル削除
const deleteFile = () => {
  return del("./pennn_theme/**");
};

// ファイルのコピー
const copyFiles = () => {
  // コピー対象から除外するファイル
  const excludeFiles = ["!./src/styles/**", "!./src/scripts/**"];
  return src(["./src/**", ...excludeFiles]).pipe(dest("./pennn_theme"));
};

// Scssのコンパイル
const compileScss = () => {
  return src("./src/styles/index.scss")
    .pipe(plumber(notify.onError("Error: <%= error.message %>")))
    .pipe(sourcemaps.init())
    .pipe(sass({ outputStyle: "compressed" }))
    .pipe(sourcemaps.write())
    .pipe(rename("style.min.css"))
    .pipe(dest("./pennn_theme/css"));
};

// ブラウザの初期設定
const browserSyncFunc = (done) => {
  browserSync.init({
    port: 3000,
    open: true,
    notify: false,
    reloadOnRestart: true,
    proxy: "http://localhost:8810",
  });
  done();
};

// ブラウザ自動リロード
const browserReload = (done) => {
  browserSync.reload();
  done();
};

// ファイルの監視
const watchFile = () => {
  watch("./src/**", series(copyFiles, browserReload));
  watch("./src/styles/**/*.scss", series(compileScss, browserReload));
};

exports.default = series(
  deleteFile,
  copyFiles,
  compileScss,
  parallel(watchFile, browserSyncFunc)
);

exports.build = series(deleteFile, copyFiles, compileScss);
