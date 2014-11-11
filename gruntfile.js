module.exports = function(grunt) {
    grunt.initConfig({
        watch: {
            styles: {
                files: ['css/demo.css', 'css/icons.css', 'css/normalize.css', 'css/style3.css'], // which files to watch
                tasks: ['cssmin'],
                options: {
                    nospawn: true,
                    livereload: true
                }
            }
        },

        watch: {
            styles: {
                files: ['css/less/bootstrap.less', 'css/less/layout.less', 'css/less/typography.less', 'css/less/utility.less'], // which files to watch
                tasks: ['less'],
                options: {
                    nospawn: true,
                    livereload: true
                }
            }
        },

        cssmin: {
            combine: {
                files: {
                    'style.css': ['css/demo.css', 'css/icons.css', 'css/normalize.css', 'css/style3.css', 'css/less/bootstrap.less', 'css/less/layout.less', 'css/less/typography.less', 'css/less/utility.less']
                }
            }
        },

        less: {
            development: {
                options: {
                    compress: true,
                    yuicompress: true,
                    optimization: 2
                },
                files: {
                    "style.css": "css/less/styles.less"
                }
            }
        }
    });


    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-less');

    grunt.registerTask('default', ['watch']);
};