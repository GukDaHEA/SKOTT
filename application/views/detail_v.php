
<meta http http-equiv="X-UA-Compatible" content="IE=edge"/>
<!-- 호환성 맞춰주는 소스 -->
<!-- <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"/> -->
<!-- viewport는 화면의 확대를 관리하는 것입니다. 모바일 웹브라우져는 대부분 기기의 화면이 작기 때문에 원래의 페이지를 축소해서 보여줍니다. 하지만 모바일에 최적화 된 페이지는 그럴 필요가 없겠죠? width 를 100%로 주어 어떤 해상도에서도 딱 맞춤형으로 나오는 것이 사용성이 훨씬 좋아집니다. 그러기 위해서는 화면을 확대하는 것을 방지해야 하는데요. 이것을 사용하면 가로보기로 전환시에 확대가 되는 것을 방지 합니다. 코드의 내용을 자세히 보면, initial-scale 은 처음 열렸을 때, maximum-scale 은 확대시의 최대로 확대되는 비율을 나타냅니다. 그리고 user-scalabe 을 통해서 확대를 사용할지 안할지를 결정할 수 있습니다. -->
<!-- <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script> -->
<script src="/static/js/juery.bpopup.min.js" type="text/javascript"></script>

<title> 상세 페이지 - <?php echo $name; ?></title>
<style type="text/css">
    .map_wrap {position:relative;width:100%;height:350px;}
    .title {font-weight:bold;display:block;}
    .hAddr {position:absolute;left:10px;top:10px;border-radius: 2px;background:#fff;background:rgba(255,255,255,0.8);z-index:1;padding:5px;}
    #centerAddr {display:block;margin-top:2px;font-weight: normal;}
    .bAddr {padding:5px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;}

      #div_Title {
        margin-right:45w;
        padding:10px;
      }

      .detail_image {
        border:0px solid gray;
        width:750px;
        height:500px;
        padding:10px;
        border-radius: 5px;
      }

      #div_Taxi {
        border:1px solid #e2e2e2;
        padding:15px;
        margin:20px;
        width:500px;
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
        width :70%;
        height :flex;
        border :0px;
        margin-top : 100px;
      }

     header {
        font-size:15pt;
        border : 0px solid #e2e2e2;
        padding :10px;
        display: flex;
        margin-top : 20px;
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
      .btn_search {
            width:230px; height:40px;
            /*background:url(./search_btn.png) no-repeat 0 0;*/
            border:0;  
            margin:6px 0 0 0;          
            border-left:none;
            background-color:#f3753a;
            border-radius:5px 5px 5px 5px;
            float:right;
            color:antiquewhite;
            font-size:17px;
            font-weight:bold;
        }
        .btn_search:hover {
          background-color: #d16126;
        }
    .multi_image_list ul li:hover {
        opacity:0.8;
          filter:alpha(opacity=8);
        background-color: #ececec;
        display: block;
      }
      @media all and (max-width:768px)
      {       
        .pc{ display: none;}
      }
      @media all and (min-width:768px)
      {       
        .nopc{ display: none;}
      } 
            
        
  

    </style>
<div class="container">

  <div><h1><?php echo $name;?></h1></div>
   <header>
  <div class="thumb-wrap">
      <div class="thumb">
            <ul>
             <img class="detail_image" id="lens_img" src="/static/image/1.jpg"  /> <hr/></li>
               <li class="multi_image_list">
                 <img src="/static/image/1.jpg" style="width: 100px; height: 82px;cursor: pointer" onclick="multi_image_view(this);" />
                 <img src="/static/image/2.jpg" style="width: 100px; height: 82px;cursor: pointer" onclick="multi_image_view(this);" />
                 <img src="/static/image/3.jpg" style="width: 100px; height: 82px;cursor: pointer" onclick="multi_image_view(this);" />
               </li>
            </ul>
      </div>
  </div>
      <div id="div_Taxi" style=" background-color: #FFF"> <!--; margin-left: 800px; z-index: 1000;position:fixed -->
         <h3 style="color:#f3753a;font-weight:">택시 정보 </h3><br/>
<!-- 
      <iframe src="/index.php/topic/navi" width="600" height="300">
      </iframe> -->

      <div id = "div_Map">
      </div>
      <script language="javascript" src="https://apis.skplanetx.com/tmap/js?version=1&format=javascript&appKey=2695c76d-bc55-34a4-91cd-2e373b1f97ee"></script>
       <script type="text/javascript">
        //초기화 함수
function initTmap(){
    centerLL = new Tmap.LonLat(14145677.4, 4511257.6);
    map = new Tmap.Map({div:'div_Map',
                        width:'100%', 
                        height:'400px',
                        transitionEffect:"resize",
                        animation:true
                    }); 
    searchRoute();
};


//경로 정보 로드
function searchRoute(){
    var routeFormat = new Tmap.Format.KML({extractStyles:true, extractAttributes:true});
    var startX = 126.778534;
    var startY = 37.490559;
    var endX = 126.97687800509752;
    var endY = 37.57595094977122;
    var option = 10;
    var urlStr = "https://apis.skplanetx.com/tmap/routes?version=1&format=xml";
    urlStr += "&startX="+startX;
    urlStr += "&startY="+startY;
    urlStr += "&endX="+endX;
    urlStr += "&endY="+endY;
    urlStr += "&appKey=2695c76d-bc55-34a4-91cd-2e373b1f97ee";
    urlStr += "&reqCoordType=WGS84GEO"
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

          <div id= "div_taxiinfo">

<div id="div_Address" style="text-align:center">
        출발지 : <input type="text" style="color:blue; font-size:15px;width:250px;height:30px" value="<?php ?>"readonly /> <br />
        도착지 : <input type="text" style="color:blue; font-size:15px;width:250px;height:30px" value="<?php echo $reco_address;?> " readonly /> <br />
      </div>
        <ul> <li> 20분 </li>
             <li> 2.5 km </li> <br/>
             <li> 택시비 약 12,000 원 </li>
        </ul>
      <h4 style="font-weight:bold;text-align:center;" class="pc">※pc 버전일 경우 호출하실 수 없습니다.</h4>
      <button class="nopc" >호출하기</button>
         </div>
      </div>
   </header>
   <header>
      <div id = "div_Info">
      <h3 style="color:#f3753a">관광지 정보</h3>
         <div id = "div_Title2">
            <?php echo $name;?>
         </div>
         <div id = "div_Info2">
          <?php echo $reco_text;?> 
         <p>   
          광화문은 경복궁의 남문이며, 궁성의 정문이다. 광화문은 국왕이 드나드는 정문이기도 했지만, 조선의 법궁인 경복궁의 정문이었기 때문에 다른 궁궐의 정문에 비해 
            그 규모와 격식 면에서도 매우 웅장하고 화려했다. 또한 광화문은 담장 끝 동쪽과 서쪽에 각각 동십자각과 서십자각을 두어 조선의 5대 궁궐 가운데 유일하게 궐문형식을 갖추고 있기도 했다.
            최근에는 촛불집회 장소로도 유명해진 광화문이다.
         </p>
         </div>
      </div>
   </header>
      <div id = "div_Review">
          <h3 style="color:#f3753a">리뷰 </h3>
      </div>
</div>

<script type="text/javascript">

var oriimg;

function multi_image_view(obj) {  //사진 바꾸기
    var img_obj = document.getElementById('lens_img');
    if (img_obj) {
        oriimg = img_obj.src;
        img_obj.src = obj.src;
    }
}


// $(document).ready(function() {
//   lodingList()
// });

// function lodingList() {
//   $.ajax ({
//     type: 'POST',
//     url: "/index.php/topic/getList",
//     data: { PAGE: '1' },
//     cache: false,
//     async: false
//   })
//   .done(function(html){
//     $("#div_ReviewStar").html(html);
//   });
// }

</script>