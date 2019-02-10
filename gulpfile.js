const { src, dest } = require('gulp');
const imagemin = require('gulp-imagemin');

function buildImg() {

    return src('assets/img/**/*')
        .pipe(imagemin())
        .pipe(dest('assets/img'));
}

exports.default = buildImg;