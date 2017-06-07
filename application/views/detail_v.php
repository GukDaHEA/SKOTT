
<meta http http-equiv="X-UA-Compatible" content="IE=edge"/>
<!-- 호환성 맞춰주는 소스 -->
<!-- <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"/> -->
<!-- viewport는 화면의 확대를 관리하는 것입니다. 모바일 웹브라우져는 대부분 기기의 화면이 작기 때문에 원래의 페이지를 축소해서 보여줍니다. 하지만 모바일에 최적화 된 페이지는 그럴 필요가 없겠죠? width 를 100%로 주어 어떤 해상도에서도 딱 맞춤형으로 나오는 것이 사용성이 훨씬 좋아집니다. 그러기 위해서는 화면을 확대하는 것을 방지해야 하는데요. 이것을 사용하면 가로보기로 전환시에 확대가 되는 것을 방지 합니다. 코드의 내용을 자세히 보면, initial-scale 은 처음 열렸을 때, maximum-scale 은 확대시의 최대로 확대되는 비율을 나타냅니다. 그리고 user-scalabe 을 통해서 확대를 사용할지 안할지를 결정할 수 있습니다. -->
<!-- <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script> -->
<script src="/static/js/juery.bpopup.min.js" type="text/javascript"></script>

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
        margin-right:45w;
        padding:10px;
      }

      .detail_image {
        border:0px solid gray;
        width:550px;
        height:450px;
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
        margin-left : 13%;
      }

      #div_ReviewWrite {
        float:right;
      }

      * {
        box-sizing:border-box;
      }

     .container {
        height :flex;
        border :0px;
        margin-bottom : 5%;
      }

      .thumb {
        width : 60%;
        height :flex;
        float : left;
        margin-left: 15%;
        margin-top : 15%;
      }

     header {
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
    margin-left:4%;
    width : 90%;
    height: 120px;
    text-decoration: none;
  }
    .multi_image_list ul li:hover {
        opacity:0.8;
          filter:alpha(opacity=8);
        background-color: #ececec;
        display: block;
      }
      @media screen and (max-device-width:450px)
      {       
        .pc{ display: none;}
      }
      @media screen and (min-device-width:450px)
      {       
        .nopc{ display: none;}
      } 

       @media(max-width: 1025px) {
          .positive.ui.button {
            width : 90%;
/*            margin-top :500px;*/
          }

/*          .detail_image {
          width:10px;
          height:600px;
        }*/
       }

    </style>


<body onload="initTmap(<?php echo $lat;?>,<?php echo $lng;?>)">


<div class="container">

   <header>
      <div class="thumb-wrap">
          <div class="thumb">
        <div class = "tour_name"><h1><?php echo $name;?></h1></div>
                <ul>
                 <img class="detail_image" id="lens_img" src="/static/image/1.jpg"  /> <hr/>
                   <li class="multi_image_list">
                     &nbsp&nbsp<img src="/static/image/1.jpg" style="width: 100px; height: 82px;cursor: pointer" onclick="multi_image_view(this);" />
                     &nbsp<img src="/static/image/2.jpg" style="width: 100px; height: 82px;cursor: pointer" onclick="multi_image_view(this);" />
                     &nbsp<img src="/static/image/3.jpg" style="width: 100px; height: 82px;cursor: pointer" onclick="multi_image_view(this);" />
                   </li>
                </ul>
          </div>

                  <div id="div_Taxi" style="background-color: #FFF"> 
                       <h3 style="color:#4d7e2b;font-weight:">택시 정보 </h3><br/>
                        <div id = "div_Map"></div>


                    <form action="/drive/drive" method="POST">
                            <div id= "div_taxiinfo">
                              <div id="div_Address" style="text-align:center"><br/>
                              예상시간 : <?php echo $reco_time;?>  /
                              예상거리 : <?php echo $reco_distance;?>   <br/>
                              예상 택시요금 : <?php echo $reco_money;?><br /><br/>
                              출발지 : <input type="text" style="color:blue; font-size:15px;width:250px;height:30px" name="start" value="현재 위치"/> <br />
                              도착지 : <input type="text" style="color:blue; font-size:15px;width:250px;height:30px" name="end" value="<?php echo $reco_address;?>" /> <br />
                              </div> <br/>
                              <h4 style="font-weight:bold;text-align:center;" class="pc">※pc 버전일 경우 호출하실 수 없습니다.</h4>
                              <button class="nopc" id="Btn" onclick = "call_send()">호출하기</button>
                            </div>
                    </form>
                </div>
      </div>
      </header>
</div>
                                    <button class = "positive ui button" onclick="location.href='/board_c/board_v'">리뷰보기</button>
<!--       <header>
        <div id = "div_Info">
          <h3 style="color:#4d7e2b">관광지 정보</h3>
           <div id = "div_Title2">
              <?php echo $name;?>
           </div>
           <div id = "div_Info2">
           <p>   
            <?php echo $reco_text;?> 
           </p>
           </div>
        </div>
        <br/><br/>
    </header> -->



<script src="https://apis.skplanetx.com/tmap/js?version=1&format=javascript&appKey=6963ba88-7df2-3c35-bc38-c8a6f47d9dcc">
</script>
<script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=6f9cc1cd3f08a51269ed1888616c3701&libraries=clusterer"></script>

<script type="text/javascript">

var oriimg;

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

function detail_location(Endlat, Endlng) {
              if (navigator.geolocation) {
                
                // GeoLocation을 이용해서 접속 위치를 얻어옵니다
                navigator.geolocation.getCurrentPosition(function(position) {
                    
                    var Startlat = position.coords.latitude, // 위도
                        Startlng = position.coords.longitude; // 경도
                      searchRoute(Startlat, Startlng, Endlat, Endlng);
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

function multi_image_view(obj) {  //사진 바꾸기
    var img_obj = document.getElementById('lens_img');
    if (img_obj) {
        oriimg = img_obj.src;
        img_obj.src = obj.src;
    }
}

// $(document).ready(function(){ 
//   $('#Btn').click(function() { 
//     var result = confirm('호출 페이지로 이동 하시겠습니까?'); 
//     if(result) { //yes 
//       location.replace('/drive/drive'); 
//     }
//     else { //no 
//     } 
//   }); 
// });

</script>