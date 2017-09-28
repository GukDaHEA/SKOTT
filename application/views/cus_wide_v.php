<html>
<head>
	<title>기사님과 만나세요.</title>
    <meta name="viewport" 
        content="width=device-width
                , user-scalable=yes
                ,initial-scale=1.0
                , maximum-scale=3.0" />
</head>
<style type="text/css">
body {
    margin: 0;
    color: #111111;
    background-color:#e5edf3;
}
.h_logo{background-image:url("/static/image/header/logo.png");background-size: 100% 100%;background-repeat:no-repeat;height:50px;width:140px;display:block;margin:0 auto;top:20px;}

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
body{font-family:Helvetica,sans-serif;font-size:12px;-webkit-text-size-adjust:none}
#wrap {
    height:91%;
    margin-top:10px;
}
#div_Map {
}
#info {
    width:100%;
    height:20%;
    top:75%;
    z-index:1000;
    position:fixed;/*
    filter:alpha(opacity=40);
    opacity:.40;
    -m s-filter: "prigid:DXImageTransform.Microsoft.Alpha(Opacity=40)"*/
    background: rgba(189, 189, 189, 0.5);
}
#info_picture {
    float:left;
    width:30%;
    height:80%;
    margin-top:3%;
    margin-left:9%;
}
#info_name{
    float:left;
    width:30%;
    margin-top:3%;
    margin-left:3%;
    opacity: 0.9;
    font-weight:bold;
}
#info_connect{
    float:right;
    width:20%;
    height:100%;
    background-color:#4d7e2b;
    border:0px;
    color:#fff;
    font-size:18px;
}
#call{
    height:33%;
    text-align:center;
    border-bottom:0.5px solid;
}
#message{
    height:33%;
    top:50%;
    border-bottom:0.5px solid;
}
#cancel{
    height:33%;
    top:25%;
    border-bottom:1px solid;
}
.pic {
    margin:0px auto;
    width:100%;
    height:100%;
    object-fit:contain;
}

#ok {
    width:80px;
    height:80px;
    top:80px;
    left:75%;
    position:fixed;
    z-index:999999;
    border-radius: 50px;
    border:0px;
    background-color:#4d7e2b;
    color:#fff;
    font-weight:bold;
    box-shadow:  3px 3px grey;
}
</style>
<body onload="initTmap(<?php echo $Elat?>, <?php echo $Elon ?>)">
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
        <a href="/mains" class="h_logo" tabindex="1"></a>
        <div id="wrap">
            <div id="div_Map"></div>
        </div>
        <div id="info">
            <div id="info_picture">
                <img class="pic" src="<?php echo $driver->picture ?>" alt="사진"/>
            </div>
            <div id="info_name">
                <?php echo $driver->name ?> <br> <br>
                <?php echo $driver->car_num ?> <br> <br>
                목적지 | <?php echo $end ?><br>
            </div>
            <div id="info_connect">
                <div id="call" onclick="document.location.href='tel:<?echo $driver->phone?>'">
                    전화
                </div>
                <div id="message"><a href="sms://<?echo $driver->phone?>" style="color:white;text-decoration:none;">
                   <center> 메시지 </center>
               </a>
                </div>
                <div id="cancel"><a href="javascript:cancel()" style="color:white;text-decoration:none;">
                   <center> 취소 </center>
               </a>
                </div>
            </div>
        </div>
        <form id="success" name="theForm" method="POST" action="/drive/Guider">
            <input type="submit" id="ok" value="탑승 완료">
            <input type="hidden" id="Slat" name="Slat" value="<?php echo $Slat?>" >
            <input type="hidden" id="Slon" name="Slon" value="<?php echo $Slon?>" >
            <input type="hidden" id="Elat" name="Elat" value="<?php echo $Elat?>" >
            <input type="hidden" id="Elon" name="Elon" value="<?php echo $Elon?>" >
        </form>
    </div>
</body>
<script src="https://apis.skplanetx.com/tmap/js?version=1&format=javascript&appKey=6963ba88-7df2-3c35-bc38-c8a6f47d9dcc">
</script>
<script type="text/javascript">

function initTmap(Endlat,Endlng) {
    centerLL = new Tmap.LonLat(14145677.4, 4511257.6);
    map = new Tmap.Map({div:'div_Map',
                        width:'100%', 
                        height:'100%',
                        transitionEffect:"resize",
                        animation:true
                    }); 
    detail_location(Endlat, Endlng);
};
                var geocoder = new daum.maps.services.Geocoder();

function detail_location(Endlat, Endlng) {
              if (navigator.geolocation) {
                // GeoLocation을 이용해서 접속 위치를 얻어옵니다
                navigator.geolocation.getCurrentPosition(function(position) {
                    
                         Startlat = position.coords.latitude; // 위도
                        Startlng = position.coords.longitude; // 경도
                      searchRoute(Startlat, Startlng, Endlat, Endlng); //길찾기
                  });
            } else { // HTML5의 GeoLocation을 사용할 수 없을때 마커 표시 위치와 인포윈도우 내용을 설정합니다
                var locPosition = new daum.maps.LatLng(33.450701, 126.570667),message = 'geolocation을 사용할수 없어요..'
            }
}

//경로 정보 로드
function searchRoute(Startlat, Startlng, Endlat, Endlng){
    var routeFormat = new Tmap.Format.KML({extractStyles:true, extractAttributes:true});
    var startX = Startlng;
    var startY = Startlat;
    var endX = Endlng;
    var endY = Endlat;
    var option = 10;
    var urlStr = "https://apis.skplanetx.com/tmap/routes?version=1&format=xml";
    urlStr += "&startX="+startX;
    urlStr += "&startY="+startY;
    urlStr += "&endX="+endX;
    urlStr += "&endY="+endY;
    urlStr += "&appKey=6963ba88-7df2-3c35-bc38-c8a6f47d9dcc";
    urlStr += "&reqCoordType=WGS84GEO";
    urlStr += "&searchOption="+option;
    var prtcl = new Tmap.Protocol.HTTP({
                                        url: urlStr,
                                        format:routeFormat
                                        });
    var routeLayer = new Tmap.Layer.Vector("route", {protocol:prtcl, strategies:[new Tmap.Strategy.Fixed()]});
    routeLayer.events.register("featuresadded", routeLayer, onDrawnFeatures);
    map.addLayer(routeLayer);
}
//경로 그리기 후 해당영역으로 줌
function onDrawnFeatures(e){
    map.zoomToExtent(this.getDataExtent());
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

<script type="text/javascript">
function cancel() {
    var result = confirm('정말 취소 하시겠습니까?');
    if (result) {
        location.href='/';
    } else {

    }
}
</script>
</html>