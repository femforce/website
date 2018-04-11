var React               = require('react');
var ReactDOM            = require('react-dom');
var BlogEditor          = require('./BlogEditor');

ReactDOM.render (
    <BlogEditor/>,
    document.getElementById('blog-editor-container')
);