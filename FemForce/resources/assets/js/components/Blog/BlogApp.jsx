var React               = require('react');
var ReactDOM            = require('react-dom');
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
                <div className="header">
                    <section id="intro">
                        <div className="logo-menu">
                            <nav className="navbar navbar-default main-navigation" role="navigation" data-spy="affix" data-offset-top="50">
                                <div className="container">
                                    <div className="navbar-header">
                                        <button type="button" className="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                                            <span className="sr-only">Toggle navigation</span>
                                            <span className="icon-bar"></span>
                                            <span className="icon-bar"></span>
                                            <span className="icon-bar"></span>
                                        </button>
                                        <a className="navbar-brand logo" href="/"><img width="100px" height="50px" src={secureAsset + "FemmForce.jpg"} alt=""/></a>
                                    </div>

                                    <div className="collapse navbar-collapse" id="navbar">
                                        <ul className="nav navbar-nav">
                                            {/*<li>*/}
                                            {/*<a href="home">Home</a>*/}
                                            {/*</li>*/}
                                            {/*<li>*/}
                                            {/*<a href="candidates">Find A Job</a>*/}
                                            {/*</li>*/}
                                            {/*<li>*/}
                                            {/*<a href="employers">Employers</a>*/}
                                            {/*</li>*/}
                                            <li>
                                                <a className="active" href="blog">Blog</a>
                                            </li>
                                            <li>
                                                <a href="our-story">Our Story</a>
                                            </li>
                                        </ul>
                                        <ul className="nav navbar-nav navbar-right float-right">
                                            <li className="left"><a href="post-job.html"><i className="ti-pencil-alt"></i> Post A Job</a></li>
                                            <li className="right"><a href="my-account.html"><i className="ti-lock"></i>  Log In</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <ul className="wpb-mobile-menu">
                                    {/*<li>*/}
                                    {/*<a href="home">Home</a>*/}
                                    {/*</li>*/}
                                    {/*<li>*/}
                                    {/*<a href="candidates">Candidates</a>*/}
                                    {/*</li>*/}
                                    {/*<li>*/}
                                    {/*<a href="employers">Employers</a>*/}
                                    {/*</li>*/}
                                    <li>
                                        <a className="active" href="blog">Blog</a>
                                    </li>
                                    <li>
                                        <a href="our-story">Our Story</a>
                                    </li>
                                    <li className="btn-m"><a href="post-job.html"><i className="ti-pencil-alt"></i> Post A Job</a></li>
                                    <li className="btn-m"><a href="my-account.html"><i className="ti-lock"></i>  Log In</a></li>
                                </ul>
                            </nav>
                        </div>


                        <footer>
                            <section className="footer-Content">
                                <div className="container">
                                    <div className="row">
                                        <div className="col-md-3 col-sm-6 col-xs-12">
                                            <div className="widget">
                                                <h3 className="block-title">Quick Links</h3>
                                                <ul className="menu">
                                                    <li><a href="home">Home</a></li>
                                                    <li><a href="candidates">Candidates</a></li>
                                                    <li><a href="employers">Employers</a></li>
                                                    <li><a href="our-story">Our Story</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div className="col-md-3 col-sm-6 col-xs-12">
                                            <div className="widget">
                                                <h3 className="block-title">Follow Us</h3>
                                                <div className="bottom-social-icons social-icon">
                                                    <a className="twitter" href="https://twitter.com/GrayGrids"><i className="ti-twitter-alt"></i></a>
                                                    <a className="facebook" href="https://web.facebook.com/GrayGrids"><i className="ti-facebook"></i></a>
                                                    <a className="youtube" href="https://youtube.com"><i className="ti-youtube"></i></a>
                                                    <a className="dribble" href="https://dribbble.com/GrayGrids"><i className="ti-dribbble"></i></a>
                                                    <a className="linkedin" href="https://www.linkedin.com/GrayGrids"><i className="ti-linkedin"></i></a>
                                                </div>
                                                <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
                                                <div className="subscribe-box">
                                                    <input type="text" placeholder="Your email" id="email-input"/>
                                                    <input type="submit" className="btn-system" value="Subscribe" id="email-submit"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div id="copyright">
                                <div className="container">
                                    <div className="row">
                                        <div className="col-md-12">
                                            <div className="site-info text-center">
                                                <p>Copyright &copy; 2018 FemmForce Inc. all rights Reserved</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </footer>
                        {/*<script>*/}
                        {/*$(document).ready(function() {*/}
                        {/*$('#email-submit').click(function() {*/}
                        {/*var data = {*/}
                        {/*_token: csrfToken,*/}
                        {/*email: $('#email-input').val()*/}
                        {/*};*/}
                        {/*var url = "{{secure_url('/subscribe')}}";*/}
                        {/*$.post(url, data, function(result) {*/}
                        {/*console.log(result);*/}
                        {/*});*/}
                        {/*});*/}
                        {/*})*/}
                        {/*</script>*/}

                        <a href="#" className="back-to-top">
                            <i className="ti-arrow-up"/>
                        </a>

                    </section>
                </div>
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
                <div className="container section-intro" style={{height: "650px"}}/>
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

ReactDOM.render (
    <Blog/>,
    document.getElementById('blog-app')
);