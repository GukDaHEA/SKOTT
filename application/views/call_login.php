<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>SKOTT - 기사 로그인</title>
</head>
<style>
#header{margin:0 10px}#header{position:relative;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;height:168px;:62px 0 0}
#header .h_logo{display:block;overflow:hidden;width:130px;height:80px;top:20px;left:150px;margin:0 auto;background-position:-1px -1px}#header .lang{position:absolute;top:20px;left:20px;width:10%;cursor:pointer;}
@media only screen and (min-width:1024px){#container,#header{width:768px;margin:0 auto!important}#content{width:460px;margin:0 auto}.error_browser p{width:460px;margin:0 auto}} 
@media screen and (min-width:460px){#content{width:460px;margin:0 auto}.error_browser p{width:460px;margin:0 auto} input[type=text]{height:5%;}}
.header_area{overflow:hidden;height:45px}.privacy_title{font-size:18px;font-weight:700;line-height:45px;text-align:center;color:#fff;background-color:#01c73c}.content_area{max-width:460px;margin:0 auto;padding:28px 10px 162px;background-color:#fff}
.h_logo{background-image:url("/static/image/header/logo.png");background-size: 100% 100%;background-repeat:no-repeat}
#wrap{position:relative;min-height:100%;background-color: #3e3e3e}
.lang{position:absolute;top:14px;right:0}
.login_form .blind{font-size:0;line-height:0;position:absolute;top:0;left:0;visibility:hidden;overflow:hidden;width:1px;height:1px}

#container{padding-bottom:100px}
.input_row{position:relative;height:70px;margin:0 0 14px;padding:10px 35px 10px 15px;border:solid 0px #dadada;border-radius:10px;text-align:center;background:#000}.input_row.focus{border:solid 1px #01c73c}.input_box{display:block;overflow:hidden;background-color:#000;}.int{font-size:15px;line-height:16px;position:relative;z-index:9;width:100%;height:16px;padding:7px 0 6px;color:#000;border:none;background:#fff;-webkit-appearance:none}.lbl{font-size:15px;text-align:center;line-height:16px;position:absolute;z-index:8;top:16px;left:15px;color:#999}.lbl{z-index:10}.wrg{position:absolute;z-index:1000;top:16px;right:13px;display:none;overflow:hidden;width:19px;height:19px;margin:0;padding:0;cursor:pointer;text-indent:-999px;border:0;background-color:transparent;background-position:-1px -263px}
.input_row{padding:10px 6px 10px 9px, margin:0;} .login_form{ border:0px;margin-top:-50px;}
.btn_global{top:70%;font-size:20px;font-weight:700;line-height:61px;display:block;width:100%;height:61px;margin:30px 0 13px;padding-top:2px;cursor:pointer;text-align:center;color:#fff;border:none;border-radius:10px;background-color:#4d7e2b;-webkit-appearance:none}.btn_global:active,.btn_global:hover,.btn_global:link{text-decoration:none;color:#fff}
input {font-family:Helvetica,sans-serif;font-size:12px;-webkit-text-size-adjust:none}
.error{font-size:12px;line-height:16px;margin:-2px 0 12px;color:#ff1616}.error .error_info{color:#333}.error strong{font-size:15px;position:relative;top:3px}
.phishing_banner{margin:47px 0 15px;padding:25px 0 31px;border:1px solid #dce6ee;background-color:#e5edf3}.phishing_banner .sp{position:relative;width:396px;height:110px;margin:0 auto}.phishing_banner.bw_crome .sp{background-position:0 -670px}.phishing_banner.bw_safari .sp{background-position:0 -800px}.phishing_banner.bw_firefox .sp{background-position:0 -930px}.phishing_banner.bw_ie,.phishing_banner.toolbar{display:none} @media only screen and (max-device-width:1024px) and (-webkit-min-device-pixel-ratio:1.5),(min--moz-device-pixel-ratio:1.5),(-o-min-device-pixel-ratio:3/2),(min-device-pixel-ratio:1.5) {.phishing_banner.bw_safari .sp {background-position: 0 -790px;}.phishing_banner.bw_firefox .sp {background-position: 0 -910px;}}


</style>
<body class="chrome">

<div id="wrap">
    <!-- header -->
    <div id="header">
        <h1><a href="/" class="sp h_logo" tabindex="1"></a></h1>
    </div>
    <!-- //header -->
    <!-- container -->
    <div id="container">
        <!-- content -->
        <div id="content">
            <div class="title">
                <p></p>
            </div>
        <form id="frmNIDLogin" name="frmNIDLogin" action="/Drive/authentication" method="post">
                <fieldset class="login_form">
                    <legend class="blind">LOGIN</legend>
                    <div class="input_row" id="id_area">
                        <span class="input_box"><br><br><br>
                            <input type="text" id="id" name="id" tabindex="7" class="int" maxlength="41" placeholder="아이디">
                        </span> <br>
                    </div class="input_row" id="id_area">
                        <span class="input_box"><br><br><br>
                            <input type="password" id="password" name="password" tabindex="8" class="int" maxlength="16" placeholder="비밀번호" >
                        </span> 
                    <input class="btn_global" type="submit" title="로그인" alt="로그인" tabindex="12" value="로그인" class="btn_global">
                </fieldset>
            </form>
        </div>
        <!-- //content -->
    </div>
        <!-- //container -->
</div>

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
    <!-- //container -->

</body>
</html>