var gulp = require('gulp'),
	 autoprefixer = require('gulp-autoprefixer'),
	 uglify = require('gulp-uglify'),
	 minify = require('gulp-minify'),
	 minifyCss = require('gulp-minify-css'),
	 concat = require('gulp-concat'),
	 rename = require('gulp-rename'),
	 watch = require('gulp-watch'),
	 watchLess = require('gulp-watch-less'),
	 less = require('gulp-less'),
	 livereload = require('gulp-livereload');

//PATHS
var paths = {
	'dev': {
		'less':'./lib/src/less/',
		'js':'./lib/src/js/',
		'vendor':'./lib/vendor/',
		'bootstrapjs': './lib/vendor/bootstrap/js/',
		'php':'./php/'
	},
	'prod': {
		'css': './app/src/css/',
		'js': './app/src/js/'
	}
}

//JAVASCRIPT LIBRAIRIES YOU WANT TO LOAD
var library = {
	'jquery' : paths.dev.vendor + 'jquery/dist/jquery.min.js',
	//full auto:
	//'bootstrap' : paths.dev.vendor + 'bootstrap/dist/js/bootstrap.min.js',
	
	//manual compile:
	//'bootstrap' : paths.dev.bootstrapjs + '/**/*.js',
	
	//individual compile:
	'bootstrap' : paths.dev.bootstrapjs + 'collapse.js',
	'bootstrap' : paths.dev.bootstrapjs + 'transition.js',
	//and last, your custom js:
	'app' : paths.dev.js + 'app.js'
}

gulp.task('default',['watch']);

gulp.task('css', function() {
	gulp.src(paths.dev.less + '_main.less')
		.pipe(less())
		.pipe(gulp.dest(paths.prod.css))
		.pipe(minifyCss({keepSpecialComments:0}))
		.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest(paths.prod.css));
});

gulp.task('js', function() {
	return gulp.src([library.jquery, library.bootstrap, library.app])
	.pipe(concat('main.js'))
	.pipe(gulp.dest(paths.prod.js))
	.pipe(rename({suffix:'.min'}))
	.pipe(uglify())
	.pipe(gulp.dest(paths.prod.js))

});

gulp.task('watch', function() {  
	gulp.watch(paths.dev.less+'**/*.less', ['css']);
	gulp.watch(paths.dev.js+'**/*.js', ['js']);

	//Create LiveReload server
	livereload.listen();

	// Watch any files in source/ and php , reload on change
	gulp.watch('**/*.php').on('change', livereload.changed);
	gulp.watch(['src/**']).on('change', livereload.changed);
});