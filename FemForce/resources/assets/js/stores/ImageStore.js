var Dispatcher         = require('../dispatcher/Dispatcher');
var EventEmitter       = require('events').EventEmitter;
var ImageActionTypes = require('../enum/ImageActionTypes');
var assign             = require('object-assign');
var Immutable          = require('immutable');
var StoreStatus        = require('../enum/StoreStatus');

var images = Immutable.fromJS([]);
var alerts = [];
var status = StoreStatus.UNINITIALIZED;
var CHANGE_EVENT = 'images_changed';

var addImage = function(image) {
    images = images.push(image);
};


var updateImage = function(updatedImage) {
    images.get('data').forEach(function(image, index) {
        if (image.get('id') == updatedImage.get('id')) {
            var imagesData = images.get('data');
            imagesData = imagesData.set(index, updatedImage);
            images = images.set('data', imagesData);
            return false;
        }
    });
};
var deleteImage = function(deletedImage) {
    images.get('data').forEach(function(image, index) {
        if (image.get('id') == deletedImage.get('id')) {
            var imagesData = images.get('data');
            imagesData = imagesData.remove(index, deletedImage);
            images = images.set('data', imagesData);
            return false;
        }
    });
};

var ImageStore = assign({}, EventEmitter.prototype, {
    get: function() {
        return images;
    },

    getAll: function() {
        return images;
    },

    getByTitle: function(title) {
        var matchingImage = null;
        images.forEach(function(image) {
            if (image.get('title') == title) {
                matchingImage = image;
                return false;
            }
        });
        return matchingImage;
    },

    getWithId: function(id) {
        var matchingImage = null;
        images.forEach(function(image) {
            if (image.get('id') == id) {
                matchingImage = image;
                return false;
            }
        });
        return matchingImage;
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

ImageStore.dispatchToken = Dispatcher.register(function(action) {
    switch(action.actionType) {
        case ImageActionTypes.BLOGS_LOADING:
            status = StoreStatus.LOADING;
            break;
        case ImageActionTypes.BLOGS_LOADED:
            images = action.images;
            status = StoreStatus.INITIALIZED;
            ImageStore.emitChange();
            break;
        case ImageActionTypes.BLOG_CREATING:
            addImage(action.image);
            ImageStore.emitChange();
            break;
        case ImageActionTypes.BLOG_CREATED:
            updateAddedImage(action.imageId, action.image);
            ImageStore.emitChange();
            break;
        case ImageActionTypes.BLOG_UPDATING:
        case ImageActionTypes.BLOG_UPDATED:
            updateImage(action.image);
            status = StoreStatus.UPDATED;
            ImageStore.emitChange();
            break;
        case ImageActionTypes.BLOG_DELETING:
        case ImageActionTypes.BLOG_DELETED:
            deleteImage(action.image);
            ImageStore.emitChange();
            break;
        case ImageActionTypes.BLOG_ERROR:
            status = StoreStatus.ERROR;
            alerts = action.messages;
            ImageStore.emitChange();
            break;
    }
});

module.exports = ImageStore;