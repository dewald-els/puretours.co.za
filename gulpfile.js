var ENV = 'dev';
var gulp = require('gulp');
var imports = require('gulp-imports');
var uglify = require('gulp-uglify');
var babel = require('gulp-babel');
var sass = require('gulp-sass');
var sequence = require('run-sequence');

gulp.task('compile-assets', function () {
    if (ENV == 'dev') {
        gulp.src('assets/scss/global.scss')
            .pipe(sass())
            .pipe(gulp.dest('compiled-assets/css'));

        gulp.src('assets/scss/cms.scss')
            .pipe(sass())
            .pipe(gulp.dest('compiled-assets/css'));

        gulp.src('assets/scss/bootstrap.scss')
            .pipe(sass())
            .pipe(gulp.dest('compiled-assets/css'));

        gulp.src('assets/js/app.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(gulp.dest('compiled-assets/js'));

        return gulp.src('assets/js/controllers/controllers.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(gulp.dest('compiled-assets/js'));
    }
    else {
        gulp.src('assets/scss/main.scss')
            .pipe(sass({outputStyle: 'compressed'}))
            .pipe(gulp.dest('compiled-assets/css'));

        gulp.src('assets/scss/cms.scss')
            .pipe(sass({outputStyle: 'compressed'}))
            .pipe(gulp.dest('compiled-assets/css'));

        gulp.src('assets/scss/bootstrap.scss')
            .pipe(sass({outputStyle: 'compressed'}))
            .pipe(gulp.dest('compiled-assets/css'));

        gulp.src('assets/js/app.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(uglify())
            .pipe(gulp.dest('compiled-assets/js'));

        return gulp.src('assets/js/controllers/controllers.js')
            .pipe(imports())
            .pipe(babel({presets: 'es2015'}))
            .pipe(uglify())
            .pipe(gulp.dest('compiled-assets/js'));
    }
});

gulp.task('copy', function () {
    // Base files
    gulp.src(['.htaccess', 'index.php', 'license.txt']).pipe(gulp.dest('dist'));
    // Application files
    gulp.src('application/**/*').pipe(gulp.dest('dist/application'));
    // System files
    gulp.src('system/**/*').pipe(gulp.dest('dist/system'));
    // Assets
    gulp.src('compiled-assets/**/*').pipe(gulp.dest('dist/assets'));
    // Libs - JS
    gulp.src([
        'assets/bower-components/moment/min/moment.min.js',
        'assets/bower-components/angular/angular.min.js',
        'assets/bower-components/angular-animate/angular-animate.min.js'
    ]).pipe(gulp.dest('dist/assets/libs/'));
    // Libs - Font-Awesome
    gulp.src([
        'assets/bower-components/font-awesome/css/font-awesome.min.css'
    ]).pipe(gulp.dest('dist/assets/css/'));
    // Font awesome fonts
    return gulp.src([
        'assets/bower-components/font-awesome/fonts/*'
    ]).pipe(gulp.dest('dist/assets/fonts'));
});

gulp.task('watch', function () {
    gulp.watch('index.php', ['recompile']);
    gulp.watch('application/config/*', ['recompile']);
    gulp.watch('application/controllers/**/*', ['recompile']);
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