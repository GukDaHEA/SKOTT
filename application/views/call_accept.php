<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>SKOTT - 기사</title>
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://apis.skplanetx.com/tmap/js?version=1&format=javascript&appKey=6963ba88-7df2-3c35-bc38-c8a6f47d9dcc"></script>
<script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=6f9cc1cd3f08a51269ed1888616c3701&libraries=clusterer"></script>

<style>

.h_logo{display:block;overflow:hidden;width:100px;height:50px;top:20px;left:150px;margin:0 auto;background-position:-1px -1px}
@media only screen and (min-width:1024px){#container,#header{width:768px;margin:0 auto!important;background-color: #e3e3e3;}.error_browser p{width:460px;margin:0 auto}} 
@media screen and (min-width:460px){.error_browser p{width:460px;margin:0 auto} input[type=range]{width:400px;}}
.h_logo{background-image:url("/static/image/header/logo.png");background-size: 100% 100%;background-repeat:no-repeat;margin-top:10px;}
.lang{position:absolute;top:14px;right:0}
.login_form .blind{font-size:0;line-height:0;position:absolute;top:0;left:0;visibility:hidden;overflow:hidden;width:1px;height:1px}

#container{padding-bottom:100px;background-color: #e3e3e3;}
.input_row{position:relative;height:50%;margin:0 0 14px;padding:10px 35px 10px 15px;border:solid 0px #dadada;border-radius:10px;text-align:center;background:#000}.input_row.focus{border:solid 1px #20bc01}.input_box{color:white;display:block;overflow:hidden;margin-top:-30px;}.int{font-size:15px;line-height:16px;position:relative;z-index:9;width:100%;height:16px;padding:7px 0 6px;color:#000;border:none;background:#fff;-webkit-appearance:none}.lbl{font-size:15px;text-align:center;line-height:16px;position:absolute;z-index:8;top:16px;left:15px;color:#999}.lbl{z-index:10}.wrg{position:absolute;z-index:1000;top:16px;right:13px;display:none;overflow:hidden;width:19px;height:19px;margin:0;padding:0;cursor:pointer;text-indent:-999px;border:0;background-color:transparent;background-position:-1px -263px}
.input_row{padding:10px 6px 10px 9px; margin:0;} .login_form{ border:0px;margin-top:15%;}
#div_Map { margin-left:20px;}
.btn_global{font-size:20px;font-weight:700;float:left;line-height:61px;display:block;width:43%;height:61px;margin:30px 0 13px 20px;padding-top:2px;cursor:pointer;text-align:center;color:#fff;border:none;border-radius:10px;background-color:#4d7e2b;-webkit-appearance:none}.btn_global:active,.btn_global:hover,.btn_global:link{text-decoration:none;color:#fff}
input {font-family:Helvetica,sans-serif;font-size:12px;-webkit-text-size-adjust:none}
.error{font-size:12px;line-height:16px;margin:-2px 0 12px;color:#ff1616}.error .error_info{color:#333}.error strong{font-size:15px;position:relative;top:3px}
.phishing_banner{margin:47px 0 15px;padding:25px 0 31px;border:1px solid #dce6ee;background-color:#e5edf3}.phishing_banner .sp{position:relative;width:396px;height:110px;margin:0 auto}.phishing_banner.bw_crome .sp{background-position:0 -670px}.phishing_banner.bw_safari .sp{background-position:0 -800px}.phishing_banner.bw_firefox .sp{background-position:0 -930px}.phishing_banner.bw_ie,.phishing_banner.toolbar{display:none} @media only screen and (max-device-width:1024px) and (-webkit-min-device-pixel-ratio:1.5),(min--moz-device-pixel-ratio:1.5),(-o-min-device-pixel-ratio:3/2),(min-device-pixel-ratio:1.5) {.phishing_banner.bw_safari .sp {background-position: 0 -790px;}.phishing_banner.bw_firefox .sp {background-position: 0 -910px;}}
input[type=textarea]{background:#000;border:0px;color:white;font-size:20px;}
input[type=submit]{margin-top:50%;}

/*
  Globals
*/

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
</style>

<style type="text/css">
    

</style>
<body>

    <!-- Navigation -->
    <nav id="slide-menu">
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
                <h1><a href="/" class="h_logo" tabindex="1"></a></h1>
                    <form class="login_form">
                        <div class="input_row" id="id_area">
                            <div id="div_Map"></div>
                        </div>
                    <!-- <button class="btn_global" onclick"">빈 차</button> -->
                    <input type="button" title="호출 하기" alt="호출 하기" value="손님 탑승완료" class="btn_global" onclick="callDriver()">
                    <input type="button" title="호출 하기" alt="호출 하기" value="신고하기" class="btn_global" onclick="callDriver()">
                </form>
            <!-- </form> -->
                
    </div>
<script type="text/javascript">
var lat1, lon1= 0;

//Tmap 지도 생성
function initialize() {
    var map = new Tmap.Map({div:"div_Map"});
    
    //다음지도에서 현위치 받기
    if (navigator.geolocation) {
        
        // GeoLocation을 이용해서 접속 위치를 얻어옵니다
        navigator.geolocation.getCurrentPosition(function(position) {
            
            var lat = position.coords.latitude, // 위도
                lon = position.coords.longitude; // 경도

            var pr_3857 = new Tmap.Projection("EPSG:3857");
            var pr_4326 = new Tmap.Projection("EPSG:4326"); // wgs84

            var markerLayer = new Tmap.Layer.Markers();
            map.addLayer(markerLayer);

            var lonlat = new Tmap.LonLat(lon, lat).transform(pr_4326, pr_3857);
            var size = new Tmap.Size(24,38);
            var offset = new Tmap.Pixel(-(size.w/2), -(size.h/2));
            var icon = new Tmap.Icon('https://developers.skplanetx.com/upload/tmap/marker/pin_b_m_a.png', size, offset); 
            
            var marker = new Tmap.Marker(lonlat, icon);
            markerLayer.addMarker(marker);
                
            map.setCenter(new Tmap.LonLat(lonlat.lon, lonlat.lat), 16);
        });
        
    } else { // HTML5의 GeoLocation을 사용할 수 없을때 마커 표시 위치와 인포윈도우 내용을 설정합니다
        
        var locPosition = new daum.maps.LatLng(14134074.680985, 4517814.0870894),    
            message = 'geolocation을 사용할수 없어요..'
            
        markerLayer(locPosition);
    }
}
window.onload = function() {
    initialize();
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
<!-- //container -->
</body>
</html>