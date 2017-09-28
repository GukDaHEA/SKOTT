
<head>
	<title>가이드</title>
</head>
<style>
body{font-family:Helvetica,sans-serif;font-size:12px;-webkit-text-size-adjust:none}
#wrap {
    height:88%;
    margin-top:21%;
}
#div_Map {
}
</style>
<body onload="initTmap(<?php echo $Elat?>, <?php echo $Elon ?>)">

    <!-- Content panel -->
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
</html>