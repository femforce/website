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
            <div onClick={() => this.onClickBlog(this.state.blog.get('title'))} style={{cursor: "pointer"}}>
                <Card size="col-sm-12 col-md-6">
                    {this.getHeader()}
                    {this.getContents()}
                </Card>
            </div>
        )
    },

    getHeader: function() {
        return (
            <div>
                <div style={{position: "relative"}}>
                    <img src={secureURL + "/" + this.state.blog.get('image').get('path')} height={350} width={540}/>
                    <div className="blog-title" style={{position: "absolute", left: "160px", top: "250px", width: "200px", height: "200px"}}>
                        <hr style={{height: "4px", border: "none", color: "#333", backgroundColor: "#333", width: "25%", strokeWidth: "1px", marginLeft: "20px", marginRight: "20px"}}/>
                        <h4 style={{textTransform: "uppercase", fontWeight: "bold", marginLeft: "20px", marginRight: "20px"}}>{this.state.blog.get('title')}</h4>
                        <hr style={{height: "4px", border: "none", color: "#333", backgroundColor: "#333", width: "25%", strokeWidth: "1px", marginLeft: "20px", marginRight: "20px"}}/>
                    </div>
                </div>
            </div>
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

    onClickBlog:function(title) {
        console.log("BVC");
        this.props.onClickBlog(title);
    }

});
module.exports = BlogViewCard;