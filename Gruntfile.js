module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        watch: {
            sass: {
                files: ['sass/**/*.scss'],
                tasks: ['sass'],
                options: {
                    livereload: true
                }
            },
            php: {
                files: ['**/*.php'],
                options: {
                    livereload: true
                }
            },
            uglify: {
                files: ['js/source/**/*.js'],
                tasks: ['uglify']
            }
        },
        sass: {
            options: {
                style: 'compressed'
            },
            dist: {
                files: {
                    'css/main.css': 'sass/**/*.scss'
                }
            }
        },
        uglify: {
            options: {
                mangle: true
            },
            dist: {
                files: {
                    'js/min/jquery.slides.min.js':  'js/source/jquery.slides.js',
                    'js/min/menuBar.min.js':        'js/source/menuBar.js',
                    'js/min/rsvp.min.js':           'js/source/rsvp.js'
                }
            }
        },
        cachebreaker: {
            options: {
                match: ['/css/main.css'],
                replacement: function() {
                    return new Date().getTime()
                }
            },
            files: {
                src: ['head.php']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-cache-breaker');
    grunt.registerTask('default', ['sass', 'uglify', 'watch']);
    grunt.registerTask('build', ['sass', 'uglify', 'cachebreaker']);
};
