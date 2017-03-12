var ENV = 'dev';
var gulp = require('gulp');
var imports = require('gulp-imports');
var uglify = require('gulp-uglify');
var babel = require('gulp-babel');
var sass = require('gulp-sass');
var sequence = require('run-sequence');


gulp.task('compile-scss-folder', function () {
    if (ENV == 'dev') {
        return gulp.src('assets/scss/*.scss')
            .pipe(sass())
            .pipe(gulp.dest('compiled-assets/css'));
    }
    else {
        return gulp.src('assets/scss/*.scss')
            .pipe(sass({outputStyle: 'compressed'}))
            .pipe(gulp.dest('compiled-assets/css'));
    }
});

gulp.task('compile-app', function () {
    if (ENV == 'dev') {
        return gulp.src('assets/js/app.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(gulp.dest('compiled-assets/js'));
    }
    else {
        return gulp.src('assets/js/app.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(uglify())
            .pipe(gulp.dest('compiled-assets/js'));
    }
});

gulp.task('compile-cms-controllers', function () {
    if (ENV == 'dev') {
        return gulp.src('assets/js/controllers/cms-controllers.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(gulp.dest('compiled-assets/js'));
    }
    else {
        return gulp.src('assets/js/controllers/cms-controllers.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(uglify())
            .pipe(gulp.dest('compiled-assets/js'));
    }
});

gulp.task('compile-controllers', function () {
    if (ENV == 'dev') {
        return gulp.src('assets/js/controllers/controllers.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(gulp.dest('compiled-assets/js'));
    }
    else {
        return gulp.src('assets/js/controllers/controllers.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(uglify())
            .pipe(gulp.dest('compiled-assets/js'));
    }
});

gulp.task('compile-services', function () {
    if (ENV == 'dev') {
        return gulp.src('assets/js/services/services.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(gulp.dest('compiled-assets/js'));
    }
    else {
        return gulp.src('assets/js/services/services.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(uglify())
            .pipe(gulp.dest('compiled-assets/js'));
    }
});

gulp.task('compile-jquery', function () {
    if (ENV == 'dev') {
        return gulp.src('assets/js/jquery-scripts/cms.jquery.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(gulp.dest('compiled-assets/js'));
    }
    else {
        return gulp.src('assets/js/jquery-scripts/cms.jquery.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(uglify())
            .pipe(gulp.dest('compiled-assets/js'));
    }
});

gulp.task('copy-system-fonts', function () {
    return gulp.src('assets/fonts/*')
        .pipe(gulp.dest('compiled-assets/fonts'));
});

gulp.task('compile-assets', function () {
    return sequence(
        'compile-scss-folder',
        'copy-system-fonts',
        'compile-app',
        'compile-controllers',
        'compile-cms-controllers',
        'compile-services',
        'compile-jquery'
    );
});

gulp.task('copy-base', function () {
    return gulp.src(['.htaccess', 'index.php', 'license.txt']).pipe(gulp.dest('dist'));
});

gulp.task('copy-application', function () {
    return gulp.src('application/**/*').pipe(gulp.dest('dist/application'));
});

gulp.task('copy-system', function () {
    return gulp.src('system/**/*').pipe(gulp.dest('dist/system'));
});

gulp.task('copy-assets', function () {
    return gulp.src('compiled-assets/**/*').pipe(gulp.dest('dist/assets'));
});

gulp.task('copy-css', function () {
    return gulp.src([
        'assets/bower-components/font-awesome/css/font-awesome.min.css'
    ]).pipe(gulp.dest('dist/assets/css/'));
});

gulp.task('copy-plugins', function () {
    return gulp.src(['assets/plugins/**/*'])
        .pipe(gulp.dest('dist/assets/plugins'))
});

gulp.task('copy-libs', function () {
    return gulp.src([
        'assets/bower-components/jquery/dist/jquery.min.js',
        'assets/bower-components/bootstrap/dist/js/bootstrap.min.js',
        'assets/bower-components/moment/min/moment.min.js',
        'assets/bower-components/angular/angular.min.js',
        'assets/bower-components/angular-animate/angular-animate.min.js'
    ]).pipe(gulp.dest('dist/assets/libs/'));
});

gulp.task('copy-fa-fonts', function () {
    return gulp.src([
        'assets/bower-components/font-awesome/fonts/*'
    ]).pipe(gulp.dest('dist/assets/fonts'))
});

gulp.task('copy-img', function () {
    return gulp.src([
        'assets/img/**/*'
    ]).pipe(gulp.dest('dist/assets/img'));
});

gulp.task('copy', function () {
    return sequence(
        'copy-base',
        'copy-application',
        'copy-system',
        'copy-assets',
        'copy-css',
        'copy-libs',
        'copy-plugins',
        'copy-fa-fonts',
        'copy-img'
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
