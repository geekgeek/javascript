import React, { Component } from 'react';

/**
 * 
 * props: 
 * 		url string of the url
 * */
class Api_grabber extends Component {
	
  constructor(props)
  {
	super(props);
	this.state = 
	{
			externaldata:""
	}
	
	this.data = [];
	
	  this.httpGetAsync = this.httpGetAsync.bind(this);
	  this.callback = this.callback.bind(this);
	
  }
  	componentDidMount()
	{
		//this.httpGetAsync("http://data24324324.com", this.callback);
		this.httpGetAsync(this.props.url, this.callback);


	}
	
	
	callback(thevalue)
	{
		console.log("callback");
		console.log(thevalue);
	
		this.setState({externaldata:thevalue})
		
		
	}
	

	httpGetAsync(theUrl, callback)
	{
		
		var xmlHttp = new XMLHttpRequest();
		xmlHttp.onreadystatechange = function() {
			
			if (xmlHttp.readyState === 4 && xmlHttp.status === 200)
				callback(xmlHttp.responseText);
				//return xmlHttp.responseText
		
		}
		

		xmlHttp.open("GET", theUrl, true); // true for asynchronous 
		xmlHttp.send(null);
	}


  render() {
    return (
    <div className="projects">
    <h1>external data</h1>
		<p>{this.state.externaldata}</p>
      </div>
    )
  }



}

export default Api_grabber;
