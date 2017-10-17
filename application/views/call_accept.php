
<head>
    <title>SKOTT - 기사</title>
</head>
<script src="https://apis.skplanetx.com/tmap/js?version=1&format=javascript&appKey=6963ba88-7df2-3c35-bc38-c8a6f47d9dcc"></script>
<script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=6f9cc1cd3f08a51269ed1888616c3701&libraries=clusterer"></script>

<style>

.input_row{position:relative;height:50%;margin:0 0 14px;padding:10px 35px 10px 15px;border:solid 0px #dadada;border-radius:10px;text-align:center;background:#000}.input_row.focus{border:solid 1px #20bc01}.input_box{color:white;display:block;overflow:hidden;margin-top:-30px;}.int{font-size:15px;line-height:16px;position:relative;z-index:9;width:100%;height:16px;padding:7px 0 6px;color:#000;border:none;background:#fff;-webkit-appearance:none}.lbl{font-size:15px;text-align:center;line-height:16px;position:absolute;z-index:8;top:16px;left:15px;color:#999}.lbl{z-index:10}.wrg{position:absolute;z-index:1000;top:16px;right:13px;display:none;overflow:hidden;width:19px;height:19px;margin:0;padding:0;cursor:pointer;text-indent:-999px;border:0;background-color:transparent;background-position:-1px -263px}
.input_row{padding:10px 6px 10px 9px; margin:0;} .login_form{ border:0px;margin-top:23%;}
#div_Map { margin-left:20px;}
.btn_global{font-size:20px;font-weight:700;float:left;line-height:61px;display:block;width:43%;height:61px;margin:30px 0 -10px 20px;padding-top:2px;cursor:pointer;text-align:center;color:#fff;border:none;border-radius:10px;background-color:#4d7e2b;-webkit-appearance:none}.btn_global:active,.btn_global:hover,.btn_global:link{text-decoration:none;color:#fff}
input {font-family:Helvetica,sans-serif;font-size:12px;-webkit-text-size-adjust:none}
.error{font-size:12px;line-height:16px;margin:-2px 0 12px;color:#ff1616}.error .error_info{color:#333}.error strong{font-size:15px;position:relative;top:3px}
.phishing_banner{margin:47px 0 15px;padding:25px 0 31px;border:1px solid #dce6ee;background-color:#e5edf3}.phishing_banner .sp{position:relative;width:396px;height:110px;margin:0 auto}.phishing_banner.bw_crome .sp{background-position:0 -670px}.phishing_banner.bw_safari .sp{background-position:0 -800px}.phishing_banner.bw_firefox .sp{background-position:0 -930px}.phishing_banner.bw_ie,.phishing_banner.toolbar{display:none} @media only screen and (max-device-width:1024px) and (-webkit-min-device-pixel-ratio:1.5),(min--moz-device-pixel-ratio:1.5),(-o-min-device-pixel-ratio:3/2),(min-device-pixel-ratio:1.5) {.phishing_banner.bw_safari .sp {background-position: 0 -790px;}.phishing_banner.bw_firefox .sp {background-position: 0 -910px;}}
input[type=textarea]{background:#000;border:0px;color:white;font-size:20px;}
input[type=submit]{margin-top:50%;}

</style>

<body>

    <!-- Content panel -->
            <form class="login_form" method="POST" action="/drive/driveSuc" name="theForm">
                    <div class="input_row" id="id_area">
                        <div id="div_Map"></div>
                    </div>
                    
                <input type="text" title="전화" alt="전화하기" value="전 화" class="btn_global" onclick="document.location.href='tel:<?echo $user->phone?>'">
                <a href="sms://<?echo $user->phone?>" style="color:white;text-decoration:none;">
                <input type="text" title="메시지" alt="메시지" value="메시지" class="btn_global">
                </a>
                <input type="text" title="탑승 완료" alt="손님 탑승완료" value="손님 탑승완료" class="btn_global" onclick="success()">
                <input type="text" title="신고 하기" alt="신고하기" value="신고하기" class="btn_global" onclick="report()">
                <input type="hidden" name="user_id" value="<?php echo $user->user_id ?>">
                <input type="hidden" name="user_phone" value="<?php echo $user->phone ?>">
                <input type="hidden" name="destination" value="<?php echo $call->destination ?> ">
            </form>
            <!-- </form> --> 
    </div>
<script type="text/javascript">
var lat1, lon1= 0;

//Tmap 지도 생성
function initialize() {
    var map = new Tmap.Map({div:"div_Map"});

    var pr_3857 = new Tmap.Projection("EPSG:3857");
            var pr_4326 = new Tmap.Projection("EPSG:4326"); // wgs84
            var markerLayer = new Tmap.Layer.Markers();
            map.addLayer(markerLayer);

            var lonlat = new Tmap.LonLat('<?php echo $call->Slon ;?>', '<?php echo $call->Slat ;?>').transform(pr_4326, pr_3857);
            var size = new Tmap.Size(24,38);
            var offset = new Tmap.Pixel(-(size.w/2), -(size.h/2));
            var icon = new Tmap.Icon('https://developers.skplanetx.com/upload/tmap/marker/pin_b_m_a.png', size, offset);
            
            var marker = new Tmap.Marker(lonlat, icon);

            markerLayer.addMarker(marker);
            map.setCenter(new Tmap.LonLat(lonlat.lon, lonlat.lat), 16);
    // //다음지도에서 현위치 받기
    // if (navigator.geolocation) {
        
    //     // GeoLocation을 이용해서 접속 위치를 얻어옵니다
    //     navigator.geolocation.getCurrentPosition(function(position) {
            
    //         var lat = position.coords.latitude, // 위도
    //             lon = position.coords.longitude; // 경도

    //         var pr_3857 = new Tmap.Projection("EPSG:3857");
    //         var pr_4326 = new Tmap.Projection("EPSG:4326"); // wgs84

    //         var markerLayer = new Tmap.Layer.Markers();
    //         map.addLayer(markerLayer);

    //         var lonlat = new Tmap.LonLat('<?php echo $call->Slon ;?>', '<?php echo $call->Slat ;?>').transform(pr_4326, pr_3857);
    //         var size = new Tmap.Size(24,38);
    //         var offset = new Tmap.Pixel(-(size.w/2), -(size.h/2));
    //         var icon = new Tmap.Icon('https://developers.skplanetx.com/upload/tmap/marker/pin_b_m_a.png', size, offset);
            
    //         var marker = new Tmap.Marker(lonlat, icon);

    //         markerLayer.addMarker(marker);
                
    //         map.setCenter(new Tmap.LonLat(lonlat.lon, lonlat.lat), 16);
    //     });
        
    // } else { // HTML5의 GeoLocation을 사용할 수 없을때 마커 표시 위치와 인포윈도우 내용을 설정합니다
        
    //     var locPosition = new daum.maps.LatLng(14134074.680985, 4517814.0870894),
    //         message = 'geolocation을 사용할수 없어요..'
            
    //     markerLayer(locPosition);
    // }
}
window.onload = function() {
    initialize();
}
</script>

<script>
function success() {
    var result = confirm("손님이 탑승 하셨습니까?");
    if(result) {
        alert('페이지가 이동됩니다.');
        document.theForm.submit();
    } else {

    }
}


function report() {
    var result = confirm("정말 신고 하시겠습니까?");
    if(result) { //yes 
        alert('신고 처리 되었습니다.');
      location.replace('/drive/report');
    }
    else { //no 
    }
}
</script>
</body>
</html>