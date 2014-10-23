module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      build: {
        src: ['assets/js/app.js', 'assets/js/services/*.js', 'assets/js/directives/*.js', 'assets/js/controllers/*.js'],
        dest: 'assets/js/app.min.js'
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
          "assets/css/app.min.css": "assets/css/app.less"
        }
      }
    },
    watch: {
      files: ['assets/js/app.js', 'assets/js/services/*.js', 'assets/js/directives/*.js', 'assets/js/controllers/*.js', 'assets/css/app.less'],
      tasks: ['uglify', 'less']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.registerTask('default', ['uglify', 'less', 'watch']);

};
