
<meta http http-equiv="X-UA-Compatible" content="IE=edge"/>
<!-- 호환성 맞춰주는 소스 -->
<!-- <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"/> -->
<!-- viewport는 화면의 확대를 관리하는 것입니다. 모바일 웹브라우져는 대부분 기기의 화면이 작기 때문에 원래의 페이지를 축소해서 보여줍니다. 하지만 모바일에 최적화 된 페이지는 그럴 필요가 없겠죠? width 를 100%로 주어 어떤 해상도에서도 딱 맞춤형으로 나오는 것이 사용성이 훨씬 좋아집니다. 그러기 위해서는 화면을 확대하는 것을 방지해야 하는데요. 이것을 사용하면 가로보기로 전환시에 확대가 되는 것을 방지 합니다. 코드의 내용을 자세히 보면, initial-scale 은 처음 열렸을 때, maximum-scale 은 확대시의 최대로 확대되는 비율을 나타냅니다. 그리고 user-scalabe 을 통해서 확대를 사용할지 안할지를 결정할 수 있습니다. -->
<!-- <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script> -->
<script src="/static/js/juery.bpopup.min.js" type="text/javascript"></script>


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
        height : 300px;
      }
      #div_ReviewStar {
        margin : 10px;
        font-style : bold;
        width : 900px;
        height : flex;
        text-align: left;
        /*border:1px solid #e2e2e2;*/
        padding:15px;
      }

      #div_taxiinfo {
        float: left;
        text-align : center;
        display:inline-block;
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
    .multi_image_list ul li:hover {
        opacity:0.8;
          filter:alpha(opacity=8);
        background-color: #ececec;
        display: block;
      }
      .sort li { float: right; position: relative; margin-left: -1px; height: 23px; line-height: 25px; padding: 0 10px; border: 1px solid #858695;text-align: right; }
      .sort li.now { background: #858695; }
      .sort li a { font-size: 11px; line-hight: 25px; }
      .sort li.now a { color: #fff; }


    .PR15N01-recmd { z-index: 1; zoom: 1; position: relative; margin-top: 10px; color: #818391; font-size: 14px; font-weight: bold; letter-spacing; -1px; background: #fff; margin-bottom: 10px; }
    .PR15N01-recmd:after { content: ''; display: block; clear: both; }
    .star-list {position: relative; width: 74%; height: 35px; line-height: 35px; background:#fff;}
    .star-list .bull { position: absolute; top: 0; right: 10px; color:#000; }
    .star-list > a { border: 1px solid #ccc; }
    .star-list a { display: block; height: 35px; line-height: 35px; position: relative; padding-left: 15px; color: #818391; }
    .star-list em { font-size: 12px; font-weight: normal; font-style: normal; letter-spacing:2px; font-family:'Gulim'; }
    .star-list .survey { position: absolute; top: 0; _top: -10px; right: 20px; color: #515368; }
    .star-list ul { z-index:1;  zoom: 1;  display: none; position: absolute; top: 35px; left: 0; width: 100%; border-bottom: 1px solid #ccc; background-color: #fff; }
    .star-list ul li { border-left: 1px solid #ccc; border-right: 1px solid #ccc; }
    .star-list ul li a:hover { background: #eee; }
    .star-list em { color:#109fea;}
    .bull { position: absolute; top: 0; right: 10px; color:#000; }

    </style>
<div class="container">

  <div><h1>광화문</h1></div>
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
      <div id="div_Taxi" style="position: fixed; background-color: #FFF; margin-left: 1000px; z-index: 1000;">
         <h3 style="color:#f3753a;font-weight:">택시 정보 </h3><br/>
<!-- 
      <iframe src="/index.php/topic/navi" width="600" height="300">
      </iframe> -->

<div id="div_Address" style="text-align:center">
        출발지 : <input type="text" style="color:blue; font-size:15px;width:250px;height:30px" readonly /> <br />
        도착지 : <input type="text" style="color:blue; font-size:15px;width:250px;height:30px" value="서울특별시 종로구 사직로 161" readonly /> <br />
      </div>
      <div id = "div_Map">
        지도부분
      </div>
      <script language="javascript" src="https://apis.skplanetx.com/tmap/js?version=1&format=javascript&appKey=2695c76d-bc55-34a4-91cd-2e373b1f97ee"></script>
       <script type="text/javascript">
        //초기화 함수
function initTmap(){
    centerLL = new Tmap.LonLat(14145677.4, 4511257.6);
    map = new Tmap.Map({div:'map_div',
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
    var startX = 14129105.461214;
    var startY = 4517042.1926406;
    var endX = 14136027.789587;
    var endY = 4517572.4745242;
    var urlStr = "https://apis.skplanetx.com/tmap/routes?version=1&format=xml";
    urlStr += "&startX="+startX;
    urlStr += "&startY="+startY;
    urlStr += "&endX="+endX;
    urlStr += "&endY="+endY;
    urlStr += "&appKey="2695c76d-bc55-34a4-91cd-2e373b1f97ee;

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
         <!-- <div id= "div_taxiinfo">
        <ul> <li> 20분 </li>
             <li> 2.5 km </li> <br/>
             <li> 택시비 약 12,000 원 </li>
        </ul>
      <h4 style="font-weight:bold;text-align:center;">※pc 버전일 경우 호출하실 수 없습니다.</h4>
         </div>
      </div>
   </header>
   <header>
      <div id = "div_Info">
      <h3 style="color:#f3753a">관광지 정보</h3>
         <div id = "div_Title2">
            광화문
         </div>
         <div id = "div_Info2">
         <p>   광화문은 경복궁의 남문이며, 궁성의 정문이다. 광화문은 국왕이 드나드는 정문이기도 했지만, 조선의 법궁인 경복궁의 정문이었기 때문에 다른 궁궐의 정문에 비해 
            그 규모와 격식 면에서도 매우 웅장하고 화려했다. 또한 광화문은 담장 끝 동쪽과 서쪽에 각각 동십자각과 서십자각을 두어 조선의 5대 궁궐 가운데 유일하게 궐문형식을 갖추고 있기도 했다.
            최근에는 촛불집회 장소로도 유명해진 광화문이다.
         </p>
      </div>
      </div>
   </header>

   <header>

      <div id = "div_Review">
         <h3 style="color:#f3753a">리뷰 </h3>
      <div class="PR15N01-recmd">
         <div class="star-list" star_key="1">
            <span class="bull">▼</span>
            <a href="#none"><em>★★★★★</em><span class="survey">아주만족</span></a>
            <ul>
              <li><a href="#none"><em>★★★★★</em><span class="survey">아주만족</span></a></li>
              <li><a href="#none"><em>★★★★</em><span class="survey">만족</span></a></li>
              <li><a href="#none"><em>★★★</em><span class="survey">보통</span></a></li>
              <li><a href="#none"><em>★★</em><span class="survey">미흡</span></a></li>
              <li><a href="#none"><em>★</em><span class="survey">불만족</span></a></li>
            </ul>
        </div>
 </div>
        <span id = "div_ReviewWrite">
        <button onclick="javascript:addBoard()">리뷰 작성</button>
      </span>
</div>


<div id="writeBody" style="width:700px; height:500px; border:1px solid #e2e2e2;background-color:white ;display:none">
    <div style="width:80%;clear:both;height:30px;margin:0px auto;text-align:center">
      <button onclick="javascript:execSave();"> 저장하기 </button>
    </div>
    <div style="width:80%;clear:both;height:30px;margin:0px auto; margin-top:20px">

      <span style="width:30%;height:100%;line-height:30px">
        <b> 별점 </b>
      </span>
      <span style="width:70%;height:100%;line-height:30px">
        <input type="text" name="star" id="star">
      </span>
    </div>
    <div style="width:80%;clear:both;height:30px;margin:0px auto">
      <span style="width:30%;height:100%;line-height:30px">
        <b> 제목 </b>
      </span>
      <span style="width:70%;height:100%;line-height:30px">
        <input type="text" name="title" id="title" style="width:90%">
      </span>
    </div>
    <div style="width:80%;clear:both;height:30px;margin:0px auto">
      <span style="width:30%;height:100%;line-height:30px">
        <b> 아이디 </b>
      </span>
      <span style="width:70%;height:100%;line-height:30px">
        <input type="text" name="make" id="make" style="width:90%">
      </span>
    </div>
    <div style="width:80%;clear:both;height:270px;margin:0px auto;">
      <span style="width:30%;height:30px;line-height:30px; vertical-align:top">
        <b> 내용 </b>
      </span>
      <span style="width:70%;height:100%">
        <textarea style="width:90%;hegiht:100%" name="content" id="content"></textarea>
      </span>
    </div>
</div>
<div id="viewBody" style="width:700px; height:500px; border:1px solid #e2e2e2;background-color:white ;display:none">
    <div style="width:80%;clear:both;height:30px;margin:0px auto; margin-top:20px">
      <span style="width:30%;height:100%;line-height:30px">
        <b> 별점 </b>
      </span>
      <span style="width:70%;height:100%;line-height:30px">
        <input type="text" name="star_view" id="star_view">
      </span>
    </div>
    <div style="width:80%;clear:both;height:30px;margin:0px auto">
      <span style="width:30%;height:100%;line-height:30px">
        <b> 제목 </b>
      </span>
      <span style="width:70%;height:100%;line-height:30px">
        <input type="text" name="title_view" id="title_view" style="width:90%">
      </span>
    </div>
    <div style="width:80%;clear:both;height:30px;margin:0px auto">
      <span style="width:30%;height:100%;line-height:30px">
        <b> 아이디 </b>
      </span>
      <span style="width:70%;height:100%;line-height:30px">
        <input type="text" name="make_view" id="make_view" style="width:90%">
      </span>
    </div>
    <div style="width:80%;clear:both;height:270px;margin:0px auto;">
      <span style="width:30%;height:30px;line-height:30px; vertical-align:top">
        <b> 내용 </b>
      </span>
      <span style="width:70%;height:100%">
        <textarea style="width:90%;hegiht:100%" name="content_view" id="content_view"></textarea>
      </span>
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

function board_init() { //리뷰 작성 초기화
  $("#make").val("");
  $("#star").val("");
  $("#title").val("");
  $("#content").val("");
  $('#writeBody').bPopup().close();
}

function addBoard() {
  openMessage('writeBody');
}

function viewBoard(CODE) {
  $.ajax ({
    type: 'POST',
    url: "/index.php/topic/getView",
    data: { CODE: CODE },
    cache: false,
    async: false
  })
  .done(function(html){
    var html_array = html.split("^");

        if (html_array.length == 4) {
          var make = html_array[0];
          var star = html_array[1];
          var title = html_array[2];
          var content = html_array[3];

          $('#make_view').val(make);
          $('#star_view').val(별);
          $('#title_view').val(title);
          $('#content_view').val(content);
        }
        else {
          alert("Error");
        }
  });
  openMessage('viewBody');
}

function openMessage(IDS) {
  $('#'+IDS).bPopup();
}

function execSave() { // 저장하기 함수
  if(!Trim($("#star").val())){
    alert("별점을 입력해주세요.");
    $("#star").focus();
    return false;
  }
  if(!Trim($("#make").val())){
    alert("아이디를 입력해주세요.");
    $("#make").focus();
    return false;
  }
  if(!Trim($("#title").val())){
    alert("제목을 입력해주세요.");
    $("#title").focus();
    return false;
  }
  if(!Trim($("#content").val())){
    alert("내용을 입력해주세요.");
    $("#content").focus();
    return false;
  }

  $.ajax({
    type: 'POST',
    url: "/index.php/topic/write_ok",
    data: { make : Trim($("#make").val()), star : Trim($("#star").val()), content : Trim($("#content").val()), title : Trim($("#title").val()) },
    cache: false,
    async: false
  })

  .done(function(html) {
    if (html == "1"){
      alert ("저장되었습니다.");
      board_init();
      lodingList();
    }
    else {
      alert ("Error : " + html);
    }
    
  
  });
}
$(document).ready(function() {
  lodingList()
});

function lodingList() {
  $.ajax ({
    type: 'POST',
    url: "/index.php/topic/getList",
    data: { PAGE: '1' },
    cache: false,
    async: false
  })
  .done(function(html){
    $("#div_ReviewStar").html(html);
  });
}


function Trim(str){ // 공백제거 함수
  var index, len, bJudge

  while(true){
    bJudge=true;
    index = str.indexOf(' ');
    if(index== -1) break;
    if(index== 0){
      len = str.length;
      str = str.substring(0, index) + str.substring((index+1),len);
    }
    else {
      bJudge=false;
    }

    index = str.lastIndexOf(' ');
    if(index==-1) break;
    if(index== str.lenth-1){
      len = str.length;
      str = str.substring(0, index) + str.substring((index+1), len);
    }
    else {
      if (bJudge== false)
        break;

    } 
  }
  return str;
}

function find_now(longitude, latitude, level) {
      // 현재위치를 DAUM RESTAPI 로 조회하는 함수

      $.ajax ({
        type : "GET",
        url : "https://apis.daum.net/local/geo/coord2addr",
        data : { longitude : longitude, latitude : latitude, apikey : '612f7aebf5f9398c83de17f6652e4e0e', output : 'json' },
        dataType : "jsonp",
        jsonp : "callback",

        success : function (data) {
          alert(JSON.stringify( data ));
          
          NOW_SIDO = data['code1'];
          find_targets(data['code1'], 'SIDO_CODE');
        }
      });

    }
</script>
<script type="text/javascript" src="/static/js/power_review.js"></script>