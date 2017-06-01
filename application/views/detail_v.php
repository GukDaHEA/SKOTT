
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
        width:650px;
        height:500px;
        padding:10px;
        border-radius: 5px;
      }

      #div_Taxi {
        border:1px solid #e2e2e2;
        padding:15px;
        margin:20px;
        width:480px;
        z-index: 1000;
  /*      position:fixed;*/
        float:right;
        margin-left : 42%;
      }

      #div_Info {
        text-align: left;
      }

      #div_Title2 {
        text-align: left;
      }

      #div_Map {
        margin : 10px;
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
      }

      #div_ReviewWrite {
        float:right;
      }

      * {
        box-sizing:border-box;
      }

     .container {
        width :1400px;
        height :flex;
        border :0px;
        margin-top : 100px;
      }

      .thumb {
        width : 60%;
        height :flex;
        float : left;
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
    </style>

    <style type="text/css">
          .BOXA {
/*    border : 1px solid black;*/
    height: 11%;
    background-color: rgba(0,0,0,0.8);
    color : white;
    text-align: center;
    vertical-align: middle;
    font-size: 10pt;
  }


  .map_logo {
/*    border : 1px solid red;*/
    height: 100%;
    width : 15%;
    float : left;
    padding-top : 10px;
  }

  .map_search {
/*    border : 1px solid red;*/
    width : 45%;
    height: 100%;
    float : left;
    padding-top : 30px;
  }

  .map_home, .map_view, .map_location, .map_login {
/*    border : 1px solid red;*/
    width : 10%;
    height: 100%;
    float : left;
    padding-top : 30px;
  }
  .ui.search {
    color : black;
    padding-right : 100px;
  }
  ol {
    list-style: none;
  }

  .map_menu li a {
    color : white;
    text-decoration: none;
  }

    .map_menu li a:hover {
    color :#4d7e2b;
  } 

    </style>

<body onload="initTmap(<?php echo $lat;?>,<?php echo $lng;?>)">
        <?xml version="1.0" encoding="UTF-8"?>
<kml xmlns="http://www.opengis.net/kml/2.2"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://schemas.opengis.net/kml/2.2.0/ogckml22.xsd"
    xmlns:tmap="http://tlp.tmap.co.kr/">

<!-- <body onload="initTmap()">  -->

<div class = "BOXA">
  <div class = "map_logo"><img src="/static/image/header/logo.png"></div>
  <div class = "map_search"> 

    <div class="ui search">
      <div class="ui icon input">
        <input class="prompt" type="text" size ="60" placeholder="Search...">
       <i class="inverted circular search link icon"></i>
      </div>
    </div>

<!-- <div class="ui icon input" id ="search_ui">
  <input type="text" class = "prompt" placeholder="Search..."> 
  <div><i class="inverted circular search link icon"></i></div>
</div>
 -->

  </div>
<ol class = "map_menu">
  <li class = "map_home"><p><a href="/mains">홈</a></p></li>
  <li class = "map_view"><p><a href="/map/map_v">지도보기</a></p></li>
  <li class = "map_location"><p><a href="#">내위치</a></p></li>
               <?php
                if ($this->session->userdata('is_login')){
                ?>
                    <li class = "map_login"><a href="/Login/logout">로그아웃</a></li>
                    <li><a href="/User/user"><?php echo $this->session->userdata('name') ?> 님</a></li>
                <?php
                } else {
                ?>
                    <li class = "map_login"><a href="/Login">로그인</a></li>
                <?php
                }
                ?>
  <ol>
</div>

<div class="container">

  <div><h1><?php echo $name;?></h1></div>
   <header>
      <div class="thumb-wrap">
          <div class="thumb">
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
         <h3 style="color:#f3753a;font-weight:">택시 정보 </h3><br/>
          <div id = "div_Map"></div>

            <div id= "div_taxiinfo">
              <div id="div_Address" style="text-align:center">
                출발지 : <input type="text" style="color:blue; font-size:15px;width:250px;height:30px" value="현재 위치" /> <br />
                도착지 : <input type="text" style="color:blue; font-size:15px;width:250px;height:30px" value="<?php echo $reco_address;?> " readonly /> <br />
              </div>



              <ul> 
                 <li>  <tmap:totalDistance></tmap:totalDistance></li>
                 <li>  <tmap:totalTime></tmap:totalTime>         </li> <br/>
                 <li>  <tmap:totalFare></tmap:totalFare>             </li>
                 <li>  <tmap:taxiFare></tmap:taxiFare>           </li>
              </ul>
              <h4 style="font-weight:bold;text-align:center;" class="pc">※pc 버전일 경우 호출하실 수 없습니다.</h4>
              <button class="nopc" id="Btn">호출하기</button>
            </div>
        </div>

      </div>
      </header>
      <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
      <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
      <header>
        <div id = "div_Info">
          <h3 style="color:#f3753a">관광지 정보</h3>
           <div id = "div_Title2">
              <?php echo $name;?>
           </div>
           <div id = "div_Info2">
           <p>   
            <?php echo $reco_text;?> <!-- 관광지 정보 뿌려줄 내용 -->
           </p>
           </div>
        </div>
        <br/><br/>
        <div id = "div_Review">
            <h3 style="color:#f3753a">리뷰 </h3>
        </div>

    </header>
</div>

</body>
</html>


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

$(document).ready(function(){ 
  $('#Btn').click(function() { 
    var result = confirm('정말 호출 하시겠습니까?'); 
    if(result) { //yes 
      location.replace('/startmain'); 
    } 
    else { //no 
    } 
  }); 
});

</script>