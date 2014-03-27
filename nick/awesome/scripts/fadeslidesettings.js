/* Ultimate Fade-in slideshow (v2.4)
* Last updated: May 24th, 2010. This notice must stay intact for usage 
* Author: Dynamic Drive at http://www.dynamicdrive.com/
* Visit http://www.dynamicdrive.com/ for full source code
*/
var mygallery=new fadeSlideShow({
	wrapperid: "scroller", //ID of blank DIV on page to house Slideshow
	dimensions: [900, 250], //width/height of gallery in pixels. Should reflect dimensions of largest image
	imagearray: [
		["images/scroller/agame.jpg"],["images/scroller/artcritique.jpg"],["images/scroller/coworking.jpg"],["images/scroller/curt.jpg"],["images/scroller/ehofdanab.jpg"],["images/scroller/lancakes.jpg"],
		["images/scroller/leadlex.jpg"],["images/scroller/lukebrian.jpg"],["images/scroller/mx10.jpg"],["images/scroller/pingpong.jpg"],["images/scroller/startupwkd.jpg"],["images/scroller/touchscreen.jpg"]
	//<--no trailing comma after very last image element!
	],
	displaymode: {type:'auto', pause:4000, cycles:0, wraparound:false, randomize:true},
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 1000, //transition duration (milliseconds)
	descreveal: "none",
	togglerid: ""
})		