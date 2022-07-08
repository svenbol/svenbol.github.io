window.onload = function(){
	INIT();
	uur();		
}
window.onresize = function(){
	resized();
}
var keys = {
    up: false,
    down: false,
    right: false,
    left: false,
    shootP1: false,
    shootP2: false
}

var keys2 = {
	up: false,
	down: false,
    right: false,
    left: false,
    shootP1: false,
    shootP2: false
}

window.onkeydown = function(e) {
    switch(e.keyCode) {
        case 83:
            keys.down = true;
            return false;
        case 90:
            keys.up = true;
            return false;
        case 81:
            keys.left = true;
            return false;
        case 68:
            keys.right = true;
            return false;
        case 40:
            keys2.down = true;
            return false;
        case 38:
            keys2.up = true;
            return false;
        case 37:
            keys2.left = true;
            return false;
        case 39:
            keys2.right = true;
            return false;
        case 32:
        	keys.shootP1 = true;
        	shootDir = true;
        	return false;
        case 96:
        	keys.shootP2 = true;
        	shootDir = false;
        	return false;
    }
}
window.onkeyup = function(e) {
    switch(e.keyCode) {
        case 83:
            keys.down = false;
            return false;
        case 90:
            keys.up = false;
            return false;
        case 81:
            keys.left = false;
            return false;
        case 68:
            keys.right = false;
            return false;
        case 40:
            keys2.down = false;
            return false;
        case 38:
            keys2.up = false;
            return false;
        case 37:
            keys2.left = false;
            return false;
        case 39:
            keys2.right = false;
            return false;
        case 32:
        	keys.shootP1 = false;
        	return false;
        case 96:
        	keys.shootP2 = false;
        	return false;
    }
}
	
x = 100;		
y = 50;		
cW = 100;	
cH = 100;	
Xvelocity = 20;
Yvelocity = 10;
hp = 10;


const bullets = [];

maxBullets = 6;
const bulletsP1 = [];
const bulletsP2 = [];

class Bullet{
	constructor(playerX,playerY){
		this.width = 10;
		this.height = 10;
		this.x = playerX;
		this.y = playerY - cH/2;	
	}
	draw(){
		
		c.fillStyle = "black";
		c.beginPath();
		c.arc(this.x,this.y,10,0,2*Math.PI,false);
		c.closePath();
		
		//c.drawImage(spaceship,this.x,this.y,this.width,this.height);
	}
	collision(){
		if(this.x <= 0) delete this;
		if(this.x >= window.innerWidth/2)  delete this;
	}
}

class Player{
	constructor(x,y,name,color,shootDir,bulletList,ship,mapSide){
		this.width = cW;
		this.height = cH;
		this.hp = hp;
		this.x = x;
		this.y = y;
		this.name = name;
		this.color = color;
		this.shootDir = shootDir;
		this.bullets = bulletList;
		this.ship = ship;
		this.mapSide = mapSide;
	}
	draw(){
		c.font ="22px Verdana";
		c.fillStyle= this.color;
		//c.fillRect(this.x,this.y,this.width,this.height);
		c.drawImage(this.ship,this.x,this.y,this.width,this.height);
		c.fillText(this.name,this.x,this.y -10);
	}
	shoot(){
		//console.log(this.shootDir);
		if(bulletsP1.length <= maxBullets){
			if(this.shootDir == 'right'){
				bulletsP1.push({
					x: this.x + this.width/2,
					y: this.y + this.height/2
				});
			}
		}
		if(bulletsP2.length <= maxBullets){
			if(this.shootDir == 'left'){
				bulletsP2.push({
					x: this.x + this.width/2,
					y: this.y + this.height/2
				});
			}
		}
	}
	collision(){
		if(this.mapSide == 'left'){
			if(this.x <= 0) this.x = 0;															// OG
			if(this.x >= window.innerWidth/2-this.width) this.x = window.innerWidth/2 - this.width;
		}
		if(this.mapSide == 'right'){
			if(this.x <= window.innerWidth/2) this.x = window.innerWidth/2;						
			if(this.x >= window.innerWidth-this.width) this.x = window.innerWidth - this.width; // OG
		}
				
		if(this.y <= 0) this.y = 0;
		if(this.y >= window.innerHeight-this.height) this.y = window.innerHeight - this.height;

	}
	damage(){

	}
	collisionBullet(){

	}
}


var spaceship = document.getElementById("spaceship");
var spaceshipz = document.getElementById("spaceshipz");
var bullet1 = document.getElementById("bullet");
var bullet2 = document.getElementById("bullet2");
var soundFile = document.getElementById("soundFile");
/*
var soundFile1 = document.getElementById("soundFile1");
var soundFile2 = document.getElementById("soundFile2");
*/

