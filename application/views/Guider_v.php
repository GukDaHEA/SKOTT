
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
    text-align: center;
}
#menual {
    width:60px;
    height:40px;
    top:10px;
    left:75%;
    position:fixed;
    z-index:999999;
    border:0px;
    background-color:green;
    color:#fff;
    font-weight:bold;
    box-shadow:  3px 3px grey;
    text-align: center;
}

/* -------------------------------- 

Modules - reusable parts of our design

-------------------------------- */
.img-replace {
  /* replace text with an image */
  display: inline-block;
  overflow: hidden;
  text-indent: 100%;
  color: transparent;
  white-space: nowrap;
}

/* -------------------------------- 

xnugget info 

-------------------------------- */
.cd-nugget-info {
  text-align: center;
  position: absolute;
  width: 100%;
  height: 50px;
  line-height: 50px;
  bottom: 0;
  left: 0;
}
.cd-nugget-info a {
  position: relative;
  font-size: 14px;
  color: #5e6e8d;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  transition: all 0.2s;
}
.no-touch .cd-nugget-info a:hover {
  opacity: .8;
}
.cd-nugget-info span {
  vertical-align: middle;
  display: inline-block;
}
.cd-nugget-info span svg {
  display: block;
}
.cd-nugget-info .cd-nugget-info-arrow {
  fill: #5e6e8d;
}

/* -------------------------------- 

Main components 

-------------------------------- */

.cd-popup-trigger {
  display: block;
  text-align: center;
  color: #FFF;
  font-weight: bold;
  text-transform: uppercase;
  box-shadow: 0 3px 0 rgba(0, 0, 0, 0.07);
}

/* -------------------------------- 

xpopup 

-------------------------------- */
.cd-popup {
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background-color: rgba(94, 110, 141, 0.9);
  opacity: 0;
  visibility: hidden;
  z-index: 9999999;
  -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
  -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
  transition: opacity 0.3s 0s, visibility 0s 0.3s;
}
.cd-popup.is-visible {
  opacity: 1;
  visibility: visible;
  -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
  -moz-transition: opacity 0.3s 0s, visibility 0s 0s;
  transition: opacity 0.3s 0s, visibility 0s 0s;
}

.cd-popup-container {
  position: relative;
  width: 90%;
  max-width: 400px;
  margin: 4em auto;
  background: #FFF;
  border-radius: .25em .25em .4em .4em;
  text-align: center;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  -webkit-transform: translateY(-40px);
  -moz-transform: translateY(-40px);
  -ms-transform: translateY(-40px);
  -o-transform: translateY(-40px);
  transform: translateY(-40px);
  /* Force Hardware Acceleration in WebKit */
  -webkit-backface-visibility: hidden;
  -webkit-transition-property: -webkit-transform;
  -moz-transition-property: -moz-transform;
  transition-property: transform;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.cd-popup-container p {
  padding: 3em 1em;
}
.cd-popup-container .cd-buttons:after {
  content: "";
  display: table;
  clear: both;
}
.cd-popup-container .cd-buttons li {
  float: left;
  width: 50%;
  list-style: none;
}
.cd-popup-container .cd-buttons a {
  display: block;
  height: 60px;
  line-height: 60px;
  text-transform: uppercase;
  color: #FFF;
  -webkit-transition: background-color 0.2s;
  -moz-transition: background-color 0.2s;
  transition: background-color 0.2s;
}
.cd-popup-container .cd-buttons li:first-child a {
  background: #fc7169;
  border-radius: 0 0 0 .25em;
}
.no-touch .cd-popup-container .cd-buttons li:first-child a:hover {
  background-color: #fc8982;
}
.cd-popup-container .cd-buttons li:last-child a {
  background: #b6bece;
  border-radius: 0 0 .25em 0;
}
.no-touch .cd-popup-container .cd-buttons li:last-child a:hover {
  background-color: #c5ccd8;
}
.cd-popup-container .cd-popup-close {
  position: absolute;
  top: 8px;
  right: 8px;
  width: 30px;
  height: 30px;
}
.cd-popup-container .cd-popup-close::before, .cd-popup-container .cd-popup-close::after {
  content: '';
  position: absolute;
  top: 12px;
  width: 14px;
  height: 3px;
  background-color: #8f9cb5;
}
.cd-popup-container .cd-popup-close::before {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
  left: 8px;
}
.cd-popup-container .cd-popup-close::after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
  right: 8px;
}
.is-visible .cd-popup-container {
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
  transform: translateY(0);
}

