<html>
<head>
	<title>가이드</title>
	<meta name="viewport" 
        content="width=device-width
                , user-scalable=yes
                ,initial-scale=1.0
                , maximum-scale=3.0" />
</head>
<style>
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
                      
        var	Startlat = position.coords.latitude, // 위도
            Startlng = position.coords.longitude; // 경도
        searchRoute(Startlat, Startlng, Endlat, Endlng); //길찾기

        //위도 경도 변환
        var pr_3857 = new Tmap.Projection("EPSG:3857");
    	var pr_4326 = new Tmap.Projection("EPSG:4326"); // wgs84

        lonlat = new Tmap.LonLat(Startlng, Startlat).transform(pr_4326, pr_3857);
        });
    } else { // HTML5의 GeoLocation을 사용할 수 없을때 마커 표시 위치와 인포윈도우 내용을 설정합니다
        var locPosition = new daum.maps.LatLng(33.450701, 126.570667),message = '위치서비스를 사용할수 없어요..'
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
    map.setCenter(new Tmap.LonLat(lonlat.lon, lonlat.lat),17);

    //내위치 마커 생성
    markerCreate();
    
    // 5초에 한번씩 움직임
    timerld = setInterval("moveMove()", 5000);
}

function markerCreate() {
	markerLayer = new Tmap.Layer.Markers();
    map.addLayer(markerLayer);

    var lonlat2 = new Tmap.LonLat(lonlat.lon, lonlat.lat);
    var size = new Tmap.Size(58,92);
    var offset = new Tmap.Pixel(-(size.w/2), -(size.h/2));
    var icon = new Tmap.Icon('https://developers.skplanetx.com/upload/tmap/marker/pin_b_m_a.png', size, offset); 
         
    marker = new Tmap.Marker(lonlat2, icon);
    markerLayer.addMarker(marker);
}

function moveMove() {
    // 지도의 센터를 현재 위치한 곳으로
    // map.setCenter(new Tmap.LonLat(lonlat.lon, lonlat.lat),map.getZoom());

    // 마커 지웠다가 다시 생성
    markerLayer.removeMarker(marker);

    var lonlat2 = new Tmap.LonLat(lonlat.lon, lonlat.lat);
    var size = new Tmap.Size(58,92);
    var offset = new Tmap.Pixel(-(size.w/2), -(size.h/2));
    var icon = new Tmap.Icon('https://developers.skplanetx.com/upload/tmap/marker/pin_b_m_a.png', size, offset); 
         
    marker = new Tmap.Marker(lonlat2, icon);
    markerLayer.addMarker(marker);

    // if (lonlat2.lon == lonlat.lon && lonlat2.lat == lonlat.lat) { //오차가 +-12 근사치라면 도착으로 해야함
    //     clearInterval(timerld);
    //     alert("목적지에 도착 하였습니다.");
    // }
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
</html>