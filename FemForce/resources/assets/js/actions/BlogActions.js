var Dispatcher  = require('../dispatcher/Dispatcher');
var ActionTypes = require('../enum/BlogActionTypes');
var Immutable   = require('immutable');
var SyncStatus  = require('../enum/SyncStatus');

var loadUrl   = secureURL + '/blog/get';
var createUrl = secureURL + '/blog/';
var updateUrl = secureURL + '/blog/{blog_id}?_method=PUT';
var deleteUrl = secureURL + '/blog/{blog_id}?_method=DELETE';
var getByTitleUrl = secureURL + '/blog/{title}/get';

var BlogActions = {
    load: function() {
        Dispatcher.dispatch({
            actionType: ActionTypes.BLOGS_LOADING
        });

        var data = {
            _token: csrfToken,
        };

        $.post(loadUrl, data, function(blogs) {
            // blogs.forEach(function(blog) {
            //     blog.status = SyncStatus.SYNCED
            // });

            Dispatcher.dispatch({
                actionType: ActionTypes.BLOGS_LOADED,
                blogs: Immutable.fromJS(blogs)
            })
        });
    },

    getById: function(id) {
        var url = getByIdUrl.replace('{blog_id}', id);
        $.get(url, null, function (blogs) {
            // blogs is just a paginated object that contains the single queried blog
            Dispatcher.dispatch({
                actionType: ActionTypes.BLOGS_LOADED,
                blogs: Immutable.fromJS(blogs)
            });
        });
    },


    order: function(blogs){
        var data = {
            blogs: blogs,
            _token: csrfToken,
        };
        var url = secureURL + '/employee/category/' + categoryId + '/blogs-order';
        $.post(url, data, function(result) {

        });
    },

    update: function(blog) {
        blog = blog.set('status', SyncStatus.SYNCING);

        // Dispatcher.dispatch({
        //     actionType: ActionTypes.BLOG_UPDATING,
        //     blog: blog
        // });

        blog = blog.merge({
            _token: csrfToken
        });

        let url = updateUrl.replace('{blog_id}', blog.get('id'));
        $.post(url, blog.toJS(), function(blog) {

            blog.status = SyncStatus.SYNCED;

            Dispatcher.dispatch({
                actionType: ActionTypes.BLOG_UPDATED,
                blog: Immutable.fromJS(blog)
            });
        });
    },

    delete: function(blog) {
        blog = blog.set('status', SyncStatus.SYNCING);

        Dispatcher.dispatch({
            actionType: ActionTypes.BLOG_DELETING,
            blog: blog
        });

        blog = blog.merge({
            _token: csrfToken
        });

        var url = deleteUrl.replace('{blog_id}', blog.get('id'));
        $.post(url, blog.toJS(), function(blog) {

            blog.status = SyncStatus.SYNCED;

            Dispatcher.dispatch({
                actionType: ActionTypes.BLOG_DELETED,
                blog: Immutable.fromJS(blog)
            });
        });
    },

};
module.exports = BlogActions;