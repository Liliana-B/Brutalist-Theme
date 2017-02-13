module.exports = function(grunt) {
    grunt.initConfig({
// Copy web assets from bower_components to more convenient directories.
copy: {
    main: {

    files: [
    // Vendor scripts.
        {
            expand: true,
            cwd: 'bower_components/bootstrap-sass/assets/javascripts/',
            src: ['**/*.js'],
            dest: 'js/'
        },
        {
            expand: true,
            cwd: 'bower_components/jquery/dist/',
            src: ['**/*.js', '**/*.map'],
            dest: 'js/'
        },
        {
            expand: true,
            cwd: 'bower_components/wow/dist/',
            src: ['**/*.js'],
            dest: 'js/'
        },
    // Fonts.
        {
            expand: true,
            filter: 'isFile',
            flatten: true,
            cwd: 'bower_components/',
            src: ['bootstrap-sass/assets/fonts/**'],
            dest: 'fonts/'
        },
        {
            expand: true,
            filter: 'isFile',
            flatten: true,
            cwd: 'bower_components/',
            src: ['components-font-awesome/fonts/'],
            dest: 'fonts/'
        },
    // Stylesheets
        {
            expand: true,
            cwd: 'bower_components/bootstrap-sass/assets/stylesheets/',
            src: ['**/*.scss'],
            dest: 'sass/'
        },
        {
            expand: true,
            cwd: 'bower_components/animate-sass/',
            src: ['**/*.scss'],
            dest: 'sass/'
        },
        {
            expand: true,
            cwd: 'bower_components/components-font-awesome/',
            src: ['**/*.scss'],
            dest: 'sass/'
        }
        ]
        },
    },

    dirs: {
            css:  "css",
            scss: "sass"
        },
        watch: {
            options: {
                spawn: false
            },
            sass: {
                files: '<%= dirs.scss %>/**/*.scss',
                tasks: ['sass', 'autoprefixer', 'bsReload:css']
            },
            html: {
                files: '*.html',
                tasks: ['bsReload:all']
            }
        },
        sass: {
            options: {
                style: 'compressed'
            },
            dev: {
                files: {
                    '<%= dirs.css %>/style.css': '<%= dirs.scss %>/style.scss'
                }
            }
        },
        uglify: {
          my_target: {
            options: {
              mangle: false,
              beautify: false
            },
            files: {
                'js/core.min.js': [

                    'js/bootstrap.min.js',
                    'js/wow.min.js',
                    'js/custom.js'

                ]
            }
          }
        },
        autoprefixer: {
            options: {
                browsers: ['last 5 versions', 'ie 8']
            },
            css: {
                src: '<%= dirs.css %>/style.css',
                dest: '<%= dirs.css %>/style.css'
            }
        },
        browserSync: {
            dev: {
                options: {
                    server: "./",
                    background: true
                }
            }
        },
        bsReload: {
            css: {
                reload: "style.css"
            },
            all: {
                reload: true
            }
        }
    });

    // load npm tasks
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-browser-sync');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    // define default task
    grunt.registerTask('default', ['browserSync', 'uglify', 'watch']);
};
