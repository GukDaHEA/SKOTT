<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Hi! Welcome This is SKOTT!</title>
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
  background: #f3753a;
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
  background: #f3753a;
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
  font-size: 3em;
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
    color: #f3753a;
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

 </style>
</head>

<body>
  <div class="wrapper">
  <div class="bom"></div>
  <div class="bom"></div>
  <div class="bom"></div>
  <div class="bom"></div>
  <div class="booms">
        S  K  O  T  T  ! <br>
        <button onclick="location.href='/mains'" style ="margin-top: 180px; background-color: #f3753a; font-size :30px;margin-left:-10%">START</button>
        <!-- <input type="submit" value="START" style="margin-top: 180px; background-color: #f3753a; font-size :30px;margin-left:-10%" /> -->
 </div>
        </div>

    <script src="/static/js/start_main.js"></script>
</body>
</html>
