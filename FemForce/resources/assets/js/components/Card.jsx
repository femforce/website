var React = require('react');

var Card = React.createClass({
    getDefaultProps: function() {
        return ({
            panelBodyStyle: {
                marginTop: "100px"
            }
        });
    },

    render: function() {
        return (
            <div className={this.props.size} style={this.props.style}>
                <div className="panel panel-default card">
                    <div style={{position: "relative"}}>
                        <img src={secureURL + "/pexels-photo-209234.jpeg"} height={350} width={540}/>
                        <div className="blog-title" style={{position: "absolute", left: "160px", top: "250px", width: "200px", height: "200px"}}>
                            {this.props.children[0]}
                        </div>
                    </div>
                    <div className={this.props.modal ? "panel-body card-modal" :  "panel-body" } style={this.props.panelBodyStyle}>
                        {this.props.children[1]}
                    </div>
                </div>
            </div>
        )
    }
});
module.exports = Card;