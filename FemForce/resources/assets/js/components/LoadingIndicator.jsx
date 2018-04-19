var React = require('react');

var LoadingIndicator = React.createClass({
    getDefaultProps: function() {
        return {
            height: '80px',
            width:  '80px',
            margin: '0 auto'
        }
    },
    render: function() {
        return (
            <div className="sk-circle" style={this.getStyle()}>
                <div className="sk-circle1 sk-child"></div>
                <div className="sk-circle2 sk-child"></div>
                <div className="sk-circle3 sk-child"></div>
                <div className="sk-circle4 sk-child"></div>
                <div className="sk-circle5 sk-child"></div>
                <div className="sk-circle6 sk-child"></div>
                <div className="sk-circle7 sk-child"></div>
                <div className="sk-circle8 sk-child"></div>
                <div className="sk-circle9 sk-child"></div>
                <div className="sk-circle10 sk-child"></div>
                <div className="sk-circle11 sk-child"></div>
                <div className="sk-circle12 sk-child"></div>
            </div>
        )
    },
    getStyle: function() {
        return this.props;
    }
});
module.exports = LoadingIndicator;