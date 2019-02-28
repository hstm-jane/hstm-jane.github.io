/*  =============================================================================
    Notes
    =============================================================================

    // Started with: http://markgoodyear.com/2014/01/getting-started-with-gulp/
    // Noodling on this to handle looping through all apps: https://viget.com/extend/gulp-browserify-starter-faq

    /*

    prototypes
    -- hlc-student
    ---- content
    ------ images
    ------ fonts
    ------ styles
    ---- scripts
    -- shared
    ---- patterns

    source
    -- hlc-student
    ---- content
    ------ images
    ------ fonts
    ------ styles
    -------- __config.less
    -------- app.less
    -------- bootstrap.less
    -------- plugins.less
    -------- ie8.less
    -------- prototype.less
    ----------- all the less folders and files
    ---- scripts
    -- shared
    ---- content
    ------ images
    ------ fonts
    ------ styles
    -------- app.less
    -------- bootstrap.less
    -------- plugins.less
    ----------- all the less folders and files
    ---- scripts


    /*


/*  =============================================================================
    Plugins
    ========================================================================== */

var gulp = require('gulp');
var less = require('gulp-less');
var minifycss = require('gulp-minify-css');
var livereload = require('gulp-livereload');
var del = require('del');


/*  =============================================================================
    Paths
    ========================================================================== */

var student = 'prototypes/hlc-student';
var platform = 'prototypes/platform';
var bright = 'prototypes/bright-ideas';
var assessRx = 'prototypes/assess-rx';
var ventura = 'prototypes/ventura';


/*  =============================================================================
    Student App Tasks
    ========================================================================== */

gulp.task('student_styles', function () {
    del([student + '/content/styles/*']);
    return gulp.src('source/hlc-student/content/styles/healthstream.*.less')
        .pipe(less())
        .pipe(minifycss())
        .pipe(gulp.dest(student + '/content/styles'));
});

gulp.task('student_fonts', function () {
    del([student + '/content/fonts/*']);
    return gulp.src(['source/shared/content/fonts/**/', 'source/hlc-student/content/fonts/**/*'])
        .pipe(gulp.dest(student + '/content/fonts'));
});

gulp.task('student_images', function () {
    del([student + '/content/images/*']);
    return gulp.src(['source/shared/content/images/**/*', 'source/hlc-student/content/images/**/*'])
        .pipe(gulp.dest(student + '/content/images'));
});

gulp.task('student_scripts', function () {
    del([student + '/scripts/*']);
    return gulp.src(['source/shared/scripts/**/*', 'source/hlc-student/scripts/**/*'])
        .pipe(gulp.dest(student + '/scripts'));
});

gulp.task('student', ['student_styles', 'student_fonts', 'student_images', 'student_scripts']);


/*  =============================================================================
    Platform App Tasks
    ========================================================================== */

gulp.task('platform_styles', function () {
    del([platform + '/content/styles/*']);
    return gulp.src('source/platform/content/styles/healthstream.*.less')
        .pipe(less())
        .pipe(minifycss())
        .pipe(gulp.dest(platform + '/content/styles'));
});

gulp.task('platform_fonts', function () {
    del([platform + '/content/fonts/*']);
    return gulp.src(['source/shared/content/fonts/**/*', 'source/platform/content/fonts/**/*'])
        .pipe(gulp.dest(platform + '/content/fonts'));
});

gulp.task('platform_images', function () {
    del([platform + '/content/images/*']);
    return gulp.src(['source/shared/content/images/**/*', 'source/platform/content/images/**/*'])
        .pipe(gulp.dest(platform + '/content/images'));
});

gulp.task('platform_scripts', function () {
    del([platform + '/scripts/*']);
    return gulp.src(['source/shared/scripts/**/*', 'source/platform/scripts/**/*'])
        .pipe(gulp.dest(platform + '/scripts'))
});

gulp.task('platform', ['platform_styles', 'platform_fonts', 'platform_images', 'platform_scripts']);


/*  =============================================================================
    Bright App Tasks
    ========================================================================== */

gulp.task('bright_styles', function () {
    del([bright + '/content/styles/*']);
    return gulp.src('source/bright-ideas/content/styles/healthstream.*.less')
        .pipe(less())
        .pipe(minifycss())
        .pipe(gulp.dest(bright + '/content/styles'));
});

gulp.task('bright_fonts', function () {
    del([bright + '/content/fonts/*']);
    return gulp.src(['source/shared/content/fonts/**/*', 'source/bright-ideas/content/fonts/**/*'])
        .pipe(gulp.dest(bright + '/content/fonts'));
});

gulp.task('bright_images', function () {
    del([bright + '/content/images/*']);
    return gulp.src(['source/shared/content/images/**/*', 'source/bright-ideas/content/images/**/*'])
        .pipe(gulp.dest(bright + '/content/images'));
});

gulp.task('bright_scripts', function () {
    del([bright + '/scripts/*']);
    return gulp.src(['source/shared/scripts/**/*', 'source/bright-ideas/scripts/**/*'])
        .pipe(gulp.dest(bright + '/scripts'))
});

gulp.task('bright', ['bright_styles', 'bright_fonts', 'bright_images', 'bright_scripts']);


/*  =============================================================================
    AssesRx App Tasks
    ========================================================================== */

