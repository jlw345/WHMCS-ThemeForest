/* By Brandio */
 
 "use strict";
(function (lib, img, cjs) {

var p; // shortcut to reference prototypes

// library properties:
lib.properties = {
	width: 50,
	height: 50,
	fps: 24,
	color: "#693AB5",
	manifest: []
};



// symbols:



(lib.boxopen = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AhTBUIAAinICnAAIAACng");

	this.addChild(this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-8.4,-8.4,17,17);


// stage content:
(lib.logo = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_0 = function() {
		/*
		var opened=false;
		
		this.on("click", function() {
			if(!opened){
				this.play();
				opened=true;
			}else{
				this.gotoAndPlay(30-this.timeline.position);
				opened=false;
			}
		});
		*/
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(134));

	// Layer 5
	this.instance = new lib.boxopen();
	this.instance.setTransform(19.3,14.5,0.821,0.851,0,68.9,20.8,-8.3,-0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(45).to({regX:-8.5,regY:0.4,scaleX:0.59,skewY:-48.8,x:18.8,y:14.6},13,cjs.Ease.get(1)).wait(61).to({regX:-8.4,scaleX:0.6,scaleY:0.85,skewX:69,skewY:-44.1,x:18.9},0).to({regX:-8.3,regY:-0.1,scaleX:0.82,scaleY:0.85,skewX:68.9,skewY:20.8,x:19.3,y:14.5},14).wait(1));

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AAFg8ICAgwIAACnIiAAygAiEA7IAAinICAAwIAACpg");
	this.shape.setTransform(25.5,28.8);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(134));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(37.1,36.9,26.8,27.9);

})(lib = lib||{}, images = images||{}, createjs = createjs||{});
var lib, images, createjs;