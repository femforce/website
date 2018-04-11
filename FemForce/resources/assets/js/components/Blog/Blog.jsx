var React  = require('react');
var LoadingIndicator = require('react-loading-indicator').default;
var BlogViewCard = require('./BlogViewCard');

// Flux
var BlogStore      = require('../../stores/BlogStore');
var BlogActions    = require('../../actions/BlogActions');

var Blog = React.createClass({

    getDefaultProps: function() {
        return {
            editorState: "",
            blogsLoading: true,
        }
    },

    getInitialState: function () {
        return {
            blogsLoading: true
        }
    },

    componentDidMount: function() {
        BlogStore.addChangeListener(this.onBlogsChanged);
        BlogActions.load();
    },

    componentDidUpdate: function() {
    },

    onBlogsChanged: function() {
        var blogs = BlogStore.getAll();
        this.setState({
            blogs: blogs,
            blogsLoading: false
        });
    },

    render: function () {
        return (
            <div>
                {this.renderHeader()}
                {this.renderContents()}
            </div>
        );
    },

    renderContents: function() {
        if (this.state.blogsLoading){
            return (
                <div>
                    <LoadingIndicator/>
                </div>
            )
        }
        else {
            return (
                <div className="container" style={{background: "white"}}>
                    {this.renderBlogs()}
                </div>
            )
        }
    },

    renderHeader: function() {
        return (
            <div className="page-header" style={{borderTopWidth: "0px", borderBottomWidth: "0px"}}>
                <div className="container section-intro">
                    <div className="row">
                        <div className="col-md-12">
                            <div className="breadcrumb-wrapper" style={{marginTop: "20px"}}>

                                <h2 className="product-title">Blog</h2>
                                <ol className="breadcrumb">
                                    <li><a href="#"><i className="ti-home"></i> Home</a></li>
                                    <li className="current">Blogs</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    },

    renderBlogs: function() {
        var cards = [];
        this.state.blogs.forEach(function(blog, index) {
            cards.push(<BlogViewCard key={blog.get('id')} blog={blog}/>);
            if ((index+1) % 3 == 0) {
                cards.push(<div key={'clearfix:' + index} className="clearfix visible-md-block visible-lg-block"></div>);
            }
        });
        return cards;
    }

});


module.exports = Blog;