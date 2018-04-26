var React  = require('react');
import {Editor} from 'react-draft-wysiwyg';
import draftToHtml from 'draftjs-to-html';
import { EditorState, convertToRaw, ContentState } from 'draft-js';
var LoadingIndicator = require('react-loading-indicator');
var Uploader = require('../DropZone');

var BlogEditor = React.createClass({

    getDefaultProps: function() {
        return {
            editorState: "",
            status: 1
        }
    },

    getInitialState: function () {
        return {
            status: 1
        }
    },

    componentDidMount: function() {
    },

    componentDidUpdate: function() {
    },

    render: function () {
        return (
            <div>
                {this.renderHeader()}
                <div style={{marginTop: 20}} className="row">
                    {this.state.status === 1 ?
                        this.renderEditor()
                        :
                        null
                    }
                    {this.state.status === 2 ?
                        <div>
                            <LoadingIndicator />
                        </div>
                        :
                        null
                    }
                    {this.state.status === 3 ?
                        <div>
                            <h2 style={{textAlign: "center"}}>Your blog was created successfully</h2>
                            <button className="btn btn-primary col-md-2 col-md-offset-3" style={{marginTop: "20px", marginBottom: "20px"}} id="blog_view" onClick={this.onClickViewBlogs}>View Blogs</button>
                            {/*<button className="btn btn-primary col-md-2 col-md-offset-1" style={{marginTop: "20px", marginBottom: "20px"}} id="blog_manage" onClick={this.onClickManageBlogs}>Manage Blogs</button>*/}
                            <button className="btn btn-primary col-md-2 col-md-offset-1" style={{marginTop: "20px", marginBottom: "20px"}} id="blog_create_another" onClick={this.onClickCreateAnotherBlog}>Create Another Blog</button>
                        </div>
                        :
                        null
                    }
                </div>
            </div>
        );
    },

    renderHeader: function () {
        return (
            <div className="page-header" style={{background: "grey"}}>
                <div className="container">
                    <div className="row">
                        <div className="col-md-12">
                            <div className="breadcrumb-wrapper">
                                <h2 className="product-title">Create Blog</h2>
                                <ol className="breadcrumb">
                                    <li><a href="#"><i className="ti-home"></i> Home</a></li>
                                    <li className="current">Create Blog</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    },

    renderEditor: function () {
        console.log(this.state.path);

        return (
            <div>
                <div className="col-md-10 col-md-offset-1">
                    <input ref="blog_title" id="blog_title" className="form-control" type="text" placeholder="Blog Title"/>
                </div>
                {this.state.path ?
                    <img src={this.state.path} height={350} width={540} style={{display: "block", margin: "20px auto 20px auto"}}/>
                    :
                    <Uploader style={{display: "block", margin: "20px auto 20px auto", cursor: "pointer"}} onChange={this.onPathChange} width={this.props.width} height={this.props.height}/>
                }
                <Editor
                    editorState={this.state.editorState}
                    toolbarClassName="col-md-10 col-md-offset-1"
                    wrapperClassName="demo-wrapper"
                    editorClassName="demo-editor col-md-10 col-md-offset-1"
                    onEditorStateChange={this.onEditorStateChange}
                />
                <button className="btn btn-primary col-md-10 col-md-offset-1" style={{marginTop: "20px", marginBottom: "20px"}} id="blog_submit" onClick={this.onClickSubmit}>Submit</button>
            </div>
        )
    },

    onEditorStateChange: function (editorState) {
        this.setState({
            editorState: editorState
        });
    },

    onClickViewBlogs: function () {
        window.open(secureURL + '/blog');
    },

    onClickManageBlogs: function () {
        window.open(secureURL + '/company/' + this.state.invoice.get('company_id') + '/subscription');

    },

    onClickCreateAnotherBlog: function () {
        window.open(secureURL + '/employee/blog');
    },

    onClickSubmit: function () {
        this.setState({
            status: 2
        });
        var self = this;
        var data = {
            'blog': draftToHtml(convertToRaw(this.state.editorState.getCurrentContent())),
            'title': this.refs.blog_title.value,
            'path' : this.state.imagePath,
            '_token': csrfToken
        };
        $.post("create-blog", data, function(data){
            self.setState({
                status: 3
            });
        });
    },

    onPathChange: function(path) {
        this.setState({
            path: secureURL + '/img/' + path,
            imagePath: path
        });
    },
});


module.exports = BlogEditor;