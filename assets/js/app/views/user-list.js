define([
    'jquery', 
    'lodash',
    'backbone',
    'app/models/user-collection'
],
function($, _, Backbone, UserCollection) {

    var UserListView = Backbone.View.extend({
        initialize: function() {
            console.log("list view is initialized");
            this.template = $('#user-template');
        },
        
        el: '#app',
        
        render: function() {
            var data = this.model.toJSON();
            this.$el.find('tbody').empty();

            for (var i=0, l=data.length; i<l; i++) {
                var $tr = this.template.find('tr').clone(),
                    $name = $tr.find('.name').text(data[i].name),
                    $avatar = $tr.find('.avatar').find('img').attr('src', data[i].avatar),
                    $tags = $tr.find('.tags').text(data[i].tags);
                this.$el.find('tbody').append($tr);
            }
            return this;
        },
        
        model: UserCollection
    });

    return UserListView;

});