var Dispatcher  = require('../dispatcher/Dispatcher');
var ActionTypes = require('../enum/ImageActionTypes');
var Immutable   = require('immutable');
var SyncStatus  = require('../enum/SyncStatus');

var loadUrl   = secureURL + '/image/get';
var createUrl = secureURL + '/image/';
var updateUrl = secureURL + '/image/{image_id}?_method=PUT';
var deleteUrl = secureURL + '/image/{image_id}?_method=DELETE';
var getByTitleUrl = secureURL + '/image/{title}/get';

var ImageActions = {
    create: function(files, success) {
        var data = new FormData();
        $.each(files, function(key, value)
        {
            data.append(key, value);
        });

        data.append('_token', csrfToken);

        $.ajax({
            url: secureURL + '/image',
            type: 'POST',
            data: data,
            cache: false,
            async: true,
            processData: false, // Don't process the files
            contentType: false, // Set content type to false as jQuery will tell the server its a query string request
            success: function(data, textStatus, jqXHR) {
                return success(jqXHR);
            }
        });
    },

};
module.exports = ImageActions;