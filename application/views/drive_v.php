<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>SKOTT - 기사</title>
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<style>

#header{margin:0 10px}#header{position:relative;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;height:168px;:62px 0 0}
#header .h_logo{display:block;overflow:hidden;width:100px;height:80px;top:20px;left:150px;margin:0 auto;background-position:-1px -1px}#header .lang{position:absolute;top:20px;left:20px;width:10%;cursor:pointer;}
@media only screen and (min-width:1024px){#container,#header{width:768px;margin:0 auto!important}#content{width:460px;margin:0 auto}.error_browser p{width:460px;margin:0 auto}} 
@media screen and (min-width:460px){#content{width:460px;margin:0 auto}.error_browser p{width:460px;margin:0 auto} input[type=range]{width:400px;}}
.header_area{overflow:hidden;height:45px}.privacy_title{font-size:18px;font-weight:700;line-height:45px;text-align:center;color:#fff;background-color:#01c73c}.content_area{max-width:460px;margin:0 auto;padding:28px 10px 162px;background-color:#fff}
.h_logo{background-image:url("/static/image/header/logo.png");background-size: 100% 100%;background-repeat:no-repeat}
#wrap{position:relative;min-height:100%;background-color: #3e3e3e}
.lang{position:absolute;top:14px;right:0}
.login_form .blind{font-size:0;line-height:0;position:absolute;top:0;left:0;visibility:hidden;overflow:hidden;width:1px;height:1px}

#container{padding-bottom:100px}
.input_row{position:relative;height:150px;margin:0 0 14px;padding:10px 35px 10px 15px;border:solid 0px #dadada;border-radius:10px;text-align:center;background:#000}.input_row.focus{border:solid 1px #20bc01}.input_box{color:white;display:block;overflow:hidden;margin-top:-30px;}.int{font-size:15px;line-height:16px;position:relative;z-index:9;width:100%;height:16px;padding:7px 0 6px;color:#000;border:none;background:#fff;-webkit-appearance:none}.lbl{font-size:15px;text-align:center;line-height:16px;position:absolute;z-index:8;top:16px;left:15px;color:#999}.lbl{z-index:10}.wrg{position:absolute;z-index:1000;top:16px;right:13px;display:none;overflow:hidden;width:19px;height:19px;margin:0;padding:0;cursor:pointer;text-indent:-999px;border:0;background-color:transparent;background-position:-1px -263px}
.input_row{padding:10px 6px 10px 9px, margin:0;} .login_form{ border:0px;margin-top:-50px;}
.btn_global{font-size:20px;font-weight:700;line-height:61px;display:block;width:100%;height:61px;margin:30px 0 13px;padding-top:2px;cursor:pointer;text-align:center;color:#fff;border:none;border-radius:10px;background-color:#4d7e2b;-webkit-appearance:none}.btn_global:active,.btn_global:hover,.btn_global:link{text-decoration:none;color:#fff}
input {font-family:Helvetica,sans-serif;font-size:12px;-webkit-text-size-adjust:none}
.error{font-size:12px;line-height:16px;margin:-2px 0 12px;color:#ff1616}.error .error_info{color:#333}.error strong{font-size:15px;position:relative;top:3px}
.phishing_banner{margin:47px 0 15px;padding:25px 0 31px;border:1px solid #dce6ee;background-color:#e5edf3}.phishing_banner .sp{position:relative;width:396px;height:110px;margin:0 auto}.phishing_banner.bw_crome .sp{background-position:0 -670px}.phishing_banner.bw_safari .sp{background-position:0 -800px}.phishing_banner.bw_firefox .sp{background-position:0 -930px}.phishing_banner.bw_ie,.phishing_banner.toolbar{display:none} @media only screen and (max-device-width:1024px) and (-webkit-min-device-pixel-ratio:1.5),(min--moz-device-pixel-ratio:1.5),(-o-min-device-pixel-ratio:3/2),(min-device-pixel-ratio:1.5) {.phishing_banner.bw_safari .sp {background-position: 0 -790px;}.phishing_banner.bw_firefox .sp {background-position: 0 -910px;}}
input[type=textarea]{background:#000;border:0px;color:white;font-size:20px;}
input[type=submit]{margin-top:50%;}
/* menu icon 스타일*/
.menu-trigger {
    margin-right: 70px;
    margin-bottom: 50px;
}
.menu-trigger,
.menu-trigger span {
    display: inline-block;
    transition: all .4s;
    box-sizing: border-box;
}

.menu-trigger {
    position: relative;
    width: 50px;
    height: 44px;
}

.menu-trigger span {
    position: absolute;
    left: 0;
    width: 100%;
    height: 4px;
    background-color: #fff;
    border-radius: 4px;
}

.menu-trigger span:nth-of-type(1) {
    top: 0;
}

.menu-trigger span:nth-of-type(2) {
    top: 20px;
}

.menu-trigger span:nth-of-type(3) {
    bottom: 0;
}
menu-trigger.active-10 {
    -webkit-transform : rotate(90deg);
    transform : rotate(90deg);
}

/* 로딩 아이콘 css*/
.loading {
    /*position: fixed;*/
    /*margin: -14px 0 0 -42px;*/
    margin-left:35%;
    margin-top:0%;
    padding: 10px;
    background: rgba(20, 20, 20, 0.9);
    display:none;
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
</style>

<style type="text/css">
    
.start_end {
    color :white;
    margin-top: -50px;
}

.start_content, .end_content {
    font-size: 22px;
}
#start_spot{
    background-color: #000;
    color:#fff;
    border:0;
    font-size: 15px;
    text-align: center;
    width:100%;
    font-weight: bold;
}
#end_spot{
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

    <div id="wrap">
        <!-- header -->
        <div id="header">
            <h1><a href="/mains" class="sp h_logo" tabindex="1"></a></h1>
            <div class="lang">
                <a class="menu-trigger" href="javascript:;">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </div><!-- 
        <?php
        var_dump($this->session->userdata());
        ?> -->
        <!-- //header -->
        <!-- container -->
        <div id="container">
            <!-- content -->
            <div id="content">
                <div class="title">
                    <p></p>
                </div>
                <!-- <form id="frmNIDLogin" name="frmNIDLogin" action="javascript:log();" method="post"> -->
                    <form class="login_form" method="POST" action="/drive/cus_wide">
                        <legend class="blind">STATUS</legend>
                        <div class="input_row" id="id_area">
                            <span class="input_box"><br><br><br>
                             <input type="text" id="start_spot" wrap="virtual" value="<?=$start?>">에서
                             <input type="text" id="end_spot" wrap="virtual" value="<?=$end?>">까지
                            <span class="input_box"><br><br><br><!-- 
                             <input type="textarea" id="inputMessage" wrap="virtual" value="부천시 원미구 심곡동 부천대 에서 서울시 경복궁 까지">
 -->                           
<!-- 
                              <div class = "start_end">
                                  <div class = "start_content">부천시 원미구 심곡동 부천대</div> <br>에서<br><br>
                                  <div class = "end_content">정환이네 집까지 </div> 
                              </div> -->
                         </span>
                         <div class="loading">
                            <div class="loading-dot"></div>
                            <div class="loading-dot"></div>
                            <div class="loading-dot"></div>
                            <div class="loading-dot"></div>
                        </div>
                        <?php echo $this->session->userdata('user_idx') ?>
                    </div>
                    <!-- <button class="btn_global" onclick"">빈 차</button> -->
                    <input type="button" title="호출 하기" alt="호출 하기" value="호출 하기" class="btn_global" onclick="callDriver()">
                </form>
            <!-- </form> -->
        </div>
        <!-- tg-lang -->
    </div>
</div>

<script type="text/javascript">
    function callDriver() {
        $.ajax ({
          type : 'POST',
          url : '/index.php/drive/drivecall',
          data : { departure: $('#start_spot').val(), destination: $('#end_spot').val(), distance: '0', modify: 'asdsa',
                    user_idx: "<?php echo $this->session->userdata('user_idx') ?>"
            },
          // url : '/index.php/drive/call_send_start_end',
          // data : { departure: '부천시 원미구 심곡동 부천대', destination: '서울시 경복궁'},
          dataType : 'json',
          success : function (data) {
             alert("호출 버튼을 누르셨습니다.");
             location.href="/index.php/drive/cus_wide";
         }
    });
    }
</script>
<!-- //container -->
</body>
</html>