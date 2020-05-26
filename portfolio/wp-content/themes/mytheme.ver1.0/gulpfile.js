const gulp = require('gulp');
const sass = require('gulp-sass');
const plumber = require('gulp-plumber'); //watch中にエラー防止
const notify = require('gulp-notify'); //エラーを通知

//ディレクトリ
const SCSS_SRC = 'src/sass/*.scss'; // scss ファイルの場所
const CSS_DEST = 'assets/css'; // 出力場所

//scss
gulp.task("sass", () => {
  return gulp.src(SCSS_SRC)
    .pipe(plumber({ errorHandler: notify.onError("Error") }))
    .pipe(sass({ outputStyle: 'expanded', errLogToConsole: false }))
    .pipe(gulp.dest(CSS_DEST))
    .pipe(notify({
      title: 'Sassをコンパイルしました。',
      message: new Date(),
      sound: 'Tink',
    }));
});

//watch
gulp.task('watch', function() {
  gulp.watch(SCSS_SRC, ['sass']);
});

gulp.task('default', ['watch']);