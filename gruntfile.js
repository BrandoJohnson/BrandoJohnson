module.exports = function(grunt) {
    grunt.initConfig({

        watch: {
            styles: {
                files: ['css/bootstrap.less', 'css/layout.less', 'css/typography.less', 'css/ui.less', 'css/utility.less', 'css/variables.less', 'css/demo.css', 'css/icons.css', 'css/normalize.css', 'css/style3.css'], // which files to watch
                tasks: ['less'],
                options: {
                    nospawn: true,
                    livereload: true
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
                    // target.css file: source.less file
                    "style.css": "css/styles.less"
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['watch']);
};