define([
    'jquery', 
    'lodash', 
    'backbone'
],
function($, _, Backbone) {

    var User = Backbone.Model.extend({
        initialize: function() {
            console.log("user is initialized");
            this.on('all', function(e) { console.log(this.get('name') + " event: " + e); });
        },
        defaults: {
            id: '',
            name: 'undefined', 
            avatar: "http://google.com",
            tags: 'undefined'
        },
        urlRoot: "/",
        url: function() {
            var base = this.urlRoot || (this.collection && this.collection.url) || "/";
            if (this.isNew()) return base;
     
            return base + "?id=" + encodeURIComponent(this.id);
        }
    });

    return User;
});