gulp.task('assessRx_styles', function () {
    del([assessRx + '/content/styles/*']);
    return gulp.src('source/assess-rx/content/styles/assessrx.*.less')
        .pipe(less())
        .pipe(minifycss())
        .pipe(gulp.dest(assessRx + '/content/styles'));
});

gulp.task('assessRx_fonts', function () {
    del([assessRx + '/content/fonts/*']);
    return gulp.src(['source/shared/content/fonts/**/*', 'source/assess-rx/content/fonts/**/*'])
        .pipe(gulp.dest(assessRx + '/content/fonts'));
});

gulp.task('assessRx_images', function () {
    del([assessRx + '/content/images/*']);
    return gulp.src(['source/shared/content/images/**/*', 'source/assess-rx/content/images/**/*'])
        .pipe(gulp.dest(assessRx + '/content/images'));
});

gulp.task('assessRx_scripts', function () {
    del([assessRx + '/scripts/*']);
    return gulp.src(['source/shared/scripts/**/*', 'source/assess-rx/scripts/**/*'])
        .pipe(gulp.dest(assessRx + '/scripts'))
});

gulp.task('assessRx', ['assessRx_styles', 'assessRx_fonts', 'assessRx_images', 'assessRx_scripts']);

/*  =============================================================================
    Ventura App Tasks
    ========================================================================== */

    gulp.task('ventura_styles', function () {
        del([ventura + '/content/styles/*']);
        return gulp.src('source/ventura/content/styles/healthstream.*.less')
            .pipe(less())
            .pipe(minifycss())
            .pipe(gulp.dest(ventura + '/content/styles'));
    });
    
    gulp.task('ventura_fonts', function () {
        del([ventura + '/content/fonts/*']);
        return gulp.src(['source/shared/content/fonts/**/*', 'source/ventura/content/fonts/**/*'])
            .pipe(gulp.dest(ventura + '/content/fonts'));
    });
    
    gulp.task('ventura_images', function () {
        del([ventura + '/content/images/*']);
        return gulp.src(['source/shared/content/images/**/*', 'source/ventura/content/images/**/*'])
            .pipe(gulp.dest(ventura + '/content/images'));
    });
    
    gulp.task('ventura_scripts', function () {
        del([ventura + '/scripts/*']);
        return gulp.src(['source/shared/scripts/**/*', 'source/ventura/scripts/**/*'])
            .pipe(gulp.dest(ventura + '/scripts'))
    });
    
    gulp.task('ventura', ['ventura_styles', 'ventura_fonts', 'ventura_images', 'ventura_scripts']);



/*  =============================================================================
    Watch for File Changes
    ========================================================================== */

gulp.task('watch', function () {

    // Watch shared files
    gulp.watch(['source/shared/content/styles/**'], ['student_styles', 'platform_styles', 'bright_styles']);
    gulp.watch(['source/shared/content/fonts/**'], ['student_fonts', 'platform_fonts', 'bright_fonts']);
    gulp.watch(['source/shared/content/images/**'], ['student_images', 'platform_images', 'bright_images']);
    gulp.watch(['source/shared/scripts/**'], ['student_scripts', 'platform_scripts', 'bright_scripts']);

    // Watch student files
    gulp.watch(['source/hlc-student/content/styles/**'], ['student_styles']);
    gulp.watch(['source/hlc-student/content/fonts/**'], ['student_fonts']);
    gulp.watch(['source/hlc-student/content/images/**'], ['student_images']);
    gulp.watch(['source/hlc-student/scripts/**'], ['student_scripts']);

    // Watch platform files
    gulp.watch(['source/platform/content/styles/**'], ['platform_styles']);
    gulp.watch(['source/platform/content/fonts/**'], ['platform_fonts']);
    gulp.watch(['source/platform/content/images/**'], ['platform_images']);
    gulp.watch(['source/platform/scripts/**'], ['platform_scripts']);

    // Watch bright files
    gulp.watch(['source/bright-ideas/content/styles/**'], ['bright_styles']);
    gulp.watch(['source/bright-ideas/content/fonts/**'], ['bright_fonts']);
    gulp.watch(['source/bright-ideas/content/images/**'], ['bright_images']);
    gulp.watch(['source/bright-ideas/scripts/**'], ['bright_scripts']);

    // Watch AssessRx files
    gulp.watch(['source/assess-rx/content/styles/**'], ['assessRx_styles']);
    gulp.watch(['source/assess-rx/content/fonts/**'], ['assessRx_fonts']);
    gulp.watch(['source/assess-rx/content/images/**'], ['assessRx_images']);
    gulp.watch(['source/assess-rx/scripts/**'], ['assessRx_scripts']);

    // Watch Ventura files
    gulp.watch(['source/ventua/content/styles/**'], ['ventura_styles']);
    gulp.watch(['source/ventura/content/fonts/**'], ['ventura_fonts']);
    gulp.watch(['source/ventura/content/images/**'], ['ventura_images']);
    gulp.watch(['source/ventura/scripts/**'], ['ventura_scripts']);

    // Create LiveReload server
    livereload.listen();

});


/*  =============================================================================
    Start Gulp
    ========================================================================== */

gulp.task('default', ['student', 'platform', 'bright', 'assessRx', 'ventura', 'watch']);


