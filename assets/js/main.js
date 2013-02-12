require([
    'jquery',
    'lodash',
    'backbone',
    'app/views/user-list',
    'app/models/user-model',
    'app/models/user-collection'
],
function($, _, Backbone, UserListView, User, UserCollection) {
    Backbone.emulateHTTP = true; // Use _method parameter rather than using DELETE and PUT methods
    Backbone.emulateJSON = true; // Send data to server via parameter rather than via request content   

    var AppRouter = Backbone.Router.extend({
        initialize: function() {
            this.user = new User;

            this.users = new UserCollection();
            var self = this;
            this.users.fetch({
                success: function(collection, response) {
                    _.each(collection.models, 
                        function(model) {
                            console.log(model.toJSON());
                        }
                    );

                    var userlist = new UserListView({
                        model: self.users
                    }).render();
                }
            });
        },
        
        routes: {
            "asc": "sortAsc",
            "desc": "sortDesc"
        },
        
        sortAsc: function() {
            this.users.setSortField("name", "ASC");
            this.users.sort();
            var userlist = new UserListView({
                    model: this.users
                }).render();
        },
        
        sortDesc: function() {
            this.users.setSortField("name", "DESC");
            this.users.sort();
            var userlist = new UserListView({
                    model: this.users
                }).render();
        }
    });
 
    new AppRouter();
     
    Backbone.history.start();
}); // End require