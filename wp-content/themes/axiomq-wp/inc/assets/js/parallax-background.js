jQuery( function ( $ ) {
  'use strict';
if(window.outerWidth >= 1200) {

var canvas = document.getElementById("canvas"),
    ctx = canvas.getContext('2d');

canvas.width = window.outerWidth;
canvas.height = window.outerHeight;

function checkIfScrolled(){
  if(window.pageYOffset <= 600){
    return false;
  }
  return true;
}
function checkIfTeamPage(){
  if(window.location.pathname.includes('team') || window.location.pathname.includes('wir-sind-axiomq')){
    return true;
  } else {
    return false;
  }
}

    var firstStars = [
       {x: 838, y: 255},
       {x: 968, y: 344},
       {x: 958, y: 389},
       {x: 1011, y: 510},
       {x: 1043, y: 593},
       {x: 1119, y: 549},
       {x: 1220, y: 657},
       {x: 1407, y: 502},
       {x: 1544, y: 384},
       {x: 1670, y: 277},
       {x: 1799, y: 167},
       {x: 1634, y: 181},
       {x: 1459, y: 199},
       {x: 1064, y: 238},
       {x: 891, y: 249},
       {x: 1048, y: 283},
       {x: 1083, y: 396},
       {x: 1233, y: 549},
       {x: 1176, y: 320},
       {x: 1288, y: 297},
       {x: 1381, y: 411},
       {x: 1351, y: 285},
       {x: 1432, y: 220},
       {x: 1500, y: 386},
       {x: 1515, y: 288},
       {x: 1633, y: 239},
       {x: 1532, y: 191},
       {x: 1709, y: 211},
       {x: 1765, y: 175},
       {x: 1055, y: 397}
    ];


var stars = [], // Array that contains the stars
  FPS = 5, // Frames per second
   x = 30, // Number of stars
   starColor = "#000000b8",
    mouse = {
      x: 0,
      y: 0
    };  // mouse location


// Push stars to array

for (var i = 0; i < x; i++) {
  if(!checkIfScrolled() && !checkIfTeamPage()) {
    var leftOffset = jQuery('.process').offset().left;
    var posx = firstStars[i].x;
    var posy = firstStars[i].y - window.pageYOffset;
  } else {
    x = 30;
   var posx = Math.random() * canvas.width;
   var posy = Math.random() * canvas.height;
  }
  stars.push({
    x: posx,
    y: posy,
    radius: 0.4,
    vx: Math.floor(Math.random() * 50) - 25,
    vy: Math.floor(Math.random() * 50) - 15
  });
}

// Draw the scene
function draw() {
  ctx.clearRect(0,0,canvas.width,canvas.height);

  ctx.globalCompositeOperation = "lighter";

  for (var i = 0, x = stars.length; i < x; i++) {
    var s = stars[i];

    ctx.fillStyle = starColor;
    ctx.beginPath();
    ctx.arc(s.x, s.y, s.radius, 0, 2 * Math.PI);

    ctx.fill();
    ctx.strokeStyle = starColor;
    ctx.stroke();
  }

  ctx.beginPath();
  for (var i = 0, x = stars.length; i < x; i++) {
    var starI = stars[i];
    ctx.moveTo(starI.x,starI.y);
    if(distance(mouse, starI) < 250) ctx.lineTo(mouse.x, mouse.y);
    for (var j = 0, x = stars.length; j < x; j++) {
      var starII = stars[j];
      if(distance(starI, starII) < 150) {
        ctx.lineTo(starII.x,starII.y);
      }
    }
  }
  ctx.lineWidth = 0.08;

  ctx.stroke();
}

function distance( point1, point2 ){
  var xs = 0;
  var ys = 0;

  xs = point2.x - point1.x;
  xs = xs * xs;

  ys = point2.y - point1.y;
  ys = ys * ys;

  return Math.sqrt( xs + ys );
}

// Update star locations

function update() {
  for (var i = 0, x = stars.length; i < x; i++) {
    var s = stars[i];

    s.x += s.vx / FPS;
    s.y += s.vy / FPS;

    if (s.x < 0 || s.x > canvas.width) s.vx = -s.vx;
    if (s.y < 0 || s.y > canvas.height) s.vy = -s.vy;
  }
}

window.addEventListener('mousemove', function(e){
  mouse.x = e.clientX;
  mouse.y = e.clientY;
});

//reduce number of "stars" and speed at which they move gradually
function startSlowDown(){
    for(var i=0; i<stars.length; i++){
      (function(i){
        setTimeout(function(){
          if(FPS < 20){
              FPS = FPS + 1;
              }

        }, 150 * i );
      })(i);
    }
};

// Update and draw
function tick() {
  draw();
  update();
  requestAnimationFrame(tick);
}

var oldPageYoffset = (function(){
  var pageYOffset = window.pageYOffset;
  return pageYOffset;
})();

var onScrollTick = function(e){
 if(oldPageYoffset !== window.pageYOffset) {
    startSlowDown();
    tick();
    jQuery('#background-holder').css('background', 'none');
    window.removeEventListener('scroll', onScrollTick);
 }
}
window.addEventListener('scroll',  onScrollTick);


/*
canvas.addEventListener('keypress', function (e) {

    if(e.keyCode === 13) {
        firstStars.push({
            x: mouse.x,
            y: mouse.y
        })
        console.log('x:' + mouse.x);
    } else if (e.keyCode == 115) {

        console.log(firstStars);
    }
}); */

if($('body').hasClass('home')){
  $(window).scroll(function(){
      if(window.pageYOffset >= $('#more.section-wrap').offset().top - 500 ) {
          //$('body').css('background-color', 'rgba(239, 239, 239, 0.66)');
          $('body').css('background-color', '#1cacb5');
          starColor = "#fff";
          if(window.pageYOffset >= $('#expertise-home').offset().top - 500 ) {
            //$('body').css('background-color', 'rgba(239, 239, 239, 0.66)');
            $('body').css('background-color', '#fff');
            starColor = "#000000b8";
          }
      } else if (window.pageYOffset < $('#more.section-wrap').offset().top - 300) {
          $('body').css('background-color', 'rgb(255, 255, 255)');
          starColor = "#000000b8";
      }
      if(window.pageYOffset >= $('.section-wrap.text-center.media-wrap').offset().top - 350) {
          $('body').css('background-color', '#1cacb5');
          starColor = "#fff";
      }
      if(window.pageYOffset >= $('.section-wrap.section-excerpt').offset().top - 550 ) {
          $('body').css('background-color', 'rgb(255, 255, 255)');
          starColor = "#000000b8";
      }
      

      
  });
}

}
});