/* Accordin 메뉴*/
.ac-container{
    width: 90%;
    margin: 10px auto 30px auto;
    text-align: left;
}
.ac-container label{
    font-family: 'BebasNeueRegular', 'Arial Narrow', Arial, sans-serif;
    padding: 5px 20px;
    position: relative;
    z-index: 20;
    display: block;
    height: 30px;
    cursor: pointer;
    color: #777;
    text-shadow: 1px 1px 1px rgba(255,255,255,0.8);
    line-height: 33px;
    font-size: 19px;
    background: #ffffff;
    background: -moz-linear-gradient(top, #ffffff 1%, #eaeaea 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,#ffffff), color-stop(100%,#eaeaea));
    background: -webkit-linear-gradient(top, #ffffff 1%,#eaeaea 100%);
    background: -o-linear-gradient(top, #ffffff 1%,#eaeaea 100%);
    background: -ms-linear-gradient(top, #ffffff 1%,#eaeaea 100%);
    background: linear-gradient(top, #ffffff 1%,#eaeaea 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#eaeaea',GradientType=0 );
    box-shadow: 
        0px 0px 0px 1px rgba(155,155,155,0.3), 
        1px 0px 0px 0px rgba(255,255,255,0.9) inset, 
        0px 2px 2px rgba(0,0,0,0.1);
}
.ac-container label:hover{
    background: #fff;
}
.ac-container input:checked + label,
.ac-container input:checked + label:hover{
    background: #c6e1ec;
    color: #3d7489;
    text-shadow: 0px 1px 1px rgba(255,255,255, 0.6);
    box-shadow: 
        0px 0px 0px 1px rgba(155,155,155,0.3), 
        0px 2px 2px rgba(0,0,0,0.1);
}
.ac-container label:hover:after,
.ac-container input:checked + label:hover:after{
    content: '';
    position: absolute;
    width: 24px;
    height: 24px;
    right: 13px;
    top: 7px;
    background: transparent url(../images/arrow_down.png) no-repeat center center;  
}
.ac-container input:checked + label:hover:after{
    background-image: url(../images/arrow_up.png);
}
.ac-container input{
    display: none;
}
.ac-container article{
    background: rgba(255, 255, 255, 0.5);
    margin-top: -1px;
    overflow: hidden;
    height: 0px;
    position: relative;
    z-index: 10;
    -webkit-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
    -moz-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
    -o-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
    -ms-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
    transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
}
.ac-container article p{
    /*font-style: italic;*/
    color: #777;
    line-height: 23px;
    font-size: 14px;
    padding: 20px;
    text-shadow: 1px 1px 1px rgba(255,255,255,0.8);
}
.ac-container input:checked ~ article{
    -webkit-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
    -moz-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
    -o-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
    -ms-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
    transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
    box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3);
}
.ac-container input:checked ~ article.ac-small{
    height: 140px;
}
.ac-container input:checked ~ article.ac-medium{
    height: 180px;
}
.ac-container input:checked ~ article.ac-large{
    height: 230px;
}
</style>
<body onload="initTmap(<?php echo $Elat?>, <?php echo $Elon ?>)">

    <!-- Content panel -->
        <div id="wrap">
            <div id="div_Map"></div>
        </div>
            <button id="ok" onclick="success()">목적지 <br> 도착 </button>
            <button id="menual"><a href="#0" class="cd-popup-trigger" style="text-decoration: none;"> 대처법 </a></button>

        <div class="cd-popup" role="alert">
            <div class="cd-popup-container">
                <section class="ac-container">
                <div>
                    <input id="ac-1" name="accordion-1" type="radio" />
                    <label for="ac-1">목적지를 말씀 하셨나요?</label>
                    <article class="ac-small">
                        <p>출발 전, 가고자 하는 목적지를 기사님께 말하세요. 출발하고 미터기가 켜져있는지 확인하세요. 100km 이상 가는 거리는 출발 전 흥정하고 가는것이 좋습니다.</p>
                    </article>
                </div>
                <div>
                    <input id="ac-2" name="accordion-1" type="radio" />
                    <label for="ac-2">경로와 다른 길을 가고 있나요?</label>
                    <article class="ac-medium">
                        <p>왜 이길로 가는건지 물어보세요. 지름길이거나 교통상황 때문일 수도 있어요.</p>
                    </article>
                </div>
                <div>
                    <input id="ac-3" name="accordion-1" type="radio" />
                    <label for="ac-3">기사님이 무언가 이상한가요?</label>
                    <article class="ac-large">
                        <p>기사님이 무언가 수상하다면 다른 택시를 타는게 나을 수 있어요. '그냥 여기서 내릴게요' 라고 말하세요.</p>
                    </article>
                </div>
                <div>
                    <input id="ac-4" name="accordion-1" type="radio" />
                    <label for="ac-4">기사님을 신고 하시겠어요?</label>
                    <article class="ac-large">
                        <p>기사님이 부당요금을 제시했다면 택시 영수증을 받아 콜센터(국번없이 120)에 전화하여 신상을 말하고 신고하면 외국인에겐 더욱 친절하게 대해주고 보상금과 신고결과를 받을 수 있어요. 처벌 받은 택시기사는 3번 경고시 택시 및 운전 자격증 정지를 받게 돼요.</p>
                    </article>
                </div>
                <div>
                    <input id="ac-5" name="accordion-1" type="radio" />
                    <label for="ac-5">요금이 많이 나왔나요?</label>
                    <article class="ac-large">
                        <p>약간의 오차가 있을 수 있지만 10000원 이상 오차가 있다면 기사님께 예상요금과 다르다며 신고하겠다고 해보세요. 만약 AM12시 ~ AM5시 시간이거나 다른 시로 이동한다면 20%가 추가적으로 나올 수 있어요.</p>
                    </article>
                </div>
            </section>
                <a href="#0" class="cd-popup-close img-replace">Close</a>
            </div> <!-- cd-popup-container -->
        </div> <!-- cd-popup -->

    </div>
</body>
<script src="https://apis.skplanetx.com/tmap/js?version=1&format=javascript&appKey=6963ba88-7df2-3c35-bc38-c8a6f47d9dcc"></script>
<script>
jQuery(document).ready(function($){
    //open popup
    $('.cd-popup-trigger').on('click', function(event){
        event.preventDefault();
        $('.cd-popup').addClass('is-visible');
    });
    
    //close popup
    $('.cd-popup').on('click', function(event){
        if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
            event.preventDefault();
            $(this).removeClass('is-visible');
        }
    });
    //close popup when clicking the esc keyboard button
    $(document).keyup(function(event){
        if(event.which=='27'){
            $('.cd-popup').removeClass('is-visible');
        }
    });
});
</script>
<script>
function success() {
    alert('목적지에 도착하였습니다. 예상요금은 <?php echo $taxiFare ?> 입니다. 약간의 오차가 있을 수 있습니다.');
    document.theForm.submit();
}
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
}

    var geocoder = new daum.maps.services.Geocoder();

function detail_location(Endlat, Endlng) {
//     if (navigator.geolocation) {
//         // GeoLocation을 이용해서 접속 위치를 얻어옵니다
//         navigator.geolocation.getCurrentPosition(function(position) {
                      
//         var	Startlat = position.coords.latitude, // 위도
//             Startlng = position.coords.longitude; // 경도
//         searchRoute(Startlat, Startlng, Endlat, Endlng); //길찾기

//         //위도 경도 변환
        var pr_3857 = new Tmap.Projection("EPSG:3857");
    	var pr_4326 = new Tmap.Projection("EPSG:4326"); // wgs84

//         lonlat = new Tmap.LonLat(Startlng, Startlat).transform(pr_4326, pr_3857);
//         });
//     } else { // HTML5의 GeoLocation을 사용할 수 없을때 마커 표시 위치와 인포윈도우 내용을 설정합니다
//         var locPosition = new daum.maps.LatLng(33.450701, 126.570667),message = '위치서비스를 사용할수 없어요..'
//     }
        
        searchRoute('<?php echo $Slat ?>', '<?php echo $Slon ?>', Endlat, Endlng); //길찾기
        lonlat = new Tmap.LonLat('<?php echo $Slon ?>', '<?php echo $Slat ?>').transform(pr_4326, pr_3857);
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