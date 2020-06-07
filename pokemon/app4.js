    var context;
    var gradient;

//____PLAYER 1_____________________
    var zKey = false;
    var sKey = false;
    
    var block_x;
    var block_y;

    var scorep1 = 0;

    var imageObj1 = new Image(); // img
    var imgp1 = 'players/p1/logo_charizard.png';
    imageObj1.src = imgp1;

//____PLAYER 2____________________
    var upKey = false;
    var downKey = false;

    var block_x2;
    var block_y2;

    var scorep2 = 0;

    var imageObj2 = new Image(); // img
    var imgp2 ='players/p2/logo_blastoise.png';
    imageObj2.src = imgp2;

//____PLAYER OBJECT__________________
    var player1,player2;
    var block_h = 90;
    var block_w = 90;
    var play_velY = 7;

    function Player(x,y,width,height){
      this.w = width;
      this.h = height;
      this.x = x;
      this.y = y;
      //this.update = function() { ... }
    }

//____BALL OPTIONS_____________________
    var ball_w = 50;  // vierkant
    var ball_h = 50;
    var ball_x = 375;
    var ball_y = 225;

    var velX = 7;
    var velY = 3;

    var imageObj3 = new Image();
    imageObj3.src = 'balls/ball01.png';

//___SOUNDS__________________________
 // var audioContext = new AudioContext(){
      var paddlevsball = new Audio('/sounds/padvball.wav');
      var soundCharizard = new Audio('/sounds/charizard.wav');
      var soundBlastoise = new Audio('/sounds/blastoise.wav');
      var ballblock = new Audio('/sounds/blop.wav');
 // }
    

//___CALL FUNCTIONS___________________

function init() {
  context = $('#canvas')[0].getContext('2d');

  //Width & height off canvas + block (player) positions
  WIDTH = $('#canvas').width();
  HEIGHT = $('#canvas').height();

  block_x = WIDTH - 750; // WIDTH -780
  block_y = 170; // 170

  block_x2 = WIDTH - 120; // WIDTH -70
  block_y2 = 170; // 170

  gradient = context.createLinearGradient(0,0,WIDTH,HEIGHT);
        gradient.addColorStop("0","black");
        gradient.addColorStop("0.1","red");
        gradient.addColorStop("0.5","blue");
        gradient.addColorStop("0.9","black");
        
  context.fillStyle=gradient;
  context.font='30px "arial" ';
  
  var background = new Image();
    background.src = "bgs/bg01.png";
  
  background.onload = function(){
     context.drawImage(background,0,0); 
  }
      
  player1 = new Player(block_x,block_y,block_w,block_h);
  player2 = new Player(block_x2,block_y2,block_w,block_h);
       
  setInterval('draw()', 16);
  setInterval('updateGame()',16);
}

function clearCanvas() { 
  // Functie die aangeroepen kan worden om canvas leeg te maken
  context.clearRect(0,0,WIDTH,HEIGHT);
}

function draw(){ 
  clearCanvas();

  // Draw player 1 
  context.drawImage(imageObj1, block_x, block_y, block_w, block_h);

  // Draw Player 2 
  context.drawImage(imageObj2, block_x2, block_y2, block_w, block_h);
 
  // Draw Ball
  context.drawImage(imageObj3, ball_x, ball_y, ball_w, ball_h); 

  // Draw Score
  context.fillText(scorep1,250,25);
  context.fillText(scorep2,550,25);
}

function resetBall(){
  // ball back to center
  ball_x = WIDTH/2 - ball_w/2;
  ball_y = HEIGHT/2 - ball_h/2;
  velX *= -1;
}

function ballHitYBorder(){
  velY *= -1.;
  paddlevsball.play();
}

function ballHitPlayer(){
  velX *= -1;
  ballblock.play();
}

function updateGame(){
  // p1-update------------------------------------------------------
  if(zKey) block_y -=play_velY;
  else if (sKey) block_y +=play_velY;

  if (block_y <= 0) block_y = 0;
  if ((block_y + block_h) >= HEIGHT) block_y = HEIGHT - block_h;

  // p2-update-------------------------------------------------------
  if (upKey) block_y2 -=play_velY;
  else if (downKey) block_y2 +=play_velY;

  if (block_y2 <= 0) block_y2 = 0;
  if ((block_y2 + block_h) >= HEIGHT) block_y2 = HEIGHT - block_h;

  // ball-update-----------------------------------------------------
    ball_x += velX;
    ball_y += velY;

    //___PLAYER SCORES__________________

      // if p2 fails to return ball
    if(ball_x + ball_w > WIDTH ){
        scorep1 += 1;     // p1 receives point
        soundCharizard.play();     // p1.laugh

        resetBall();      // algemeen: reset
      }

      // if p1 fails to return ball
    if(ball_x - ball_w/2 < 0){
        scorep2 += 1;
        soundBlastoise.play();

        resetBall();
      } 

    //____BALL POSITION (top and bottom)_____
    if(ball_y + ball_h > HEIGHT) ballHitYBorder();
    if(ball_y <= 0) ballHitYBorder();

    //___BALL BLOCK BY PLAYER_______________
      //player1
        // bovenkant paddle 
   if(ball_x + ball_w/2 < block_x+block_w &&  ball_y + ball_h/2 >= block_y && ball_y <= block_y + block_h ) ballHitPlayer();
      //player2
   if(ball_x + ball_w/2 > block_x2 &&  ball_y + ball_h/2 >= block_y2 && ball_y <= block_y2 + block_h ) ballHitPlayer();     
}

function onKeyDown(evt) {
  if (evt.keyCode == 38) upKey = true;
  else if (evt.keyCode == 40) downKey = true;
 }

function onKeyDown2(evt){
  if (evt.keyCode == 90) zKey = true;
  else if (evt.keyCode == 83) sKey = true;
}

function onKeyUp(evt) {
  if (evt.keyCode == 38) upKey = false;
  else if (evt.keyCode == 40) downKey = false;
}

function onKeyUp2(evt){
  if (evt.keyCode == 90) zKey = false;
  else if (evt.keyCode == 83) sKey = false;
}

$(document).keydown(onKeyDown);
$(document).keyup(onKeyUp);

$(document).keyup(onKeyUp2);
$(document).keydown(onKeyDown2);

$(document).ready(function() {
    var audioElement = document.createElement('audio');
        audioElement.setAttribute('src', '/sounds/lastbattle.mp3');
        audioElement.setAttribute('autoplay', 'autoplay');
        audioElement.play(); 
});