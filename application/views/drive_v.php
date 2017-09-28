<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>SKOTT - 호출</title>
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<style>

.h_logo{background-image:url("/static/image/header/logo.png");background-size: 100% 100%;background-repeat:no-repeat;display:block;overflow:hidden;width:100px;height:50px;margin:0 auto;background-position:-1px -1px}
.input_row{position:relative;height:150px;margin:0 0 14px;padding:10px 35px 10px 15px;border:solid 0px #dadada;border-radius:10px;text-align:center;background:#000}.input_row.focus{border:solid 1px #20bc01}.input_box{color:white;display:block;overflow:hidden;margin-top:-30px;}.int{font-size:15px;line-height:16px;position:relative;z-index:9;width:100%;height:16px;padding:7px 0 6px;color:#000;border:none;background:#fff;-webkit-appearance:none}.lbl{font-size:15px;text-align:center;line-height:16px;position:absolute;z-index:8;top:16px;left:15px;color:#999}.lbl{z-index:10}.wrg{position:absolute;z-index:1000;top:16px;right:13px;display:none;overflow:hidden;width:19px;height:19px;margin:0;padding:0;cursor:pointer;text-indent:-999px;border:0;background-color:transparent;background-position:-1px -263px}
.input_row{padding:10px 6px 10px 9px;} .login_form{ border:0px; margin-top:25%;}
.btn_global{font-size:20px;font-weight:700;line-height:61px;display:block;width:100%;height:61px;margin:30px 0 13px;padding-top:2px;cursor:pointer;text-align:center;color:#fff;border:none;border-radius:10px;background-color:#4d7e2b;-webkit-appearance:none}.btn_global:active,.btn_global:hover,.btn_global:link{text-decoration:none;color:#fff}
input {font-family:Helvetica,sans-serif;font-size:12px;-webkit-text-size-adjust:none}
input[type=textarea]{background:#000;border:0px;color:white;font-size:20px;}
input[type=submit]{margin-top:50%;}
/* menu icon 스타일*/
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

/* 
    loader
*/
.loader {
    display: none;
    background: #000;
    opacity: 0.7;
    filter: alpha(opacity=70); /* For IE8 and earlier */
    background: radial-gradient(#222, #000);
    bottom: 0;
    left: 0;
    overflow: hidden;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 99999;
}

.loader-inner {
    bottom: 0;
    height: 60px;
    left: 0;
    margin: auto;
    position: absolute;
    right: 0;
    top: 0;
    width: 100px;
}

.loader-line-wrap {
    animation: 
        spin 2000ms cubic-bezier(.175, .885, .32, 1.275) infinite
    ;
    box-sizing: border-box;
    height: 50px;
    left: 0;
    overflow: hidden;
    position: absolute;
    top: 0;
    transform-origin: 50% 100%;
    width: 100px;
}
.loader-line {
    border: 4px solid transparent;
    border-radius: 100%;
    box-sizing: border-box;
    height: 100px;
    left: 0;
    margin: 0 auto;
    position: absolute;
    right: 0;
    top: 0;
    width: 100px;
}
.loader-line-wrap:nth-child(1) { animation-delay: -50ms; }
.loader-line-wrap:nth-child(2) { animation-delay: -100ms; }
.loader-line-wrap:nth-child(3) { animation-delay: -150ms; }
.loader-line-wrap:nth-child(4) { animation-delay: -200ms; }
.loader-line-wrap:nth-child(5) { animation-delay: -250ms; }

.loader-line-wrap:nth-child(1) .loader-line {
    border-color: hsl(0, 80%, 60%);
    height: 90px;
    width: 90px;
    top: 7px;
}
.loader-line-wrap:nth-child(2) .loader-line {
    border-color: hsl(60, 80%, 60%);
    height: 76px;
    width: 76px;
    top: 14px;
}
.loader-line-wrap:nth-child(3) .loader-line {
    border-color: hsl(120, 80%, 60%);
    height: 62px;
    width: 62px;
    top: 21px;
}
.loader-line-wrap:nth-child(4) .loader-line {
    border-color: hsl(180, 80%, 60%);
    height: 48px;
    width: 48px;
    top: 28px;
}
.loader-line-wrap:nth-child(5) .loader-line {
    border-color: hsl(240, 80%, 60%);
    height: 34px;
    width: 34px;
    top: 35px;
}

@keyframes spin {
    0%, 15% {
        transform: rotate(0);
    }
    100% {
        transform: rotate(360deg);
    }
}
</style>

<style type="text/css">
    
.start_end {
    color :white;
    margin-top: -50px;
}

.start_content, .end_content {
    font-size: 22px;
}
#start_spot, #end_spot, #totalTime_spot, #totalDistance_spot, #taxiFare_spot{
    background-color: #000;
    color:#fff;
    border:0;
    font-size: 15px;
    text-align: center;
    width:100%;
    font-weight: bold;
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
                <div class="menu-trigger"><img src="/static/image/menu.png"/></div>
            <!-- content -->
                <h1><a href="/mains" class="h_logo" tabindex="1"></a></h1>
                    <form class="login_form" name="theForm" method="POST" action="/drive/cus_wide">
                        <div class="input_row" id="id_area">
                            <span class="input_box"><br><br><br>
                             <input type="text" name="start_spot" id="start_spot" wrap="virtual" value="<?=$start?>">에서
                             <input type="text" name="end_spot" id="end_spot" wrap="virtual" value="<?=$end?>">까지
                             약 <input type="text" id="totalTime_spot" wrap="virtual" value="<?=$totalTime?>">,
                             <input type="text" id="totalDistance_spot" wrap="virtual" value="<?=$totalDistance?>">
                             <input type="hidden" id="taxiFare_spot" value="<?=$taxiFare?>">
                             <input type="hidden" name="Slat" id="Slat_spot" value="<?=$Slat?>">
                             <input type="hidden" name="Slon" id="Slon_spot" value="<?=$Slon?>">
                             <input type="hidden" name="Elat" id="Elat_spot" value="<?=$Elat?>">
                             <input type="hidden" name="Elon" id="Elon_spot" value="<?=$Elon?>">
                             <input type="hidden" name="call_id" id="call_id" >
                             <input type="hidden" name="driveIdx" id="driveIdx" >
                            <span class="input_box"><br><br><br></span>
                        </div>
                    <input type="button" title="호출 하기" alt="호출 하기" value="호출 하기" class="btn_global" onclick="callDriver()">
                </form>
            <!-- </form> -->
    </div>
    <div class="loader">
        <div class="loader-inner">
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    function callDriver() {
        $.ajax ({
          type : 'POST',
          url : '/index.php/drive/drivecall',
          data : { departure: $('#start_spot').val(), destination: $('#end_spot').val(), modify: 'asdsa',
                    user_idx: "<?php echo $this->session->userdata('user_idx') ?>", totalTime: $('#totalTime_spot').val(),
                    totalDistance: $('#totalDistance_spot').val(), taxiFare: $('#taxiFare_spot').val(), Slat: $('#Slat_spot').val(),
                    Slon: $('#Slon_spot').val(), Elat: $('#Elat_spot').val(), Elon: $('#Elon_spot').val()
            },
          dataType : 'json',
          success : function (data) {
            alert("호출 버튼을 누르셨습니다. 잠시만 기다려주세요.");
            document.getElementsByClassName('loader')[0].style.display='block';
             // document.theForm.submit();
             idxx = data.call_id;
             document.getElementById('call_id').value= idxx;

            $(document).ready(function(){
                timerld = setInterval("waitCall()", 1000);
            });
    
          }
        });
    }

    function waitCall() {
                 $.ajax ({
                    type : 'POST',
                    url : '/index.php/drive/waitCall',
                    data : { call_id: $('#call_id').val() },
                    dataType : 'json',
                    success : function (data) {
                        document.getElementById('driveIdx').value= data.driveIdx;
                        document.theForm.submit();
                        clearInterval(timerld);
                    }
                 });
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