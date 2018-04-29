var React = require('react');

var Card = React.createClass({
    getDefaultProps: function() {
        return ({
            panelBodyStyle: {
            }
        });
    },

    render: function() {
        return (
            <div className={this.props.size} style={this.props.style}>
                <div className="panel panel-default card">
                    {this.props.children[0]}
                    <div className={this.props.modal ? "panel-body card-modal" :  "panel-body" } style={this.props.panelBodyStyle}>
                        {this.props.children[1]}
                    </div>
                </div>
            </div>
        )
    }
});
module.exports = Card;