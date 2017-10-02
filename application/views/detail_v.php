
<meta http http-equiv="X-UA-Compatible" content="IE=edge"/>
<!-- 호환성 맞춰주는 소스 -->
<!-- <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"/> -->
<!-- viewport는 화면의 확대를 관리하는 것입니다. 모바일 웹브라우져는 대부분 기기의 화면이 작기 때문에 원래의 페이지를 축소해서 보여줍니다. 하지만 모바일에 최적화 된 페이지는 그럴 필요가 없겠죠? width 를 100%로 주어 어떤 해상도에서도 딱 맞춤형으로 나오는 것이 사용성이 훨씬 좋아집니다. 그러기 위해서는 화면을 확대하는 것을 방지해야 하는데요. 이것을 사용하면 가로보기로 전환시에 확대가 되는 것을 방지 합니다. 코드의 내용을 자세히 보면, initial-scale 은 처음 열렸을 때, maximum-scale 은 확대시의 최대로 확대되는 비율을 나타냅니다. 그리고 user-scalabe 을 통해서 확대를 사용할지 안할지를 결정할 수 있습니다. -->
<!-- <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script> -->

        <link rel="stylesheet" type="text/css" href="/static/Semantic/semantic.min.css">
        <script
          src="https://code.jquery.com/jquery-3.1.1.min.js"
          integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
          crossorigin="anonymous">
        </script>
        <script src="/static/Semantic/semantic.min.js"></script>

<title> 상세 페이지 - <?php echo $name; ?></title>
<style type="text/css">

      #div_Title {
        padding:10px;
      }

      .detail_image {
        border:0px solid gray;
        width:600px;
        height:80%;
        padding:10px;
        border-radius: 5px;
      }

      #div_Taxi {
        border:1px solid #e2e2e2;
        padding:15px;
/*        margin:20px;*/
        width:500px;
        z-index: 1000;
        position: absolute;
        float:right;
        margin-left : 55%;
        margin-top : 5%;
      }

      #div_Info {
        text-align: left;
      }

      #div_Title2 {
        text-align: left;
      }

      #div_Map {
/*        margin : 10px;*/
        width : 400px;
      }
      #div_ReviewStar {
        margin : 10px;
        font-style : bold;
        width : 900px;
        height : flex;
        text-align: left;
        padding:15px;
      }

      #div_taxiinfo {
        float: left;
        text-align : center;
        position:relative;
        /*margin-left : 13%;*/
        width:100%;
      }

      #div_ReviewWrite {
        float:right;
      }
      #div_Address {
        background:rgba(0,255,0,0.1);
        border-radius:30px;
      }

      * {
        box-sizing:border-box;
      }

     .container {
        height :flex;
        border :0px;
        margin-bottom : 5%;
        margin-left : 10%;
        margin-top:7%;
        background-color: #fff;
      }

      .thumb {
        width : 60%;
        height :flex;
        float : left;
        margin-left: 15%;
        margin-top : 15%;
      }

     #header2 {
        font-size:15pt;
        border : 0px solid #e2e2e2;
        padding :10px;
        display: flex;
        border-radius: 30px;
      }

      ul li {
        list-style: none;
        border : 1px;
      }


      ul li:first-child {
        font-weight: bold;
      }

      ol li {
        list-style: none;

      }


  .tour_name {
    margin-left: 50px;
  }

  .positive.ui.button {
    margin-top:300px;
    width : 90%;
    height: 120px;
    text-decoration: none;
    background-color:#4d7e2b;
    position:relative;
  }
       
    </style>

    <style type="text/css">
      
      .Box1, .Box2{
        border : 0px solid black;
      }

      .BoxA {
      }

      .Box1 {
        float :left;
        width : 50%;
        height: 690px;
      }

      .Box2 {
        float : left;
        width :40%;
        height: 400px;
        margin-top : 1%;
      }
      .nopc {
        font-size: 15pt;
        width : 90%;
        height: 50px;
        background-color:#4d7e2b;
        font-weight:bold;
        color:white;
        display:none;
      }

       @media(max-width: 1025px) {
          .container {
            margin-left:0%;
          }
          .detail_image {
            width:100%;
            height:50%;
          }
          .multi_image_list img{
            width:100%;
          }
          .positive.ui.button {
            width : 90%;
          }
          .Box1 {
            margin-top:100px;
            float : left;
            width : 100%;
            margin-bottom:100px;
          }
          .Box2 {
            float:left;
            width :100%;
          }
          .positive.ui.button {
            font-size: 15pt;
          }
          .Box1_1 {
            border:0px solid black;
          }
          .Box1_2 {
            float:left;
            margin-top:8%;
          }
          .Box1_2 h1 {
            font-size : 40px;
          }
          .Box1_2 h3{
            font-size : 15px;
          }
          .tour_name h1 {
            margin-left:-40px;
            font-size : 30px;
          }
          #div_Address {
            margin-top:50px;
            font-size: 20pt;
            width:100%;
          }
          .Box2{
            float:left;
            margin-bottom:300px;
          }
          .Box2 h1 {
            font-size: 30px;
            height:20%;
          }
          .Box2 h2 {
            font-size: 15px;
          }
          #div_taxiinfo {

          }
          .Box2 input[type=text] {
            width: 70%;
            height: 30px;
            border:none;
            font-size:15px;

          }

      .pc {
        display:none;
      }
      .nopc {
        display:block;
      }

    input[type=text] {
      color:blue; font-size:15px;width:90%;height:30px;
    }
  }
    </style>


