
<head>
	<title>기사님과 만나세요.</title>
</head>
<style type="text/css">
body{font-family:Helvetica,sans-serif;font-size:12px;-webkit-text-size-adjust:none}
#wrap {
    height:88%;
    margin-top:21%;
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
    color:#000;
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
    top:120px;
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
<body onload="initTmap(<?php echo $call->Elat?>, <?php echo $call->Elon ?>)">
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
        <form id="success" name="theForm" method="POST" action="/drive/Guider">
            <input type="submit" id="ok" value="탑승 완료">
            <input type="hidden" id="Slat" name="Slat" value="<?php echo $call->Slat ;?>" >
            <input type="hidden" id="Slon" name="Slon" value="<?php echo $call->Slon ;?>" >
            <input type="hidden" id="Elat" name="Elat" value="<?php echo $call->Elat ;?>" >
            <input type="hidden" id="Elon" name="Elon" value="<?php echo $call->Elon ;?>" >
            <input type="hidden" id="taxiFare" name="taxiFare" value="<?php echo $taxiFare?>" >
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
            //   if (navigator.geolocation) {
            //     // GeoLocation을 이용해서 접속 위치를 얻어옵니다
            //     navigator.geolocation.getCurrentPosition(function(position) {
                    
            //              Startlat = position.coords.latitude; // 위도
            //             Startlng = position.coords.longitude; // 경도
            //           searchRoute(Startlat, Startlng, Endlat, Endlng); //길찾기
            //       });
            // } else { // HTML5의 GeoLocation을 사용할 수 없을때 마커 표시 위치와 인포윈도우 내용을 설정합니다
            //     var locPosition = new daum.maps.LatLng(33.450701, 126.570667),message = 'geolocation을 사용할수 없어요..'
            // }
            searchRoute('<?php echo $call->Slat ?>', '<?php echo $call->Slon ?>', Endlat, Endlng);
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