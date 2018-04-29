var React  = require('react');
var LoadingIndicator = require('react-loading-indicator').default;
var BlogViewCard = require('./BlogViewCard');
var BlogShowCard = require('./BlogShowCard');

// Flux
var BlogStore      = require('../../stores/BlogStore');
var BlogActions    = require('../../actions/BlogActions');

var Blog = React.createClass({

    getDefaultProps: function() {
        return {
            editorState: "",
            blogsLoading: true,
            blog: null
        }
    },

    getInitialState: function () {
        return {
            blogsLoading: true,
            blog: null
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
                <div style={{margin: "auto auto 30px", height: "60px", width: "60px"}}>
                    <LoadingIndicator segmentWidth={10} segmentHeight={60} />
                </div>
            )
        }
        else {
            return (
                <div className="container" style={{background: "white"}}>
                    {this.state.blog ?
                        this.renderBlog()
                      :
                        this.renderBlogs()
                    }
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
                                    {/*<li><a href="#"><i className="ti-home"></i> Home</a></li>*/}
                                    <li className="current">Blog</li>
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
        var self = this;
        this.state.blogs.forEach(function(blog, index) {
            cards.push(<BlogViewCard key={blog.get('id')} blog={blog} onClickBlog={self.onClickBlog}/>);
            if ((index+1) % 2 == 0) {
                cards.push(<div key={'clearfix:' + index} className="clearfix visible-md-block visible-lg-block"></div>);
            }
        });
        return cards;
    },

    renderBlog: function() {
       return (
           <BlogShowCard key={this.state.blog.get('id')} blog={this.state.blog}/>
       )
    },

    onClickBlog: function(title) {
        var blog = BlogStore.getByTitle(title);
        this.setState({
            blog: blog
        });
    }

});


module.exports = Blog;