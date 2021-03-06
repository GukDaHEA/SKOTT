<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>SKOTT : 로그인</title>
          <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
              <script>
                $(document).ready(function() {
                  // Execute some code here
                });

                $(document).ready(function() {
                  $.ajaxSetup({ cache: true });
                  $.getScript('//connect.facebook.net/en_US/sdk.js', function(){
                    FB.init({
                      appId: '{720188158141280}',
                      version: 'v2.7' // or v2.1, v2.2, v2.3, ...
                    });     
                    $('#loginbutton,#feedbutton').removeAttr('disabled');
                    FB.getLoginStatus(updateStatusCallback);
                  });
                });
              </script>
</head>
<style>
#header{margin:0 10px}#header{position:relative;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;height:168px;padding:50px 0 0}#header .h_logo{line-height:999px;display:block;overflow:hidden;width:240px;height:100px;margin:0 auto;background-position:-1px -1px}#header .lang{position:absolute;top:14px;right:0}#header .lang .sel{font-size:12px;font-weight:400;min-width:95px;height:30px;padding:5px 10px 5px 7px;padding:7px 8px 6px 7px\9;cursor:pointer;color:#333;border:1px solid #ccc;border-radius:0}
@media only screen and (min-width:1024px){#container,#header{width:768px;margin:0 auto!important}#content{width:460px;margin:0 auto}.error_browser p{width:460px;margin:0 auto}} 
@media screen and (min-width:460px){#content{width:460px;margin:0 auto}.error_browser p{width:460px;margin:0 auto}}
.header_area{overflow:hidden;height:45px}.privacy_title{font-size:18px;font-weight:700;line-height:45px;text-align:center;color:#fff;background-color:#01c73c}.content_area{max-width:460px;margin:0 auto;padding:28px 10px 162px;background-color:#fff}
.h_logo{background-image:url("/static/image/header/logo.png");background-size: 100% 100%;background-repeat:no-repeat}
#wrap{position:relative;min-height:100%;background-color: #ffffff}
.title{margin-bottom:7px}.title p{font-size:13px;line-height:17px;color:#333}.title p .sevice{font-weight:700}a.btn_minor{font-size:13px;line-height:13px;display:inline-block;margin-top:6px;padding-right:11px;text-decoration:none;color:#999;background-position:100% -16px}
.lang{position:absolute;top:14px;right:0}#header .lang .sel{font-size:12px;font-weight:400;min-width:95px;height:30px;padding:5px 10px 5px 7px;padding:7px 8px 6px 7px\9;cursor:pointer;color:#333;border:1px solid #ccc;border-radius:0}
.title .sub_title{line-height:17px;padding-top:6px;color:#999}
.login_form .blind{font-size:0;line-height:0;position:absolute;top:0;left:0;visibility:hidden;overflow:hidden;width:1px;height:1px}
body{position:relative;height:100%;background:#f5f6f7}
#container{padding-bottom:100px}
.input_row{position:relative;height:29px;margin:0 0 14px;padding:10px 35px 10px 15px;border:solid 1px #dadada;background:#fff}.input_row.focus{border:solid 1px #20bc01}.input_box{display:block;overflow:hidden}.int{font-size:15px;line-height:16px;position:relative;z-index:9;width:100%;height:16px;padding:7px 0 6px;color:#000;border:none;background:#fff;-webkit-appearance:none}.lbl{font-size:15px;line-height:16px;position:absolute;z-index:8;top:16px;left:15px;color:#999}.lbl{z-index:10}.wrg{position:absolute;z-index:1000;top:16px;right:13px;display:none;overflow:hidden;width:19px;height:19px;margin:0;padding:0;cursor:pointer;text-indent:-999px;border:0;background-color:transparent;background-position:-1px -263px}
.input_row{padding:10px 6px 10px 9px, margin:0;} .login_form{clear:both; border:0px;margin-top:50px;}
.btn_global{font-size:20px;font-weight:700;line-height:61px;display:block;width:100%;height:61px;margin:30px 0 13px;padding-top:2px;cursor:pointer;text-align:center;color:#fff;border:none;border-radius:0;background-color:#4d7e2b;-webkit-appearance:none}.btn_global:active,.btn_global:hover,.btn_global:link{text-decoration:none;color:#fff}
input {font-family:Helvetica,sans-serif;font-size:12px;-webkit-text-size-adjust:none}
.error{font-size:12px;line-height:16px;margin:-2px 0 12px;color:#ff1616}.error .error_info{color:#333}.error strong{font-size:15px;position:relative;top:3px}
.phishing_banner{margin:47px 0 15px;padding:25px 0 31px;border:1px solid #dce6ee;background-color:#e5edf3}.phishing_banner .sp{position:relative;width:396px;height:110px;margin:0 auto}.phishing_banner.bw_crome .sp{background-position:0 -670px}.phishing_banner.bw_safari .sp{background-position:0 -800px}.phishing_banner.bw_firefox .sp{background-position:0 -930px}.phishing_banner.bw_ie,.phishing_banner.toolbar{display:none} @media only screen and (max-device-width:1024px) and (-webkit-min-device-pixel-ratio:1.5),(min--moz-device-pixel-ratio:1.5),(-o-min-device-pixel-ratio:3/2),(min-device-pixel-ratio:1.5) {.phishing_banner.bw_safari .sp {background-position: 0 -790px;}.phishing_banner.bw_firefox .sp {background-position: 0 -910px;}}
 @media screen and (max-device-width:450px){.phishing_banner{ display: none;} .position_a{margin-left: 30px} } 
 .fb-login-button{margin: auto;}
 @media screen and (max-device-width:1024px){ #taxi{
    float:right;
    background-color:#4d7e2b;
    color:white;
    width:20%;
    height:8%;
    font-weight:bold;
    text-align: center;
    padding-top: 7px;
    display:block;
    font-size:15px;
 }}
@media screen and (min-device-width:450px){
    #taxi{display:none;}
}
</style>
<body class="chrome">
    <?php 
    if ($this->session->flashdata('message')){
    ?>
    <script>
        alert('<?=$this->session->flashdata('message')?>');
    </script>
    <?php
    }
    ?>
<div id="wrap">
    <!-- header -->
    <div id="header">
        <h1><a href="/mains" class="sp h_logo" tabindex="1">SKOTT</a></h1>
    </div>
    <!-- //header -->
    <!-- container -->
    <div id="container">
        <!-- content -->
        <div id="content">
            <div class="title">
                <p></p>
            </div>
        <form id="frmNIDLogin" name="frmNIDLogin" action="/login/authentication" method="post">
                <fieldset class="login_form">
                    <legend class="blind">로그인</legend>
                    <div class="input_row" id="id_area">
                        <span class="input_box">
                            <input type="text" id="email" name="email" tabindex="7" class="int" maxlength="41" value="" placeholder="이메일">
                        </span>
                    </div>
                    <div class="input_row" id="pw_area">
                        <span class="input_box">
                            <input type="password" id="password" name="password" tabindex="8" class="int" maxlength="16" placeholder="비밀번호" >
                        </span>
                        <div class="ly_v2" id="err_capslock" style="display:none;">
                            <div class="ly_box">
                                <p><strong>Caps Lock</strong>이 켜져 있습니다.</p>                         </div>
                            <span class="sp ly_point"></span>
                        </div>
                    </div>
                    <div id="fb-root"></div>

                            <script>(function(d, s, id) {
                              var js, fjs = d.getElementsByTagName(s)[0];
                              if (d.getElementById(id)) return;
                              js = d.createElement(s); js.id = id;
                              js.src = "//connect.facebook.net/ko_KR/sdk.js#xfbml=1&version=v2.9&appId=720188158141280";
                              fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                            <div class="fb-login-button" data-width="61px" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"></div>
                           <!-- facebook login -->                     
                           <a href="/drive/call_login"><div id="taxi"> 택시기사 로그인 </div></a>
                    <input type="submit" title="로그인" alt="로그인" tabindex="12" value="로그인" class="btn_global" target="_blank">
                    <label><input type="checkbox" name="save_id" id="chk_save_id" value="on"  /> 아이디저장</label>
                    </fieldset>
            </form>
            <div class="position_a">
                <div class="find_info">
                    <a target="_blank" href="" onclick="try{nclks('log.searchid',this,event)}catch(e){}">아이디 찾기</a> <span class="bar">|</span> <a target="_blank" href="" onclick="try{nclks('log.searchpass',this,event)}catch(e){}">비밀번호 찾기</a> <span class="bar">|</span> <a href="/login/join">회원가입</a>               </div>
            </div>
            <div class="phishing_banner bw_crome">
                <div class="sp">
                    <span class="blind">
                    <strong>지금 로그인 하는 사이트가 어디인지 알고 계신가요?</strong><br/><br/>
                    고객님의 소중한 정보를 위해 로그인 전에 <br><em>주소표시줄</em>을 확인해 주세요.
                    </span>
                </div>
            </div>
            <!-- tg-lang -->
        </div>
        <!-- //content -->
    </div>

    <!-- //container -->
</body>
</html>