<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Hi! This is loader!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<!--       <link rel="stylesheet" href="css/style.css">
 -->

 <style type="text/css">
   
   @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900");
* {
  font-family: 'Source Sans Pro', sans-serif;
}

body {
  margin: 0;
  background: #FFEEAD;
}

.wrapper {
  height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.bom {
  background: #4d7e2b;
  margin: 0 16px;
  width: 4rem;
  height: 4rem;
}

.bom:nth-child(1) {
  -webkit-animation: bounce 1s ease-in-out 0s infinite;
          animation: bounce 1s ease-in-out 0s infinite;
}
.bom:nth-child(2) {
  -webkit-animation: bounce 1s ease-in-out 0.2s infinite;
          animation: bounce 1s ease-in-out 0.2s infinite;
}
.bom:nth-child(3) {
  -webkit-animation: bounce 1s ease-in-out 0.4s infinite;
          animation: bounce 1s ease-in-out 0.4s infinite;
}
.bom:nth-child(4) {
  -webkit-animation: bounce 1s ease-in-out 0.6s infinite;
          animation: bounce 1s ease-in-out 0.6s infinite;
}
.bom.hide {
  margin: 0;
  -webkit-animation: none;
          animation: none;
  -webkit-transition: margin ease 0.5s;
  transition: margin ease 0.5s;
  -webkit-animation: hide 0.5s ease-in-out 0.5s forwards;
          animation: hide 0.5s ease-in-out 0.5s forwards;
}

.booms {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  margin: auto;
  display: none;
  color: transparent;
  background: #4d7e2b;
  width: 16rem;
  height: 4rem;
  -webkit-animation: wrap;
          animation: wrap;
  z-index: -1;
}

.booms.visible {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  font-size: 5em;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-animation: wrap 1s 0.1s ease forwards;

}

@-webkit-keyframes hide {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    display: none;
    width: 0;
  }
}

@keyframes hide {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    display: none;
    width: 0;
  }
}
@-webkit-keyframes bounce {
  0%, 40%, 60%, 100% {
    -webkit-transform: translateY(0px);
            transform: translateY(0px);
  }
  25% {
    -webkit-transform: translateY(-30px);
            transform: translateY(-30px);
  }
  50% {
    -webkit-transform: translateY(-5px);
            transform: translateY(-5px);
  }
}
@keyframes bounce {
  0%, 40%, 60%, 100% {
    -webkit-transform: translateY(0px);
            transform: translateY(0px);
  }
  25% {
    -webkit-transform: translateY(-30px);
            transform: translateY(-30px);
  }
  50% {
    -webkit-transform: translateY(-5px);
            transform: translateY(-5px);
  }
}
@-webkit-keyframes wrap {
  60% {
    border-radius: 50%;
  }
  95% {
    height: 100%;
    width: 100%;
    color: transparent;
  }
  100% {
    height: 100%;
    width: 100%;
    color: #4d7e2b;
  }
}
@keyframes wrap {
  60% {
    border-radius: 50%;
  }
  95% {
    height: 100%;
    width: 100%;
    color: transparent;
  }
  100% {
    height: 100%;
    width: 100%;
    color: #FFEEAD;
  }

  #atag {
    margin-top: 10px;
  }

}

  #buttons {
    position:fixed; background-color:#4d7e2b; font-size:30px;color:#FFEEAD;border:none; 
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); cursor:pointer;
    display:none;margin-top:100px;margin-left:-100px;
  }

  #buttons2 {
    position:fixed; background-color:#4d7e2b; font-size:30px;color:#FFEEAD;border:none; 
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); cursor:pointer;
    display:none;margin-top:100px;margin-left:100px;
  }
 </style>
</head>

<body>
  <div class="wrapper">
  <div class="bom"></div>
  <div class="bom"></div>
  <div class="bom"></div>
  <div class="bom"></div>
  <div class="booms">
        S  K  O  T  T     </div>
        <button onclick="location.href='/mains'" id="buttons">한 국 어 </button>
        <button onclick="location.href='/mains_eng'" id="buttons2" >English</button>
       
</div>

    <script src="/static/js/start_main.js">
      </script>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

      <script type="text/javascript">

    $(document).ready(function(){ 
      setTimeout(function() { document.getElementById('buttons').style.display="block";
                      document.getElementById('buttons2').style.display="block"; }, 3500);
  });
    </script>
</body>
</html>