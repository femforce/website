var Dispatcher         = require('../dispatcher/Dispatcher');
var EventEmitter       = require('events').EventEmitter;
var BlogActionTypes = require('../enum/BlogActionTypes');
var assign             = require('object-assign');
var Immutable          = require('immutable');
var StoreStatus        = require('../enum/StoreStatus');

var blogs = Immutable.fromJS([]);
var alerts = [];
var status = StoreStatus.UNINITIALIZED;
var CHANGE_EVENT = 'blogs_changed';

var addBlog = function(blog) {
    blogs = blogs.push(blog);
};


var updateBlog = function(updatedBlog) {
    blogs.get('data').forEach(function(blog, index) {
        if (blog.get('id') == updatedBlog.get('id')) {
            var blogsData = blogs.get('data');
            blogsData = blogsData.set(index, updatedBlog);
            blogs = blogs.set('data', blogsData);
            return false;
        }
    });
};
var deleteBlog = function(deletedBlog) {
    blogs.get('data').forEach(function(blog, index) {
        if (blog.get('id') == deletedBlog.get('id')) {
            var blogsData = blogs.get('data');
            blogsData = blogsData.remove(index, deletedBlog);
            blogs = blogs.set('data', blogsData);
            return false;
        }
    });
};

var BlogStore = assign({}, EventEmitter.prototype, {
    get: function() {
        return blogs;
    },

    getAll: function() {
        return blogs;
    },

    getByTitle: function(title) {
        var matchingBlog = null;
        blogs.forEach(function(blog) {
            if (blog.get('title') == title) {
                matchingBlog = blog;
                return false;
            }
        });
        return matchingBlog;
    },

    getWithId: function(id) {
        var matchingBlog = null;
        blogs.forEach(function(blog) {
            if (blog.get('id') == id) {
                matchingBlog = blog;
                return false;
            }
        });
        return matchingBlog;
    },

    getStatus: function() {
        return status;
    },

    getAlerts: function() {
        return alerts;
    },

    emitChange: function() {
        this.emit(CHANGE_EVENT);
    },

    addChangeListener: function(callback) {
        this.on(CHANGE_EVENT, callback);
    },

    removeChangeListener: function(callback) {
        this.removeListener(CHANGE_EVENT, callback);
    }
});

BlogStore.dispatchToken = Dispatcher.register(function(action) {
    switch(action.actionType) {
        case BlogActionTypes.BLOGS_LOADING:
            status = StoreStatus.LOADING;
            break;
        case BlogActionTypes.BLOGS_LOADED:
            blogs = action.blogs;
            status = StoreStatus.INITIALIZED;
            BlogStore.emitChange();
            break;
        case BlogActionTypes.BLOG_CREATING:
            addBlog(action.blog);
            BlogStore.emitChange();
            break;
        case BlogActionTypes.BLOG_CREATED:
            updateAddedBlog(action.blogId, action.blog);
            BlogStore.emitChange();
            break;
        case BlogActionTypes.BLOG_UPDATING:
        case BlogActionTypes.BLOG_UPDATED:
            updateBlog(action.blog);
            status = StoreStatus.UPDATED;
            BlogStore.emitChange();
            break;
        case BlogActionTypes.BLOG_DELETING:
        case BlogActionTypes.BLOG_DELETED:
            deleteBlog(action.blog);
            BlogStore.emitChange();
            break;
        case BlogActionTypes.BLOG_ERROR:
            status = StoreStatus.ERROR;
            alerts = action.messages;
            BlogStore.emitChange();
            break;
    }
});

module.exports = BlogStore;