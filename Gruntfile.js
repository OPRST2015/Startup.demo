module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		
		// Task: Lint all JS files
		jshint: {
			files: ['public/js/**/*.js'],
			options: {
				jshintrc: ".jshintrc",
				jshintignore: ".jshintignore"
			}
		},

		// Task: Compile SASS to CSS
		less: {
			compile: {
				files: {
					'public/styles/style.css': 'public/styles/style.less'
				}
			}
		},

		// Task: Lint CSS
		csslint: {
			strict: {
				options: {
					csslintrc: '.csslintrc'
				},
				src: ['public/styles/style.css']
			}
		},

		// Task: Compile JADE
		jadephp: {
			compile: {
				options: {
					pretty: true
				},
				basedir: '/',
				expand: true,
				cwd: 'application/views/jade/',
				src: ['**/*.jade'],
				dest: 'application/views/',
				ext: '.php'
			}
		},

		// Task: Watch
		watch: {
			jshint: {
				files: ['public/js/**/*.js', 'Gruntfile.js'],
				tasks: ['jshint']
			},
			less: {
				files: ['public/styles/*.less'],
				tasks: ['less']
			},
			csslint: {
				files: ['public/styles/style.css'],
				tasks: ['csslint'],
				options: {
					livereload: true
				}
			},
			jadephp: {
				files: ['application/views/jade/**/*.jade'],
				tasks: ['jadephp']
			},
			html: {
				files: ['application/views/**/*.php'],
				options: {
					livereload: true
				}
			}
		}

	});

	// Load the plugin for watch
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Load the plugin for JSHint
	grunt.loadNpmTasks('grunt-contrib-jshint');

	// Load the plugin for HTML lint
	grunt.loadNpmTasks('grunt-contrib-csslint');

	// Load the plugin for LESS
	grunt.loadNpmTasks('grunt-contrib-less');

	// Load the plugin for JADE
	grunt.loadNpmTasks('grunt-jade-php');

	// Default task(s)
	grunt.registerTask('default', ['jshint']);
};