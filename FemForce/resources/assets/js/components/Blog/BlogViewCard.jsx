var React                = require('react');
var Card                 = require('../Card');
var HtmlToReact          = require('html-to-react');

var BlogViewCard = React.createClass({

    getInitialState: function() {
        return {
            blog: this.props.blog,
        }
    },

    componentWillReceiveProps: function(props) {
        this.setState({
            blog: props.blog,
        })
    },

    render: function() {
        return (
            <div>
                <Card size="col-sm-12 col-md-6">
                    {this.getHeader()}
                    {this.getContents()}
                </Card>
            </div>
        )
    },

    getHeader: function() {
        return (
            <h4>{this.state.blog.get('title')}</h4>
        )
    },

    getContents: function() {


        return (
            <div>
                {this.getHtmlContent()}
            </div>
        );
    },

    getHtmlContent: function() {
        var htmlInput = '<div>' + this.state.blog.get('html_content') + '</div>';
        var htmlToReactParser = new HtmlToReact.Parser(React);
        return htmlToReactParser.parse(htmlInput);
    },

});
module.exports = BlogViewCard;