<body onload="initTmap(<?php echo $lat;?>,<?php echo $lng;?>)">

<div class="container">
    <div class = "BoxA">
      <div class = "Box1">
        <div class = "Box1_1">
          <div class = "tour_name"><h1><?php echo $name;?></h1></div>
          <div class="image">
            <ul>
            <img class="detail_image" id="lens_img" src="/static/image/detail/<?php echo $idx ?>/1.jpg"  /> <hr/>
              <li class="multi_image_list">
                &nbsp&nbsp<img src="/static/image/detail/<?php echo $idx ?>/1.jpg" style="width: 100px; height: 82px;cursor: pointer" onclick="multi_image_view(this);" />
                &nbsp<img src="/static/image/detail/<?php echo $idx ?>/2.jpg" style="width: 100px; height: 82px;cursor: pointer" onclick="multi_image_view(this);" />
                &nbsp<img src="/static/image/detail/<?php echo $idx ?>/3.jpg" style="width: 100px; height: 82px;cursor: pointer" onclick="multi_image_view(this);" />
              </li>
            </ul>
          </div>
        </div>
        <div id="header2">
          <div class="Box1_2">
            <div id = "div_Info">
              <h1 style="color:#4d7e2b">관광지 정보</h1>
              <div id="div_Title2">
                <h3><?php echo $name;?></h3>
              </div>
              <div id="div_Info2">
                <h3>
                  <p>
                  <?php echo $reco_text;?> <!-- 관광지 정보 뿌려줄 내용 -->
                  </p>
                </h3>
              </div>
            </div>
          </div>
          <br/><br/>
        </div>
      </div>

      <div class = "Box2">
        <h1 style="color:#4d7e2b"> 택시 정보 </h1>
        <div id = "div_Map"></div>
        <form action="/drive/drive" method="POST">
          <div id= "div_taxiinfo">
            <div id="div_Address" style="text-align:center;font-size:5pt;">
              <br/><h2>
                            예상시간 : <div class= "totalTimeFun">time</div>
                            예상거리 :  <div class= "totalDistanceFun">Distance</div> <br/>
                            예상 택시요금 : <div class= "taxiFareFun">Fare</div> <br/>
                            <input type="hidden" id="totalTime" name="totalTime" />
                            <input type="hidden" id="totalDistance" name="totalDistance" />
                            <input type="hidden" id="taxiFare" name="taxiFare" />
                            <input type="hidden" id="Slat" name="Slat" />
                            <input type="hidden" id="Slon" name="Slon" />
                            <input type="hidden" id="Elat" name="Elat" />
                            <input type="hidden" id="Elon" name="Elon" />
                            출발지 : <input type="text" name="start" id="start" value="현재 위치" readonly/> <br />
                            <input type="hidden" id="SStart" name="SStart" />
                            도착지 : <input type="text" name="end" value="<?php echo $reco_address;?>" readonly /> <br />
              <br/></h2>
                            <h2 style="font-weight:bold;text-align:center;" class="pc">※pc 버전일 경우 호출하실 수 없습니다.</h2>
                            <button class="nopc" id="Btn">호출하기</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <button class = "positive ui button" onclick="location.href='/board_c/board_v/<?php echo $idx ?>'">리뷰 보기</button>
  </div>
</div>

<script src="https://apis.skplanetx.com/tmap/js?version=1&format=javascript&appKey=6963ba88-7df2-3c35-bc38-c8a6f47d9dcc"></script>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=6008f34c9c8f9b97d7f892acf64df6a8&libraries=services"></script>
<script type="text/javascript">
function initTmap(Endlat,Endlng) {

    centerLL = new Tmap.LonLat(14145677.4, 4511257.6);
    map = new Tmap.Map({div:'div_Map',
                        width:'100%', 
                        height:'400px',
                        transitionEffect:"resize",
                        animation:true
                    });

    detail_location(Endlat, Endlng);
    // searchRoute();
};

