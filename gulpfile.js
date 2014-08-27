// include gulp
var gulp = require('gulp'); 
 
// include plug-ins
var coffee = require('gulp-coffee');
var gutil = require('gulp-util');
var stylus = require('gulp-stylus');
var watch = require('gulp-watch');
var plumber = require('gulp-plumber');
var livereload = require('gulp-livereload');
var embedlr = require("gulp-embedlr");
var exclude = require('gulp-ignore').exclude;
var bower = require('gulp-bower-files');
var filter = require('gulp-filter');
var minifyCss = require('gulp-minify-css');
var minifyHtml = require('gulp-minify-html');
var imagemin = require('gulp-imagemin');
var rimraf = require('gulp-rimraf');
var useref = require('gulp-useref');
var uglify = require('gulp-uglify');
var nib = require('nib');

// these files are simply (dumb) copied between app, dev and dist, without being processed
var dumbFiles = [
	'.htaccess', 
	'favicon.ico',
	'fonts/**/*',
	'images/**/*',
	"scripts/**/*.js"
];

gulp.task('watch-coffee', function() {
	watch({glob: './app/scripts/**/*.coffee'}, function(files) {
		return files
		.pipe(gulp.dest('./dev/scripts/'));
	});
	watch({glob: './app/scripts/**/*.js'}, function(files) {
		return files
		.pipe(gulp.dest('./dev/scripts/'))
		.pipe(livereload());
	});
	watch({glob: './app/scripts/**/*.coffee'}, function(files) {
		return files
		.pipe(plumber())
		.pipe(coffee({bare: true, appMap: true}).on('error', gutil.log))
		.pipe(gulp.dest('./dev/scripts/'))
		.pipe(livereload());
	});
	
});

gulp.task('watch-html', function() {
	watch({glob: './app/**/*.html'}, function(files) {
		return files
		.pipe(gulp.dest('./dev/'))
		.pipe(livereload());
	});
});

gulp.task('watch-stylus', function() {
	watch({glob: './app/**/*.styl'}, function(files) {
		return files
		.pipe(stylus({use: [nib()]}))
		.pipe(gulp.dest('./dev/'))
		.pipe(livereload());
	});

});

gulp.task('watch-others', function() {

	for (var i = dumbFiles.length - 1; i >= 0; i--) {
		// find path
		var x = dumbFiles[i].split("/");
		var prePath = '';
		if(x.length > 1){
			for (var a = 0; a <= x.length - 1; a++) {
				if(x[a] == "*" || x[a] == "**") break;
				if(a > 0) prePath += "/";
				prePath += x[a];
			};
		}
		gulp.src('./app/'+dumbFiles[i])
			.pipe(gulp.dest('./dev/'+prePath));
	}

});

gulp.task('serve', ['watch-coffee', 'watch-html','watch-others', 'watch-stylus']);

// =============================================== le building ============================================== //

gulp.task('build-clean', function(){
	// clean dist
	return gulp.src('./dist/*', {read: false})
	    .pipe(rimraf());
});

// builds the index: changes all js en css files
gulp.task('build-index', function(){
	var jsFilter = filter('./**/*.js');
    var cssFilter = filter('./**/*.css');
    var htmlFilter = filter('./**/*.html');

    return gulp.src('./dev/index.html')
        .pipe(useref.assets())
        .pipe(jsFilter)
        .pipe(uglify({mangle: false}))
        .pipe(jsFilter.restore())
        .pipe(cssFilter)
        .pipe(minifyCss())
        .pipe(cssFilter.restore())
        .pipe(htmlFilter)
        .pipe(minifyHtml())
        .pipe(htmlFilter.restore())
        .pipe(useref.restore())
        .pipe(useref())
        .pipe(gulp.dest('dist'));
});

gulp.task("build-dumb", function(){
	for (var i = dumbFiles.length - 1; i >= 0; i--) {
		// find path
		var x = dumbFiles[i].split("/");
		var prePath = '';
		if(x.length > 1){
			for (var a = 0; a <= x.length - 1; a++) {
				if(x[a] == "*" || x[a] == "**") break;
				if(a > 0) prePath += "/";
				prePath += x[a];
			};
		}
		gulp.src('./dev/'+dumbFiles[i])
			.pipe(gulp.dest('./dist/'+prePath));
	};
});

gulp.task("build-images", function(){
	gulp.src('./dev/images/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('./dist/images/'));
});

gulp.task('build-html', function() {

	// dont take index.html
	gulp.src('./dev/scripts/**/*.html')
		.pipe(gulp.dest('./dist/scripts/'));
	gulp.src('./dev/views/**/*.html')
		.pipe(gulp.dest('./dist/views/'));
});

gulp.task('build', ['build-index', 'build-html', 'build-dumb', 'build-images']);