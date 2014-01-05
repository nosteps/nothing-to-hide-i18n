var Menu = {};

var RAF = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame;
Menu.start = function(){

	var drawnSinceLastUpdate = false;

	// Initialize
	var config = Asset.level.menu;
	var lvl = JSON.parse(JSON.stringify(config.level));
	var map = config.map;
	Menu.map = new Map(this,{
		map: map,
		art: lvl.art,
		propaganda: lvl.propaganda,
		goal: lvl.goal
	});
	// Shadows to scale of Tile Size
	for(var i=0;i<lvl.shadows.length;i++){
		var shadow = lvl.shadows[i];
		shadow.ax *= Map.TILE_SIZE;
		shadow.ay *= Map.TILE_SIZE;
		shadow.bx *= Map.TILE_SIZE;
		shadow.by *= Map.TILE_SIZE;
	}
	Menu.shadows = new ShadowController(this,{
		shadows: lvl.shadows
	});
	Menu.shadows.update();

	// Update loop
	setInterval(function(){
		Menu.update();
		drawnSinceLastUpdate = false;
	},1000/30);

	// Draw Loop
	function draw(){
		if(!drawnSinceLastUpdate){
			drawnSinceLastUpdate = true;
			Menu.draw();
		}
		RAF(draw);
	}
	draw();

};

Menu.update = function(){
	Menu.shadows.update();
};

var canvas = {
	menu: document.getElementById("screen"),
	tmp: document.createElement("canvas"),
};
var context = {
	menu: canvas.menu.getContext("2d"),
	tmp: canvas.tmp.getContext("2d")
};
var WIDTH = 1000;
var HEIGHT = 550;
canvas.menu.width = canvas.tmp.width = WIDTH;
canvas.menu.height = canvas.tmp.height = HEIGHT;

Menu.draw = function(){

	var ctx = context.menu;
	var ctxTemp = context.tmp;

	// Clear cam
	ctx.clearRect(0,0,WIDTH,HEIGHT);

	// Draw lines
	ctx.drawImage(Menu.map.lineCache,0,0);

	// Draw main layer
	ctxTemp.clearRect(0,0,WIDTH,HEIGHT);
	Menu.map.draw(ctxTemp);
	_mask(Menu.shadows.sightPolygon,ctxTemp);
	ctx.drawImage(canvas.tmp,0,0);

};

// Mask helper
var _mask = function(poly,ctx){

	// Create mask polygon path
	ctx.beginPath();
	ctx.moveTo(poly[0][0], poly[0][1]);
	ctx.fillStyle = "#000";
	for (var i = 1; i < poly.length; ++i) {
		ctx.lineTo(poly[i][0], poly[i][1]);
	}

	// Fill in mask
	ctx.globalCompositeOperation = "destination-in";
	ctx.fill();
	ctx.globalCompositeOperation = "source-over";

};

Asset.load().then(function(){
	console.log("===== LOADED! =====");
	Menu.start();
});