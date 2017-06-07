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
@media screen and (min-width:460px){#content{width:460px;margin:0 auto}.error_browser p{width:460px;margin:0 auto}}
.h_logo{background-image:url("/static/image/header/logo.png");background-size: 100% 100%;background-repeat:no-repeat}
#wrap{position:relative;min-height:100%;background-color: #3e3e3e}
.lang{position:absolute;top:14px;right:0}
.login_form .blind{font-size:0;line-height:0;position:absolute;top:0;left:0;visibility:hidden;overflow:hidden;width:1px;height:1px}

.input_row{position:relative;height:70px;border:solid 0px #dadada;text-align:center;background:#000}.input_row.focus{border:solid 1px #01c73c}.input_box{border-radius:15px;display:block;overflow:hidden;background-color:#000;}.int{font-size:15px;line-height:16px;position:relative;z-index:9;width:100%;height:10%;padding:7px 15px 6px;color:#fff;border:none;background:#000;-webkit-appearance:none}.lbl{font-size:15px;text-align:center;line-height:16px;position:absolute;z-index:8;top:16px;left:15px;color:#999}.lbl{z-index:10}.wrg{position:absolute;z-index:1000;top:16px;right:13px;display:none;overflow:hidden;width:19px;height:19px;margin:0;padding:0;cursor:pointer;text-indent:-999px;border:0;background-color:transparent;background-position:-1px -263px}
.login_form{ border:0px;margin-top:-10%;}
.btn_global{top:70%;font-size:20px;font-weight:700;line-height:61px;display:block;width:100%;height:61px;margin:30px 0 13px;padding-top:2px;cursor:pointer;text-align:center;color:#fff;border:none;background-color:#4d7e2b;-webkit-appearance:none}.btn_global:active,.btn_global:hover,.btn_global:link{text-decoration:none;color:#fff}
input {font-family:Helvetica,sans-serif;-webkit-text-size-adjust:none}
#container .title { color:white;font-weight:bold;font-size:20px;text-align:center; margin-top:-10%;margin-bottom:20%;}


</style>
<body class="chrome">
<script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=6f9cc1cd3f08a51269ed1888616c3701&libraries=clusterer"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<div id="wrap">
    <!-- header -->
    <div id="header">
        <h1><a href="/mains" class="sp h_logo" tabindex="1"></a></h1>
    </div>
    <!-- //header -->
    <!-- container -->
    <div id="container">
            <div class="title">
                <p>기사님 로그인 해주세요.</p>
            </div>
        <!-- content -->
        <div id="content">
        <form id="frmNIDLogin" name="frmNIDLogin" action="/Drive/authentication" method="post">
                <fieldset class="login_form">
                    <legend class="blind">LOGIN</legend>
                        <span class="input_box">
                            <input type="text" id="id" name="id" tabindex="7" class="int" maxlength="41" placeholder="아이디">
                        </span> <br>
                        <span class="input_box">
                            <input type="password" id="password" name="password" tabindex="8" class="int" maxlength="16" placeholder="비밀번호" >
                        </span>
                    <input class="btn_global" type="submit" title="로그인" alt="로그인" tabindex="12" value="로그인" class="btn_global">
                    <div class="btn_global"> 회원가입 </div>
                </fieldset>
        </form>
        </div>
        <!-- //content -->
    </div>
        <!-- //container -->
</div>

<!-- 메뉴 아이콘 javascript -->
<script>
var burger = $('.menu-trigger');

burger.each(function(index){
    var $this = $(this);

    $this.on('click', function(e){
        e.preventDefault();
        $(this).toggleClass('active-' + (index+1));
    })
});

$(document).ready(function() { 
            if (navigator.geolocation) {
                // GeoLocation을 이용해서 접속 위치를 얻어옵니다
                navigator.geolocation.getCurrentPosition(function(position) {
                    
                    var lat = position.coords.latitude, // 위도
                        lon = position.coords.longitude; // 경도

                    myGeolocation(lat, lon);
                    });
            } else {
                alert("위치 정보를 가져올 수 없습니다. GPS를 활성화하고 로그인 해주세요.");
                location.replace("/Drive/call_login");
            }
     });

function myGeolocation(lat, lon) {
    $.ajax ({
             type : 'POST',
             url : '/Drive/geolocations',
             data : { lat, lon },
             dataType : 'json',success : function (data) {}
         });
}
</script>

</body>
</html>