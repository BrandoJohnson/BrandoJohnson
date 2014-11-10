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

        cssmin: {
            combine: {
                files: {
                    'style.css': ['css/demo.css', 'css/icons.css', 'css/normalize.css', 'css/style3.css']
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    grunt.registerTask('default', ['watch']);
};