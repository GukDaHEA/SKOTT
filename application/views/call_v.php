<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>SKOTT - 기사</title>
</head>
<style>
.h_logo{display:block;overflow:hidden;width:100px;height:50px;top:20px;left:150px;margin:0 auto;background-position:-1px -1px}
.h_logo{background-image:url("/static/image/header/logo.png");background-size: 100% 100%;background-repeat:no-repeat;margin-top:10px;}
#wrap{position:relative;min-height:80%;background-color: #3e3e3e}

#container{padding-bottom:100px}
.input_row{position:relative;height:150px;margin:0 0 14px;padding:10px 35px 10px 15px;border:solid 0px #dadada;border-radius:10px;text-align:center;background:#000}.input_row.focus{border:solid 1px #20bc01}.input_box{display:block;overflow:hidden}.int{font-size:15px;line-height:16px;position:relative;z-index:9;width:100%;height:16px;padding:7px 0 6px;color:#000;border:none;background:#fff;-webkit-appearance:none}.lbl{font-size:15px;text-align:center;line-height:16px;position:absolute;z-index:8;top:16px;left:15px;color:#999}.lbl{z-index:10}.wrg{position:absolute;z-index:1000;top:16px;right:13px;display:none;overflow:hidden;width:19px;height:19px;margin:0;padding:0;cursor:pointer;text-indent:-999px;border:0;background-color:transparent;background-position:-1px -263px}
 .login_form{ border:0px;margin-top:15%;}
.btn_global{font-size:20px;font-weight:700;line-height:61px;display:block;width:100%;height:61px;margin:30px 0 13px;padding-top:2px;cursor:pointer;text-align:center;color:#fff;border:none;border-radius:10px;background-color:#4d7e2b;-webkit-appearance:none}.btn_global:active,.btn_global:hover,.btn_global:link{text-decoration:none;color:#fff}
input {font-family:Helvetica,sans-serif;font-size:12px;-webkit-text-size-adjust:none}
.error{font-size:12px;line-height:16px;margin:-2px 0 12px;color:#ff1616}.error .error_info{color:#333}.error strong{font-size:15px;position:relative;top:3px}

body {
    margin: 0;
    color: #111111;
    background-color:#e5edf3;
}
/*
  Menu
*/
nav#slide-menu {
    position: fixed;
    top: 0;
    left: -100px;
    bottom: 0;
    display: block;
    float: left;
    width: 100%;
    max-width: 284px;
    height: 100%;

    -moz-transition: all 300ms;
    -webkit-transition: all 300ms;
    transition: all 300ms;
}

body.menu-active nav#slide-menu { left: 0px; }
body.menu-active nav#slide-menu ul { left: 0px; opacity: 1;}

/*
  Content
*/

    div#content {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #3e3e3e;
        overflow: scroll;
        border-radius: 0;

        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;

        -moz-box-shadow: -3px 0 6px darken(#556270, 5%);
        -webkit-box-shadow: -3px 0 6px darken(#556270, 5%);
        box-shadow: -3px 0 6px darken(#556270, 5%);

        -moz-transition: all 300ms;
        -webkit-transition: all 300ms;
        transition: all 300ms;
    }
    div.menu-trigger {
        position: fixed;
        top: 20px;
        left: 20px;
        width: 36px;
        height: 36px;
        cursor: pointer;
        border-radius: 5px;

        -moz-transition: all 300ms;
        -webkit-transition: all 300ms;
        transition: all 300ms;
    }

    img { max-width: 100%; width: auto !important; height: auto ; }

body.menu-active div#content { left: 150px; border-radius: 7px 0 0 7px; }
body.menu-active div#content .menu-trigger { left: 150px; }

/* 밀어서 잠금해제 스타일*/
input[type="range"] {
    width: 95%;
    left: 2%;
    background: -webkit-gradient(linear, 0 0, 0 bottom, from(#000), to(#1f1f1f));
    -webkit-appearance: none;
    border-radius: 10px;
    padding: 5px;
    transition: opacity 0.5s;
    position: relative;
}

input[type="range"]::-webkit-slider-thumb {
    -webkit-appearance: none;
    border-radius: 10px;
    background: -webkit-linear-gradient(top, #fafafa 0%,#dedede 50%,#cfcfcf 51%,#a3a3a3 100%);
    z-index: 1;
    width: 75px;
    position: relative;
    height: 50px;
}

input[type="range"]:before {
    content: "밀어서 퇴근";
    color: #8a8a8a;
    position: absolute;
    left: 110px;
    top: 10px;
    z-index: 1;
    font-size: 32px;
}

input[type="range"]::-webkit-slider-thumb:before {
    color: #8a8a8a;
    position: absolute;
    left: 5px;
    top: -10px;
    z-index: 1;
    font-size: 56px;
    font-weight: bold;
    content: "→";
}

/* 로딩 아이콘 css*/
.loading {
    /*position: fixed;*/
    top: 50%;
    left: 50%;
    /*margin: -14px 0 0 -42px;*/
    margin-left:40%;
    margin-top:10%;
    padding: 10px;
    background: rgba(20, 20, 20, 0.9);
  
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
  
    -webkit-box-shadow: inset 0 0 5px #000, 0 1px 1px rgba(255, 255, 255, 0.1);
    -moz-box-shadow: inset 0 0 5px #000, 0 1px 1px rgba(255, 255, 255, 0.1);
    -ms-box-shadow: inset 0 0 5px #000, 0 1px 1px rgba(255, 255, 255, 0.1);
    -o-box-shadow: inset 0 0 5px #000, 0 1px 1px rgba(255, 255, 255, 0.1);
    box-shadow: inset 0 0 5px #000, 0 1px 1px rgba(255, 255, 255, 0.1);
}

.loading-dot {
    float: left;
    width: 8px;
    height: 8px;
    margin: 0 4px;
    background: white;
  
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
  
    opacity: 0;
  
    -webkit-box-shadow: 0 0 2px black;
    -moz-box-shadow: 0 0 2px black;
    -ms-box-shadow: 0 0 2px black;
    -o-box-shadow: 0 0 2px black;
    box-shadow: 0 0 2px black;
  
    -webkit-animation: loadingFade 1s infinite;
    -moz-animation: loadingFade 1s infinite;
    animation: loadingFade 1s infinite;
}

.loading-dot:nth-child(1) {
    -webkit-animation-delay: 0s;
    -moz-animation-delay: 0s;
    animation-delay: 0s;
}

.loading-dot:nth-child(2) {
    -webkit-animation-delay: 0.1s;
    -moz-animation-delay: 0.1s;
    animation-delay: 0.1s;
}

.loading-dot:nth-child(3) {
    -webkit-animation-delay: 0.2s;
    -moz-animation-delay: 0.2s;
    animation-delay: 0.2s;
}

.loading-dot:nth-child(4) {
    -webkit-animation-delay: 0.3s;
    -moz-animation-delay: 0.3s;
    animation-delay: 0.3s;
}

@-webkit-keyframes loadingFade {
    0% { opacity: 0; }
    50% { opacity: 0.8; }
    100% { opacity: 0; }
}

@-moz-keyframes loadingFade {
    0% { opacity: 0; }
    50% { opacity: 0.8; }
    100% { opacity: 0; }
}

@keyframes loadingFade {
    0% { opacity: 0; }
    50% { opacity: 0.8; }
    100% { opacity: 0; }
}
a:link { color: red; text-decoration: none;}
 a:visited { color: black; text-decoration: none;}
 a:hover { color: blue; text-decoration: underline;}
 a:focus {  text-decoration: none; }

#label{
    display:none;
}
#label2{
    display:inline;

}
#label3{
    display:none;
}
#nul {
    background-color:#004400; 
}
</style>
<body class="chrome">
<!-- Navigation -->
    <nav id="slide-menu">
        <div id="myinfo">  </div>
        <ul>
            <li>내 기록</li>
            <li>개인 정보</li>
            <li>설정</li>
            <li>로그아웃</li>
        </ul>
    </nav>

    <!-- Content panel -->
    <div id="content">
        <!-- container -->
                <div class="menu-trigger"><img src="/static/image/menu.png"/></div>
                <h1><a href="/mains" class="h_logo" tabindex="1"></a></h1>
<div id="wrap">
                <form class="login_form">
                    <div class="input_row" id="id_area">
                        <span class="input_box"><br><br><br>
                            <label for="email" id="label" class="lbl" id="status" style="font-size:25px;font-weight:bold;top:30%;left:20%"><?php echo $this->session->userdata('car');?><br/><br/><?php echo $this->session->userdata('name')?> 기사님</label>
                        </span> <br>
                        <span class="input_box" id="label2">
                            <label for="email" id="label_email_area" class="lbl" id="status" style="font-size:50px;font-weight:bold;top:30%;left:18%">콜 대기중</label>
                            <div class="loading">
                                <div class="loading-dot"></div>
                                <div class="loading-dot"></div>
                                <div class="loading-dot"></div>
                                <div class="loading-dot"></div>
                            </div>
                        </span>
                        <span class="input_box">
                            <label for="email" id="label3" class="lbl" id="status" style="font-size:50px;font-weight:bold;top:30%;left:25%">운행 중</label>
                        </span>
                    </div>
                    <a href="javascript:doDisplay1();" ><div class="btn_global" id="nul">빈 차</div></a>
                    <a href="javascript:doDisplay2();"><div class="btn_global" id="active">운행 중</div></a>
                    </form>
            
                    <input type="range" class="slideToUnlock" value="0" max="100" onchange="RangeSlider(this)">
       
            <!-- tg-lang -->
    </div>
        <!-- //content -->
</div>
<META HTTP-EQUIV="refresh" CONTENT="15">
<script type="text/javascript">
// if(document.getElementById('label2').style.display == 'inline'){
    var result = confirm("<?php echo $departure ?> 에서 <?php echo $destination?> 까지 (<?php echo $distance ?>) 가는 콜이 있습니다. 수락하시겠습니까?");

    if(result) {
        $.ajax ({
          type : 'POST',
          url : '/index.php/drive/accept_call',
          data : { departure: $('#start_spot').val(), destination: $('#end_spot').val(), distance: '0', modify: 'asdsa',
                    user_idx: "<?php echo $this->session->userdata('user_idx') ?>"
            },
          dataType : 'json',
          success : function (data) {
             location.href="/index.php/drive/accept_call";
         }
        });

        // location.href="/index.php/drive/accept_call";
        location.replace('/mains');
    } else {

    }
// }
</script>
    <!-- 밀어서 잠금해제 javascript -->
<script type="text/javascript">

function RangeSlider() {
    theRange = document.querySelector("input[type=\"range\"]").value;
    if(theRange == 100) {
        theRange = 0;
        document.querySelector("input[type=\"range\"]").value = theRange;
        document.getElementById("label").style.display='inline';
        document.getElementById("label3").style.display='none';
        document.getElementById("label2").style.display='none';
        document.getElementById("nul").style.backgroundColor='#4d7e2b';
        document.getElementById("active").style.backgroundColor='#4d7e2b';
    } else {
        document.querySelector("input[type=\"range\"]").value = 0;
    }
}
</script>

<!-- 메뉴 아이콘 javascript -->
<script type="text/javascript">
var burger = $('.menu-trigger');

burger.each(function(index){
    var $this = $(this);
    
    $this.on('click', function(e){
        e.preventDefault();
        $(this).toggleClass('active-' + (index+1));
    })
});
</script>

<!-- 버튼 클릭시 화면 전환 -->
<script type="text/javascript">
    function doDisplay1(){
    document.getElementById("label").style.display='none';
    document.getElementById("label3").style.display='none';
    document.getElementById("label2").style.display='inline';
    document.getElementById("nul").style.backgroundColor='#004400'
    document.getElementById("active").style.backgroundColor='#4d7e2b';
}

    function doDisplay2(){
    document.getElementById("label").style.display='none';
    document.getElementById("label2").style.display='none';
    document.getElementById("label3").style.display='inline';
    document.getElementById("nul").style.backgroundColor='#4d7e2b';
    document.getElementById("active").style.backgroundColor='#004400'
}
    </script>


<script>
/*
  Slidemenu
*/
(function() {
    var $body = document.body
    , $menu_trigger = $body.getElementsByClassName('menu-trigger')[0];

    if ( typeof $menu_trigger !== 'undefined' ) {
        $menu_trigger.addEventListener('click', function() {
            $body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
        });
    }

}).call(this);
</script>
</body>
</html>