geocoder = new daum.maps.services.Geocoder();

function detail_location(Endlat, Endlng) {
              if (navigator.geolocation) {
                // GeoLocation을 이용해서 접속 위치를 얻어옵니다
                navigator.geolocation.getCurrentPosition(function(position) {
                        Startlat = position.coords.latitude, // 위도
                        Startlng = position.coords.longitude; // 경도
                      searchRoute(Startlat, Startlng, Endlat, Endlng); //길찾기
                      totalTaxiInfo(Startlat, Startlng, Endlat, Endlng); //택시 거리, 요금, 시간정보

                      var coord = new daum.maps.LatLng(Startlat, Startlng);
                      var callback = function(result, status) {
                          if (status === daum.maps.services.Status.OK) {
                              detailAddr = result[0].address.address_name;
                              document.getElementById('SStart').value= detailAddr;
                          }
                      };
                      geocoder.coord2Address(coord.getLng(), coord.getLat(), callback);
                    document.getElementById('Slat').value= Startlat;
                    document.getElementById('Slon').value= Startlng;
                    document.getElementById('Elat').value= Endlat;
                    document.getElementById('Elon').value= Endlng;
                  }, function(error){
                      switch(error.code) {
                      case error.PERMISSION_DENIED:
                      alert("사용자가 위치 기능 사용을 거부했습니다.");
                      break;
                      case error.POSITION_UNAVAILABLE:
                      alert("위치를 구할 수 없습니다.");
                      break;
                      case error.TIMEOUT:
                      alert("시간을 초과했습니다.");
                      break;
                      case error.UNKNOWN_ERROR:
                      alert("기타 에러");
                      break;
                      }
                  });
            } else { // HTML5의 GeoLocation을 사용할 수 없을때 마커 표시 위치와 인포윈도우 내용을 설정합니다
                var locPosition = new daum.maps.LatLng(33.450701, 126.570667),message = 'geolocation을 사용할수 없어요..'
            }
}

//경로 정보 로드
function searchRoute(Startlat, Startlng, Endlat, Endlng){
    var routeFormat = new Tmap.Format.KML({extractStyles:true, extractAttributes:true});
    var startXs = Startlng;
    var startYs = Startlat;
    var endXs = Endlng;
    var endYs = Endlat;
    var option = 10;
    var urlStr = "https://apis.skplanetx.com/tmap/routes?version=1&format=xml";
    urlStr += "&startX="+startXs;
    urlStr += "&startY="+startYs;
    urlStr += "&endX="+endXs;
    urlStr += "&endY="+endYs;
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

function totalTaxiInfo(Startlat, Startlng, Endlat, Endlng) {
              $.ajax ({
             type : 'POST',
             url : 'https://apis.skplanetx.com/tmap/routes?appKey=681ac473-87c5-3a80-8adb-91f8d105ba63&endX='+Endlng+'&endY='+Endlat+' &startX=' + Startlng + '&startY=' +Startlat+' &reqCoordType=WGS84GEO&resCoordType=WGS84GEO',
             dataType : 'json',
             success : function (data) {
                  // alert(data.features[0].properties["totalTime"]);
                  var totalTime = data.features[0].properties["totalTime"];
                  var totalDistance = data.features[0].properties["totalDistance"] / 1000;
                  var taxiFare = data.features[0].properties["taxiFare"];

                  hour = parseInt(totalTime/3600);
                  min = parseInt((totalTime%3600)/60);

                  if(hour ==0) {
                    totalTime = min+" 분 ";
                  } else {
                    totalTime = hour+" 시간 "+min+" 분 ";
                  }

                  totalDistance = parseInt(totalDistance) +"km";
                  taxiFare = Math.floor(taxiFare/100) * 100
                  taxiFare = taxiFare + "원"

                  $(".totalTimeFun").html(totalTime);
                  $(".totalDistanceFun").html(totalDistance);
                  $(".taxiFareFun").html(taxiFare);
                  document.getElementById("totalTime").value = totalTime;
                  document.getElementById("totalDistance").value = totalDistance;
                  document.getElementById("taxiFare").value = taxiFare;
             },
           error:function(request,status,error){
              alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
             }
          });
}

//경로 그리기 후 해당영역으로 줌
function onDrawnFeatures(e){
    map.zoomToExtent(this.getDataExtent());
}

var oriimg;
function multi_image_view(obj) {  //사진 바꾸기
    var img_obj = document.getElementById('lens_img');
    if (img_obj) {
        oriimg = img_obj.src;
        img_obj.src = obj.src;
    }
}
</script>
</body>
</html>