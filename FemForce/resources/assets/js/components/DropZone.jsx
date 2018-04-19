var React          = require('react');
var DropZone       = require('react-dropzone');
var ImageActions   = require('../actions/ImageActions');
var Immutable      = require('immutable');
var LoadingIndicator   = require('./LoadingIndicator');

var Uploader = React.createClass({
    getInitialState: function() {
        return {
            path: "",
            loading: false,
            alerts: [],
        };
    },
    getDefaultProps: function() {
        return {
            width: 400,
            height: 200,
            onChange: function(){}
        }
    },
    onDrop: function (files) {
        event.stopPropagation(); // Stop stuff happening
        event.preventDefault(); // Totally stop stuff happening
        var self = this;
        this.setState({
            loading: true
        });
        if (files[0].size > 5242880){
            self.refs.alert.showAlert("File size must be less than 5Mb");
            self.setState({
                loading: false
            });
        }

        ImageActions.create(files, function (path) {
            if (path.responseText == "File type  not supported") {
                self.refs.alert.showAlert("File type not supported");
                self.setState({
                    loading: false
                });
            }
            else {
                self.setState({
                    path: path.responseText,
                });
                self.props.onChange(path.responseText);
            }
        });

    },

    render: function () {
        var placeholder = '/upload.png';
        return (
            <div>
                {(this.state.loading) ?  <LoadingIndicator margin="120px auto"/>
                    :
                    <DropZone
                        multiple={false}
                        onDrop={this.onDrop}
                        accept={'image/*'}
                        style={this.props.style}>
                        <img src={secureURL + placeholder} width={this.props.width} height={this.props.height} style={this.props.style}/>
                    </DropZone>
                }
                {/*<Alert ref="alert"/>*/}
            </div>

        );
    },
    val: function () {
        return this.state.path;
    }
});

module.exports = Uploader;