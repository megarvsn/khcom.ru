'use strict';

const {src, dest, parallel, series, watch} = require('gulp');
const file_include = require('gulp-file-include');
const plumber = require('gulp-plumber');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const cleancss = require('gulp-clean-css');
const newer = require('gulp-newer');
const imagemin = require('gulp-imagemin');
const pngquant = require('imagemin-pngquant');
const del = require('del');

// Path
const srcDir = 'assets/';
const appDir = './';

// Сборка script.js
function customJS() {
    return src(srcDir + 'js/custom.js')
        .pipe(plumber())
        .pipe(file_include({
            prefix: '@@',
            basepath: '@file'
        }))
        .pipe(uglify()) // Сжимаем JavaScript
        .pipe(rename("custom.min.js"))
        .pipe(dest(appDir + 'js/'));
}

// Сборка custom.scss
function customCSS() {
    return src(srcDir + 'sass/custom.scss')
        .pipe(plumber())
        .pipe(sass({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(cleancss({level: {1: {specialComments: 0}}/* , format: 'beautify' */}))
        .pipe(rename("custom.css"))
        .pipe(dest(appDir + 'css/'));
}

// Оптимизация изображений
function images() {
    return src(srcDir + 'img/**/*')
        .pipe(newer(srcDir + 'img/**/*')) // Запускает таски только для изменившихся файлов
        .pipe(imagemin([
            imagemin.gifsicle({interlaced: true}),
            imagemin.mozjpeg({quality: 75, progressive: true}),
            imagemin.optipng({optimizationLevel: 5}),
            imagemin.svgo({
                plugins: [
                    {removeViewBox: true},
                    {cleanupIDs: false}
                ]
            }),
            pngquant()
        ]))
        .pipe(dest(appDir + 'img/'));
}

// Очистка папки с изображенийми
function cleanImages() {
    return del(appDir + 'img/**/*', {force: true})
}

function startwatch() {
    watch(srcDir + 'js/custom.js', customJS);
    watch(srcDir + 'sass/**/*',customCSS);
    watch(srcDir + 'img/**/*', images);
}

exports.customJS = customJS;
exports.customCSS = customCSS;
exports.images = images;
exports.cleanImages = cleanImages;

exports.default = parallel(customCSS, customJS, startwatch);