player1 = new Player(x+50,y,'Player[1]','rgba(17,50,17,0.6)','right','bulletsP1',spaceship,'left');
player2 = new Player(x+250,y,'Player[2]','rgba(50,17,50,0.6)','left','bulletsP2',spaceshipz,'right');

var p1Health = document.querySelector('.barP1');
var p2Health = document.querySelector('.barP2');
//console.log(p1Health);
//console.log(p2Health);
p1Health.style.position = "fixed";
p1Health.style.top = player1.y + player1.height;
p1Health.style.left = player1.x;
p2Health.style.position = "fixed";
p2Health.style.top = player2.y;
p2Health.style.left = player2.x;
var lifePoints = 10;
var lifeBarGrp1 = document.querySelectorAll(".barP1 div");
var lifeBarGrp2 = document.querySelectorAll(".barP2 div");
var player1Hit = false;
var player2Hit = false;

var img = document.getElementById("bg-img");
var sound = document.getElementById("sound");
var grassblock = document.getElementById("grassblock");
var btnPlay = document.getElementById('btnPlay');
var btnSoundCounter = true;
var clouds = document.getElementById("clouds");

/* MAIN ----------------------------------------------------------------------------------------------- */

function INIT(){
	w = window.innerWidth;
	h = window.innerHeight;

	interval = 30;

	var canvas_wrapper = document.getElementById('canvas-wrap');
  		canvas_wrapper.innerHTML = '<canvas id="canvas" width="' + w + '" height="'+h+'"></canvas>';
	var canvas = document.getElementById("canvas");

	c = canvas.getContext("2d");
			
	renderer = setInterval(function(){ UPDATE(); },interval);
	clocker = setInterval(function(){ uur();},150000); // 2m30s || 2,5mins || 150.000sec
	
}

function UPDATE(){// LOOPED (in init)
	clearCanvas();
	c.drawImage(img,0,0,w,h); //bg-img

	/* update values */
	move();
	followPlayer();
	bulletCollision();

	/* Draw AFTER all updates */
	DRAW();
}

function DRAW(){
	player1.draw();
	player2.draw();

	/* DRAW LINE MID -------------------------------- */
	c.beginPath();
	c.moveTo(window.innerWidth/2,0);
	c.lineTo(window.innerWidth/2,window.innerHeight);
	c.lineWidth = 0.1;
	c.stroke();
	//-----------------------------------------------

	c.drawImage(clouds,0,0,window.innerWidth,window.innerHeight);

	for(i=0;i < bulletsP1.length;i++){
		var b = bulletsP1[i];
		bulletsP1[i].x += 25;
		c.fillRect(b.x,b.y,10,10);

		//c.drawImage(bullet1,b.x,b.y,20,20);
		if(bulletsP1[i].x >= w) bulletsP1.shift(); // || bulletsP2[i].x <= 0
	}

	for(i=0;i < bulletsP2.length;i++){
		var b = bulletsP2[i];
		bulletsP2[i].x -= 25;
		c.fillRect(b.x,b.y,10,10);
		//c.drawImage(bullet2,b.x,b.y,20,20);
		if(bulletsP2[i].x <= 0 ) bulletsP2.shift(); // || bulletsP2[i].x >= w
	}
}

/*---------------------------------------------------------------------------------------------------------- */

function move() {
	if(keys.up) player1.y -= Yvelocity;
	if(keys.down) player1.y += Yvelocity;
	if(keys.left) player1.x -= Xvelocity;
	if(keys.right) player1.x += Xvelocity;
	if(keys.shootP1) player1.shoot(player1.x,player1.y);

	if(keys2.up) player2.y -= Yvelocity;
	if(keys2.down) player2.y += Yvelocity;
	if(keys2.left) player2.x -= Xvelocity;
	if(keys2.right) player2.x += Xvelocity;
	if(keys.shootP2) player2.shoot(player2.x,player2.y);

	player1.collision();
	player2.collision();
}

function resized(){
	clearInterval(renderer);
	INIT();
}

function clearCanvas(){ 	
	c.clearRect(0, 0, w, h);
	//
}

