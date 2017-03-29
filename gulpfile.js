const ENV = 'dev';
let gulp = require('gulp');
let imports = require('gulp-imports');
let uglify = require('gulp-uglify');
let babel = require('gulp-babel');
let sass = require('gulp-sass');
let sequence = require('run-sequence');


gulp.task('compile-scss-folder', function () {
    if (ENV == 'dev') {
        return gulp.src('assets/scss/*.scss')
            .pipe(sass())
            .pipe(gulp.dest('assets/css'));
    }
    else {
        return gulp.src('assets/scss/*.scss')
            .pipe(sass({outputStyle: 'compressed'}))
            .pipe(gulp.dest('assets/css'));
    }
});

gulp.task('compile-app', function () {
    if (ENV == 'dev') {
        return gulp.src('assets/js-src/app.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(gulp.dest('assets/js'));
    }
    else {
        return gulp.src('assets/js-src/app.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(uglify())
            .pipe(gulp.dest('assets/js'));
    }
});

gulp.task('compile-controllers', function () {
    if (ENV == 'dev') {
        return gulp.src('assets/js-src/controllers/controllers.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(gulp.dest('assets/js'));
    }
    else {
        return gulp.src('assets/js-src/controllers/controllers.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(uglify())
            .pipe(gulp.dest('assets/js'));
    }
});

gulp.task('compile-services', function () {
    if (ENV == 'dev') {
        return gulp.src('assets/js-src/services/services.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(gulp.dest('assets/js'));
    }
    else {
        return gulp.src('assets/js-src/services/services.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(uglify())
            .pipe(gulp.dest('assets/js'));
    }
});

gulp.task('compile-jquery', function () {
    if (ENV == 'dev') {
        return gulp.src('assets/js-src/jquery-scripts/pt.jquery.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(gulp.dest('assets/js'));
    }
    else {
        return gulp.src('assets/js-src/jquery-scripts/pt.jquery.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(uglify())
            .pipe(gulp.dest('assets/js'));
    }
});

gulp.task('compile-modules-js', function () {
    if (ENV == 'dev') {
        return gulp.src('assets/js-src/modules.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(gulp.dest('assets/js'));
    }
    else {
        return gulp.src('assets/js-src/modules.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(uglify())
            .pipe(gulp.dest('assets/js'));
    }
});

gulp.task('compile-assets', function () {
    return sequence(
        'compile-scss-folder',
        'compile-app',
        'compile-controllers',
        'compile-services',
        'compile-jquery',
        'compile-modules-js'
    );
});

gulp.task('copy-libs', function () {
    return gulp.src([
        'assets/bower-components/jquery/dist/jquery.min.js',
        'assets/bower-components/bootstrap/dist/js/bootstrap.min.js',
        'assets/bower-components/moment/min/moment.min.js',
        'assets/bower-components/angular/angular.min.js',
        'assets/bower-components/angular-animate/angular-animate.min.js'
    ]).pipe(gulp.dest('assets/libs/'));
});

gulp.task('copy-fa', function () {
    return gulp.src([
        'assets/bower-components/font-awesome/css/font-awesome.min.css'
    ]).pipe(gulp.dest('assets/css'))
});

gulp.task('copy-fa-fonts', function () {
    return gulp.src([
        'assets/bower-components/font-awesome/fonts/*'
    ]).pipe(gulp.dest('assets/fonts'))
});

gulp.task('copy', function () {
    return sequence(
        'copy-libs',
        'copy-fa',
        'copy-fa-fonts'
    );
});

gulp.task('watch', function () {
    gulp.watch('index.php', ['recompile']);
    gulp.watch('application/config/*', ['recompile']);
    gulp.watch('application/controllers/**/*', ['recompile']);
    gulp.watch('application/classes/**/*', ['recompile']);
    gulp.watch('application/libraries/**/*', ['recompile']);
    gulp.watch('application/models/**/*', ['recompile']);
    gulp.watch('application/core/*', ['recompile']);
    gulp.watch('application/views/**/*', ['recompile']);
    gulp.watch('assets/scss/*.scss', ['recompile']);
    return gulp.watch('assets/js/**/*', ['recompile']);
});

gulp.task('recompile', function () {
    return sequence(
        'compile-assets',
        'copy'
    );
});

gulp.task('develop', function () {
    return sequence(
        'build',
        'watch'
    );
});

gulp.task('build', function () {
    return sequence(
        'compile-assets',
        'copy'
    );
});

gulp.task('default', function () {
});
