<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/index/index.css') }}">

    <script src="https://kit.fontawesome.com/a5245399c2.js" crossorigin="anonymous"></script>
    <title>Project Blacklink</title>

    <link rel="shortcut icon" href="{{ asset('home_content/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('home_content/favicon.ico') }}" type="image/x-icon">
  </head>
  <body>
    <section id='#home'>
      <div class='content' id='home'>
        <div class='center'><img src=" {{ asset('home_content/logo.png') }}" style='width: 225px; height: 225px; left: 50'></div>
        
        <h1>First startup project to fly to the nearest Black Hole<br /><span style='font-size: 11px'>(not that really)</span></h1>

      </div>
    </section>

    <section id='mission'>
      <div class='mission-box'>
        <div class='mission-content'>
          Our goal? Reach this <i class="fas fa-arrow-down"></i> <br/> <br />
          <canvas id="particle" class='particles'></canvas>
        </div>
      </div>  
    </section>

    <section id='whatsnext'>
      <div class='whatsnext'>
        <div style="width: 30%; background-image: url('{{ asset('home_content/rocket.jpg') }}');"></div>
        <div class="container">
          <div class="row">
            <div class="col-8">
              <img src="{{ asset('home_content/rocket.jpg') }}" style='width: 750px; height: 450px;'>
            </div>
            <div class="col-4"><h1>Our first rocket launched to Proxima Centauri</h1> <br />
              <span style='font-size: 11px;'>(https://pixabay.com/pl/photos/rakieta-ses-9-launch-cape-canaveral-1245696/)</span>
            </div>
          </div>
          <br /><br /><br /><br />
          <div class="row">
              <div class="col-8"><h1>We connect the world giving the people jobs that ever dreamed about!</h1> <br />
              </div>
              <div class="col-4"><img src="{{ asset('home_content/connect.jpg') }}" style='width: 750px; height: 450px;'></div>
          </div>
          <br /><br /><br /><br />
          <div class="row">
              <div class="col-9"><img src="{{ asset('home_content/stars.jpg') }}" style='width: 900px; height: 450px;'></div>
              <div class="col-3"><h3><b>Discover</b> unknown! Nobody ever imagined, humanity will ever fly to black hole, but now it's possible.
                Join Blacklink now!
              </h3> <br />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id='career'>
      <div class='content'>
        <div class='container'>
        <div class="row">
        <div class="col-6">
        <input type='text' placeholder="Your email here"><br /><br />
        <button class='button'>Subscribe to newsletter</button>
        </div>
        <div class="col-6"><div class='career-content'>
        <input type='text' placeholder="Email"><br /><br />
        <input type='text' placeholder="Question"><br /><br />
        <button class='button'>Ask a question</button>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    

    <section id='contact'>
      <div class='contact-content'>
         <span style='text-align: center; font-size: 12px;'>Powered by ProtonCMS <br />
         Made with <span style="color: #e25555;">&#9829;</span> by Bartosz Rogowski<br />&copy; 2021 - Blacklink</span>
      </div>
    </section>


    <section id='contact'>
      <div class='content'>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script> 
window.requestAnimFrame=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(t){window.setTimeout(t,1e3/60)};var canvas=document.getElementById("particle"),ctx=canvas.getContext("2d");function Particle(t,i,s){this.angle=2*Math.random()*Math.PI,this.radius=Math.random(),this.opacity=(5*Math.random()+2)/10,this.distance=1/this.opacity*s,this.speed=3e-5*this.distance,this.position={x:t+this.distance*Math.cos(this.angle),y:i+this.distance*Math.sin(this.angle)},this.draw=function(){ctx.fillStyle="rgba(255,255,255,"+this.opacity+")",ctx.beginPath(),ctx.arc(this.position.x,this.position.y,this.radius,0,2*Math.PI,!1),ctx.fill(),ctx.closePath()},this.update=function(){this.angle+=this.speed,this.position={x:t+this.distance*Math.cos(this.angle),y:i+this.distance*Math.sin(this.angle)},this.draw()}}function Emitter(t,i){this.position={x:t,y:i},this.radius=30,this.count=3e3,this.particles=[];for(var s=0;s<this.count;s++)this.particles.push(new Particle(this.position.x,this.position.y,this.radius))}canvas.width=window.innerWidth,canvas.height=window.innerHeight,Emitter.prototype={draw:function(){ctx.fillStyle="rgba(0,0,0,1)",ctx.beginPath(),ctx.arc(this.position.x,this.position.y,this.radius,0,2*Math.PI,!1),ctx.fill(),ctx.closePath()},update:function(){for(var t=0;t<this.count;t++)this.particles[t].update();this.draw()}};var emitter=new Emitter(canvas.width/2,canvas.height/2);function loop(){ctx.clearRect(0,0,canvas.width,canvas.height),emitter.update(),requestAnimFrame(loop)}loop();
    </script>
  </body>
</html>
