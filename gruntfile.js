module.exports = function(grunt) {
    grunt.initConfig({

        watch: {
            styles: {
                files: ['css/less/bootstrap.less', 'css/less/layout.less', 'css/less/typography.less', 'css/less/ui.less', 'css/less/utility.less', 'css/less/variables.less'], // which files to watch
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
                    "style.css": "css/less/style.less"
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['watch']);
};