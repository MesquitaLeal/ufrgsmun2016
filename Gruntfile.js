module.exports = function(grunt) {
    require('load-grunt-tasks')(grunt); // npm install --save-dev load-grunt-tasks

    grunt.loadNpmTasks('grunt-contrib-watch');


    grunt.initConfig({
        watch: {
            files: 'css/site.scss',
            tasks: [ 'sass' ]
        },

    	sass: {
    		options: {
    			sourceMap: true
    		},
    		dist: {
    			files: {
    				'assets_b/css/site.css': 'css/site.scss'
    			}
    		}
    	}
    });



    grunt.registerTask('default', ['sass']);
};