function uur(){
	var date = new Date();

	var uur = date.getHours();
	var minuut = date.getMinutes();

	if(uur>=12) uur -= 12;				//math	
	uur = uur.toString();				//string om 2 "00" naast elkaar
	if(uur.length <2 || uur == "0")		uur = "0" + uur;

	while(!(minuut % 5 === 0))	minuut++;//same
	minuut = minuut.toString();			//same
	if(minuut.length <2)	minuut = "0" + minuut;
	if(minuut == "0") minuut ="00";
	if(minuut == "5") minuut = "05";
	if(minuut == "60"){ 
		uur++; 
		minuut = "00";
		if(uur==12) uur == "00";
		uur = uur.toString();
		if(uur.length <2 || uur == "0") uur = "0" + uur;
	}
	if(uur == "12") uur = "00";
	
	console.log(uur+":"+minuut);

	document.getElementById("clock").innerHTML = uur+":"+minuut;	
}
/*
function damage(){	
	if(lifePoints > 0)	{
		lifePoints-=1;
		var lifeBar = document.querySelectorAll(`.bar div:nth-child(n):nth-child(-n+${lifePoints})`);
	
		lifeBarGrp.forEach(function(item){
			item.style.backgroundColor = "red";
		});
	
		lifeBar.forEach(function(item){	
			item.style.backgroundColor = "green";		
		});
	}else if(lifePoints <= 0){
		lifePoints = 10;
		lifeBarGrp.forEach(function(item){
			item.style.backgroundColor = "green";	
		});
	} 	
}
*/
function damageP1(){
	if(player1.hp > 0){
		player1.hp -=1;
		var lifeBar = document.querySelectorAll(`.barP1 div:nth-child(n):nth-child(-n+${player1.hp})`);
	
		lifeBarGrp1.forEach(function(item){
			item.style.backgroundColor = "red";
		});
	
		lifeBar.forEach(function(item){	
			item.style.backgroundColor = "green";		
		});
	}else if(player1.hp <= 0){
		player1.hp = 10;
		lifeBarGrp1.forEach(function(item){
			item.style.backgroundColor = "green";	
		});
	} 	
}

function damageP2(){
	if(player2.hp > 0){
		player2.hp -=1;
		var lifeBar = document.querySelectorAll(`.barP2 div:nth-child(n):nth-child(-n+${player2.hp})`);
	
		lifeBarGrp2.forEach(function(item){
			item.style.backgroundColor = "red";
		});
	
		lifeBar.forEach(function(item){	
			item.style.backgroundColor = "green";		
		});
	}else if(player2.hp <= 0){
		player2.hp = 10;
		lifeBarGrp2.forEach(function(item){
			item.style.backgroundColor = "green";	
		});
	} 	
}

function followPlayer(){
	var hp1 = document.querySelector('.barP1');
	hp1.style.top = (player1.y+player1.height)+"px";
	hp1.style.left = player1.x+"px";

	var hp2 = document.querySelector('.barP2');
	hp2.style.top = (player2.y+player2.height)+"px";
	hp2.style.left = player2.x+"px";
}

function bulletCollision(){
	for(i=0;i < bullets.length;i++){
		//var b = bullets[i];

		var a = bulletsP1[i];
		var b = bulletsP2[i];

		if(	
			a.x > player2.x 					&&
			a.x < (player2.x + player2.width) 	&&	
			a.y > player2.y	 					&&
			a.y < (player2.y + player2.height)
		)player2Hit = true;
		else player2Hit = false;

		if(
			b.x > player1.x 					&&
			b.x < (player1.x + player1.width)	&&
			b.y > player1.y 					&&
			b.y < (player1.y + player1.height)
		)player1Hit = true;
		else player1Hit = false;

		
	}

	for(i=0;i < bulletsP1.length;i++){
		var a = bulletsP1[i];

		if(	
			a.x > player2.x 					&&
			a.x < (player2.x + player2.width) 	&&	
			a.y > player2.y	 					&&
			a.y < (player2.y + player2.height)
		)player2Hit = true;
		else player2Hit = false;		
	}

	for(i=0;i < bulletsP2.length;i++){
		var b = bulletsP2[i];

		if(
			b.x > player1.x 					&&
			b.x < (player1.x + player1.width)	&&
			b.y > player1.y 					&&
			b.y < (player1.y + player1.height)
		)player1Hit = true;
		else player1Hit = false;

	}


	if(player2Hit) damageP2();
	if(player1Hit) damageP1();
	/*
	console.log("COL: p1:" + player1Hit + " p2:" + player2Hit);
	console.log("HP: p1:" + player1.hp + " p2:" + player2.hp);
	*/
}

function loopSounds(){
	/* onended =>  <audio id="sound" onended="loopSounds()"> */

	console.log(soundFile.src);

	if(soundFile.src.includes('sound.mp3')) 
		soundFile.src = soundFile.src.replace('sound.mp3','sound2.mp3');
	else if(soundFile.src.includes('sound2.mp3')) 
		soundFile.src = soundFile.src.replace('sound.mp3','sound2.mp3');


	sound.load();
}

function controlSounds(){
	if(btnSoundCounter)	{
		sound.play();
		btnSoundCounter = false;
		btnPlay.querySelector('i').className = 'fas fa-pause';
	}
	else if(!btnSoundCounter){
		sound.pause();
		btnSoundCounter = true;
		btnPlay.querySelector('i').className = 'fas fa-play';
	} 
}

document.querySelector('button').addEventListener('click', function() {
  sound.play()//.then(() => { console.log('Playback resumed successfully');});
});