module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      build: {
        src: ['assets/js/app.js', 'assets/js/services/*.js', 'assets/js/directives/*.js', 'assets/js/controllers/*.js'],
        dest: 'assets/js/app.min.js'
      }
    },
    watch: {
      files: ['assets/js/app.js', 'assets/js/services/*.js', 'assets/js/directives/*.js', 'assets/js/controllers/*.js'],
      tasks: ['uglify']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.registerTask('default', ['uglify', 'watch']);

};
