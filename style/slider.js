/*
	Featured Content Slider
	by: Chris Coyier
*/
/** {
	margin: 0; padding: 0; 
}
body {
	font-family: Arial, Helvetica, sans-serif; font-size: 10px; 
}

					  				  
/*
	UTILITY STYLES
*/				  				  
					  				  
/*.floatLeft { 
	float: left; margin-right: 10px;
}
.floatRight	{ 
	float: right; 
}
.clear 	{ 
	clear: both; 
}
a {
	outline: none; 
}*/


/*
	PAGE STRUCTURE
*/
#slider 	{
	 width: 800px;
	 margin: 20px auto; 
	 position: relative; 
	 min-height: 500px;
	 
	}


/*
	TYPOGRAPHY
*/

/*a, a:visited { 
	color: #729dff;
	text-decoration: none; 
}*/

.wrapper h1 {
	font-size: 22pt;
}
blockquote { 
	padding: 0 20px;
	margin-left: 20px;
	margin-top: 10px; 
	border-left: 20px solid #ccc;
	font-size: 22px; 
	font-family: Georgia, serif; 
	font-style: italic; 
	
	
}

/*
	SLIDER
*/
.slider-wrap { 
	width: 800px; 
	position: absolute;
	top: 0px;
	left: auto;
}			
.stripViewer .panelContainer .panel ul	{ 
	text-align: left; 
	margin: 0 15px 0 30px;
 }
.stripViewer { 
	position: relative; 
	overflow: hidden; 
	width: 800px; 
	height: 400px;
}
.stripViewer .panelContainer { 
	position: relative;
	left: 0;
	top: 0; 
}
.stripViewer .panelContainer .panel	{ 
	float: left; 
	height: 460px; 
	position: relative; 
	width: 800px; 
	background-color: rgba(255,255,204,.5);
}
.stripNavL, .stripNavR, .stripNav { 
	display: none; 
}
.nav-thumb 	{
	 border: 1px solid black; 
	 margin-right: 5px; 
}
#movers-row	{ 
	margin: -64px 0 0 62px; 
	padding-left: 70px;
}
#movers-row div	{ 
	width: 20%; 
	float: left; 
}
#movers-row div a.cross-link { 
	float: right; 
}
.photo-meta-data {
	background: url(resources/transpBlack.png); 
	padding: 10px; 
	height: 30px; 
	margin-top: -50px; 
	position: relative; 
	z-index: 9999;  
}
.photo-meta-data a {
	font-size: 13px; 
	color: white;
	text-decoration: underline;
}


.cross-link	{ 
	display: block; 
	width: 133px;
	height: 63px; 
	margin-top: -14px; 
	position: relative; 
	padding: 15px 0 0 0;
	z-index: 9999; 
}



.active-thumb { 
	background: transparent url(resources/icon-uparrowsmallwhite.png) top center no-repeat; 
}






