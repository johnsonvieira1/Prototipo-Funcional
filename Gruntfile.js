module.exports = function( grunt ) {

	require('jit-grunt') (grunt);
 
  grunt.initConfig({

		imagemin: {
			public: {
				expand: true,
				cwd: 'assets/images',
				src: '**/*.{png,jpg,gif}',
				dest: 'assets/images'
			}
		},

		less: {
			development: {
				files: {
					"assets/css/style.css": "assets/less/style.less"
				}
			}
		},

		cssmin: {
			target: {
				files: [{
					expand: true,
					cwd: 'assets/css/',
					src: ['*.css', '!*.min.css'],
					dest: 'assets/css/',
					ext: '.min.css'
				}]
			}
		},

		watch: {
			styles: {
				files: ['**/*.less','**/*.css'],
				tasks: ['less','cssmin']
			}
		},

        browserSync: {
            dev: {
                bsFiles: {
                    src: ['**/*']
                },

                options: {
                    proxy: 'http://localhost:8888/',
                    port: 8888,
                    open: true,
                    watchTask: true
                }
            }
        }

  });

  	grunt.registerTask('default', ['imagemin','less','cssmin','browserSync','watch']);

	grunt.loadNpmTasks ('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-browser-sync');

};