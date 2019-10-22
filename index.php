<html>
<head>
    <style>
        
        @import "https://fonts.googleapis.com/css?family=Permanent+Marker";
html, body {
  font-size: 1.1em;
  font-family: 'Permanent Marker', cursive;
}

.wrapper {
  position: relative;
  width: 400px;
  height: 300px;
  margin: auto;
  margin-top: 100px;
  perspective: 800px;
  perspective-origin: 10% -10%;
}

.bg {
  width: 100%;
  height: 100%;
  position: relative;
  background: #53777A;
  border-radius: 5px;
  transform: rotateY(-10deg);
  box-shadow: 20px -5px 30px rgba(0, 0, 0, 0.4);
}

.content {
  position: absolute;
  right: -40px;
  top: 20px;
  width: 350px;
  height: 300px;
  background: #dd6e58;
  border-radius: 50%;
  text-align: center;
  transform: perspective(800px) translateZ(20px);
  box-shadow: 10px -5px 20px rgba(0, 0, 0, 0.2);
}
.content p {
  position: relative;
  margin: auto;
  top: 30%;
  width: 60%;
}

div.btn-wrapper {
  position: absolute;
  top: 200px;
  left: -40px;
}

div.cube {
  height: 90px;
  width: 180px;
  transform: rotateY(15deg);
  position: relative;
  transform-style: preserve-3d;
  transform-origin: 50% 50%;
  font-size: 1.5em;
}
div.cube .msg {
  position: absolute;
}
div.cube .success {
  background: #5faf62;
  display: none;
}
div.cube .fail {
  background: #C02942;
  display: block;
}
div.cube.show-success .back {
  background: #5faf62;
}
div.cube.show-success .success {
  display: block;
}
div.cube.show-success .fail {
  display: none;
}

.cube-ani {
  animation: press .5s ease, spin .35s ease .5s, show-top 1.5s ease .85s;
}

.spin {
  animation: spin-up 1s ease-out 0s 1;
}

.face {
  position: absolute;
  height: 90px;
  width: 90px;
  backface-visibility: true;
  background: #d5482e;
}

.face.front {
  height: 90px;
  width: 180px !important;
  background: #D95B43;
  transform: translateZ(45px);
}

.face.back {
  height: 90px;
  width: 180px !important;
  background: #C02942;
  transform: rotateX(-180deg) translateZ(45px);
}

.face.text {
  display: flex;
  align-items: center;
  justify-content: center;
}

.right {
  transform: rotateY(90deg) translateZ(135px);
}

.left {
  transform: rotateY(-90deg) translateZ(45px);
}

.top {
  width: 180px;
  height: 90px;
  background: #dc6650;
  transform: rotateX(90deg) translateZ(45px);
}

.bottom {
  width: 180px;
  height: 90px;
  transform: rotateX(-90deg) translateZ(45px);
}

@keyframes press {
  0% {
    transform: rotateY(15deg) translateZ(0px);
  }
  50% {
    transform: rotateY(15deg) translateZ(-25px);
  }
  100% {
    transform: rotateY(15deg) translateZ(0px);
  }
}
@keyframes spin {
  from {
    transform: rotateY(15deg) rotateX(0deg);
  }
  to {
    transform: rotateY(15deg) rotateX(360deg);
  }
}
@keyframes show-top {
  0% {
    transform: rotateY(15deg) rotateX(0deg);
  }
  20% {
    transform: rotateY(15deg) rotateX(-190deg);
  }
  25% {
    transform: rotateY(15deg) rotateX(-180deg);
  }
  80% {
    transform: rotateY(15deg) rotateX(-180deg);
  }
  100% {
    transform: rotateY(15deg) rotateX(0deg);
  }
}
@keyframes spin-up {
  0% {
    transform: translateY(70px) rotateY(0deg) scale3d(0, 0, 0);
  }
  70% {
    transform: translateY(-20px) rotateY(1024deg) scale3d(1, 1, 1);
  }
  100% {
    transform: translateY(0px) rotateY(1099deg) scale3d(1, 1, 1);
  }
}
        
        
        .spin:hover{
            animation: spinanim 2s ease-in-out infinite;

        }  
        @keyframes spinanim{
            0% {
                transform: translateY(-20px) rotateY(-20deg) scale3d(1,1,1);
            }
            50% {
                transform: translateY(-20px) rotateY(20deg) scale3d(1,1,1);
            }
            100% {
                transform: translateY(-20px) rotateY(-20deg) scale3d(1, 1, 1);
            }
        }
        
        
        
/*-----------------------------------------------------Heading-------------------------------------------------------------*/        
                    
            
            h1{
                font-size: 70px;
                color:darkgrey;
                font-family: showcard gothic;
                
            }  
            
.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 2s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes rubberBand {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }

  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1);
  }

  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1);
  }

  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1);
  }

  65% {
    -webkit-transform: scale3d(0.95, 1.05, 1);
    transform: scale3d(0.95, 1.05, 1);
  }

  75% {
    -webkit-transform: scale3d(1.05, 0.95, 1);
    transform: scale3d(1.05, 0.95, 1);
  }

  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

@keyframes rubberBand {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }

  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1);
  }

  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1);
  }

  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1);
  }

  65% {
    -webkit-transform: scale3d(0.95, 1.05, 1);
    transform: scale3d(0.95, 1.05, 1);
  }

  75% {
    -webkit-transform: scale3d(1.05, 0.95, 1);
    transform: scale3d(1.05, 0.95, 1);
  }

  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

.rubberBand {
  -webkit-animation-name: rubberBand;
  animation-name: rubberBand;
}
        
        body{
                background: url("back.jpg") no-repeat center top;
    background-size: 100%;
    min-height: 670px;
    width: 100%;
        }

        
        
    
    </style>
    <script>
        
        var cube = document.querySelector('.cube');
var success = true;
var messageClass = '';

cube.addEventListener('click', function (e) {
	cube.classList.add('cube-ani');
	cube.classList.toggle('show-success');
});

cube.addEventListener('animationend', function (e) {
	if (e.animationName === 'show-top') {
		cube.classList.remove('cube-ani');
	} else if (e.animationName === 'spin-up') {
		cube.classList.remove('spin');
	}
});
        
        
    </script>
    
</head>
<body>
    
            
        <center>
        <h1 class="animated rubberBand">Online Voting</h1>
           
        </center>
    
<div class="wrapper">
  
    <div class="content">
      <p>Welcome to Online Voting System..!!!</p>

  </div>
<a href="login.php">    
  <div class="btn-wrapper">
    <div class="cube spin">
      <div class="face front text">Click Me!</div>
      <div class="face back text"> 
        <div class="msg success">Success!</div>
        <div class="msg fail">Fail</div>
      </div>
      <div class="face right"></div>
      <div class="face left"></div>
      <div class="face top"></div>
      <div class="face bottom"></div>
    </div>
  </div>
    </a>    
</div>
    
    
    </body>
</html>