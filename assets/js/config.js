// Original concepts provided by Backbone Boilerplate project: https://github.com/tbranyen/backbone-boilerplate
require.config({
    // Initialize the application with the main application file
    deps: ["main"],

    baseUrl: "assets/js",

    paths: {
        // Libraries
        jquery: "vendor/jquery",
        lodash: "vendor/lodash",
        backbone: "vendor/backbone"
    },

    shim: {
        backbone: {
            deps: ["lodash", "jquery"],
            exports: "Backbone"
        }
    }
});