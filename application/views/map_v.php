<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>지도 화면</title>
        <script src="/static/js/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
    <style type="text/css">
        .button_menu {
           position:absolute;right:10%;z-index: 10;font-size:20px;border-radius: 10px;}
        .map_wrap, .map_wrap * {margin:0;padding:0;font-family:'Malgun Gothic',dotum,'돋움',sans-serif;font-size:12px;}
        .map_wrap a, .map_wrap a:hover, .map_wrap a:active{color:#000;text-decoration: none;}
        .map_wrap {width:100%;height:100%;}
        #menu_wrap {position:absolute;top:30px;left:65%;bottom:0;width:28%;height:80%;margin:100px 0 30px 10px;padding:5px;overflow-y:auto;background:rgba(255, 255, 255, 0.7);z-index: 1;font-size:12px;border-radius: 10px;}
        .bg_white {background:#fff;}
        #menu_wrap hr {display: block; height: 1px;border: 0; border-top: 2px solid #5F5F5F;margin:3px 0;}
        #menu_wrap .option{text-align: center;}
        #menu_wrap .option p {margin:10px 0;}  
        #menu_wrap .option button {margin-left:5px;}
        #placesList li {list-style: none;}
        #placesList .item {position:relative;border-bottom:1px solid #888;overflow: hidden;cursor: pointer;min-height: 65px;}
        #placesList .item span {display: block;margin-top:4px;}
        #placesList .item h5, #placesList .item .info {text-overflow: ellipsis;overflow: hidden;white-space: nowrap;}
        #placesList .item .info{padding:10px 0 10px 55px;}
        #placesList .info .gray {color:#8a8a8a;}
        #placesList .info .jibun {padding-left:26px;background:url(http://t1.daumcdn.net/localimg/localimages/07/mapapidoc/places_jibun.png) no-repeat;}
        #placesList .info .tel {color:#009900;}
        #placesList .item .markerbg {float:left;position:absolute;width:36px; height:37px;margin:10px 0 0 10px;background:url(http://t1.daumcdn.net/localimg/localimages/07/mapapidoc/marker_number_blue.png) no-repeat;}
        #placesList .item .marker_1 {background-position: 0 -10px;}
        #placesList .item .marker_2 {background-position: 0 -56px;}
        #placesList .item .marker_3 {background-position: 0 -102px}
        #placesList .item .marker_4 {background-position: 0 -148px;}
        #placesList .item .marker_5 {background-position: 0 -194px;}
        #placesList .item .marker_6 {background-position: 0 -240px;}
        #placesList .item .marker_7 {background-position: 0 -286px;}
        #placesList .item .marker_8 {background-position: 0 -332px;}
        #placesList .item .marker_9 {background-position: 0 -378px;}
        #placesList .item .marker_10 {background-position: 0 -423px;}
        #placesList .item .marker_11 {background-position: 0 -470px;}
        #placesList .item .marker_12 {background-position: 0 -516px;}
        #placesList .item .marker_13 {background-position: 0 -562px;}
        #placesList .item .marker_14 {background-position: 0 -608px;}
        #placesList .item .marker_15 {background-position: 0 -654px;}
        #pagination {margin:10px auto;text-align: center;}
        #pagination a {display:inline-block;margin-right:10px;}
        #pagination .on {font-weight: bold; cursor: default;color:#777;}
    </style>

     <style>
        .area {
            position: absolute;
            background: #fff;
            border: 1px solid #888;
/*            border-radius: 3px;*/
            font-size: 50px;
            padding:2px;
        }

        .info {
            font-size: 12px;
            padding: 5px;
        }
        .info .title {
            font-weight: bold;
        }
</style>
<style type="text/css">
    
@media only screen and (max-width: 1000px) {
    .div_course{
        background-color: powderblue;
        width:965px;
        height:250px;
    }

    .div_content {
        width:1000px;
    } 

    #menu_wrap {
        width:965px;
        margin-left : -630px;
        margin-top : 1000px;
    }
}


</style>

    <style>

    .customoverlay a {display:block;text-decoration:none;color:#000;text-align:center;border-radius:6px;font-size:14px;font-weight:bold;overflow:hidden;background: #d95050;background: #d95050 url(http://t1.daumcdn.net/localimg/localimages/07/mapapidoc/arrow_white.png) no-repeat right 14px center;}

    .customoverlay:after {content:'';position:absolute;margin-left:-12px;left:50%;bottom:-12px;width:22px;height:12px;background:url('http://t1.daumcdn.net/localimg/localimages/07/mapapidoc/vertex_white.png')}
</style>

<style type="text/css">
        .reco_course {
      background-color: rgba( 255, 127, 0, 0.7 );
      opacity: 0.5;
      font-color : black;
      font-size:15px;
      text-align: center;
      border-bottom:solid black;
    }


      #course {
/*        border :5px solid black;*/
        width:26.5vw;
        height:81.8vh;

      }

      .div_head {
/*        border :5px solid black;*/
         display :flex;
        flex-direction:column;
      }

      .div_course {
        display :flex;
        flex-direction:row;
        margin : 10px;
      }

     .div_course:hover {
            background-color: yellow;
      }

      .div_img {
        display :flex;
        flex-direction:column;
      }

      .div_content {
        width:1000px;
        line-height: 2em;
      }

      .div_content table{
        font-size : 10pt;
      } 

      #p_star {
        font-size: 20pt;
      }

    .first_tour {
      font-size:15px;
    }

</style>


<style>
    .wrap .info {width: 286px;height: 120px;border-radius: 5px;border-bottom: 2px solid #ccc;border-right: 1px solid #ccc;overflow: hidden;background: #fff;}
    .wrap .info:nth-child(1) {border: 0;box-shadow: 0px 1px 2px #888;}
    .info .title {padding: 5px 0 0 10px;height: 30px;background: #eee;border-bottom: 1px solid #ddd;font-size: 18px;font-weight: bold;}
    .info .close:hover {cursor: pointer;}
    .info .body {position: relative;overflow: hidden;}
    .info .desc {position: relative;margin: 13px 0 0 90px;height: 75px;}
    .desc .ellipsis {overflow: hidden;text-overflow: ellipsis;white-space: nowrap;}
    .desc .jibun {font-size: 11px;color: #888;margin-top: -2px;}
    .info .img {position: absolute;top: 6px;left: 5px;width: 73px;height: 71px;border: 1px solid #ddd;color: #888;overflow: hidden;}
    .info:after {content: '';position: absolute;margin-left: -12px;left: 50%;bottom: 0;width: 22px;height: 12px;background: url('http://t1.daumcdn.net/localimg/localimages/07/mapapidoc/vertex_white.png')}
    .info .link {color: #5085BB;}
</style>


<body>
<div class="map_wrap">
    <div id="map" style="width:100%;height:89%;"></div>
        <div class="button_menu">
        <button type="button" onclick="location.href='map_v'" >뒤로 가기</button>
        </div>
    <div id="menu_wrap" class="bg_white">
        <div class="option">
            <div>
                <form>
                    관광지 : <input type="text" value="관광지 검색" id="keyword" size="15"> 
                    <button type="submit" class = "search_test">검색하기</button> 
                </form>
            </div>
        </div>
        <hr>
        <div class = "reco_course"> 추천코스 </div>
        <div id="course" class ="for_ajax"> 
            <div class = "div_course">
              <div class = "div_img"></div>
              <div class ="div_content" style="overflow:scroll;">
              </div>
            </div>

<script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=6f9cc1cd3f08a51269ed1888616c3701&libraries=clusterer"></script>

<script>
// 지도에 폴리곤으로 표시할 영역데이터 배열입니다 

var areas = [
    {
        name : '수도권',
        path : [
            new daum.maps.LatLng(38.02821716332485 , 126.8873788832435),
            new daum.maps.LatLng(38.17587576847857 , 127.01570376837533 ),
            new daum.maps.LatLng(38.30425714770845 , 127.4254787747164),
            new daum.maps.LatLng(37.45117930109785   ,127.33380380258836),
            new daum.maps.LatLng(37.34930786148302   ,127.44892345222561),
            new daum.maps.LatLng(37.219296589402525  ,127.63274681320236),
            new daum.maps.LatLng(37.03395509097789   ,127.76931362333828),
            new daum.maps.LatLng(36.87672279315434   , 127.82516005717856),
            new daum.maps.LatLng(36.90363828487049   ,127.92885303968413),
            new daum.maps.LatLng(36.811726597795314  ,127.88183950149755),
            new daum.maps.LatLng(36.6456511754003    ,127.87994238776417),
            new daum.maps.LatLng(36.53549445724601   ,127.79865064570724),
            new daum.maps.LatLng(36.4628190168072    ,127.60369674891069),
            new daum.maps.LatLng(36.43614235540403   ,127.3522453353068),
            new daum.maps.LatLng(36.298132086332075  ,126.83861618953173 ),
            new daum.maps.LatLng( 36.41732585358509  ,126.54151423204836 ),
            new daum.maps.LatLng(36.63774810403131   ,126.3226642842725),
            new daum.maps.LatLng(36.7935800544866    ,126.160674501424175),
        ]
    }, {
        name : '강원권',
        path : [
            new daum.maps.LatLng(37.45117930109785   ,127.33380380258836),
            new daum.maps.LatLng(37.34930786148302   ,127.44892345222561),
            new daum.maps.LatLng(37.219296589402525  ,127.63274681320236),
            new daum.maps.LatLng(37.03395509097789   ,127.76931362333828),
            new daum.maps.LatLng(36.87672279315434   , 127.82516005717856),
            new daum.maps.LatLng(36.90363828487049   ,127.92885303968413),
            new daum.maps.LatLng(36.811726597795314  ,127.88183950149755),
            new daum.maps.LatLng(36.6456511754003    ,127.87994238776417),
            new daum.maps.LatLng(36.69161205923874   ,127.9033810513872),
            new daum.maps.LatLng( 36.6420169444531   ,128.2806529708754),
            new daum.maps.LatLng(36.42023355715358   ,128.31125257983064),
            new daum.maps.LatLng(36.343114431858325  ,128.5836937297336),
            new daum.maps.LatLng(36.385289993362186  ,128.8584212562176),
            new daum.maps.LatLng(36.453663032076314  ,129.17983391165393),
            new daum.maps.LatLng(36.338174532727585  ,129.42748142505795),
            new daum.maps.LatLng(36.743120264428775  ,129.47456914879112),
            new daum.maps.LatLng(37.16122963752294   ,129.32678051503686),
            new daum.maps.LatLng(37.45996030496633   , 129.13928793288423),
            new daum.maps.LatLng( 38.00145558288143 ,128.74693071033744),
            new daum.maps.LatLng(37.978315842207635 ,128.75220880606145),
            new daum.maps.LatLng(38.10876955029189  , 128.66192477406682),
            new daum.maps.LatLng(38.32230905175151  , 128.56140972721815),
            new daum.maps.LatLng(38.424959420011284 , 128.4698129412972),
            new daum.maps.LatLng(38.60117789741544 ,128.39112037937755),
            new daum.maps.LatLng(38.40845841428814  , 128.30535529556434),
            new daum.maps.LatLng(38.349210864742524 ,128.23986580337353),
            new daum.maps.LatLng(38.32237985456873 ,128.15744271176567),
            new daum.maps.LatLng(38.30523518330433 ,128.01668908949046),
            new daum.maps.LatLng(38.27824531337076 ,127.93439494434386),
            new daum.maps.LatLng(38.288343040201916 ,127.8174822477843),
            new daum.maps.LatLng(38.30180021719136 ,127.87031206019205),
            new daum.maps.LatLng(38.33028296156853 ,127.75354257493844),
            new daum.maps.LatLng(38.3125280527878 ,127.63627657688355),
            new daum.maps.LatLng(38.30382767957664 ,127.5308386263895),
            new daum.maps.LatLng(38.30425714770845 , 127.4254787747164),
            new daum.maps.LatLng(37.45117930109785   ,127.33380380258836)
        ]
    },
     {
        name : '경상권',
        path : [
            new daum.maps.LatLng(36.69161205923874  ,127.9033810513872),
            new daum.maps.LatLng( 36.6420169444531  ,128.2806529708754),
            new daum.maps.LatLng(36.42023355715358  ,128.31125257983064),
            new daum.maps.LatLng(36.343114431858325 ,128.5836937297336),
            new daum.maps.LatLng(36.385289993362186 ,128.8584212562176 ),
            new daum.maps.LatLng(36.453663032076314 ,129.17983391165393),
            new daum.maps.LatLng(36.338174532727585 ,129.42748142505795),
            new daum.maps.LatLng(36.37574447812903  , 129.39442356789513),
            new daum.maps.LatLng(36.16345338196472  ,129.39932482379078),
            new daum.maps.LatLng(35.98594657377304  ,129.50745467781883),
            new daum.maps.LatLng(35.745990745227445 ,129.51121997166453),
            new daum.maps.LatLng(35.53576483392246  ,129.4143437663807),
            new daum.maps.LatLng(35.361669984286124 ,129.35282772135426),
            new daum.maps.LatLng(35.16233618347337  ,129.1560489801424),
            new daum.maps.LatLng(35.09067974038295  ,129.03066271720638),
            new daum.maps.LatLng(35.056309851327505 ,128.87269348555358),
            new daum.maps.LatLng(35.0251017591968   ,128.45687767996822),
            new daum.maps.LatLng(35.101064116772555 ,128.26731873398774),
            new daum.maps.LatLng(35.22277643508894  ,128.08925653443697),
            new daum.maps.LatLng(35.38975465667173  ,127.99006440779887),
            new daum.maps.LatLng(35.425161644697184 ,128.15962556358275),
            new daum.maps.LatLng(35.53631843937653  ,128.1160606700029),
            new daum.maps.LatLng(35.67524246698147  ,128.06144043102776),
            new daum.maps.LatLng(35.81292638055206  ,128.1425782145008),
            new daum.maps.LatLng(35.914530942131    ,128.13269344903154),
            new daum.maps.LatLng(36.07191175922652  ,128.0781120099413),
            new daum.maps.LatLng(36.26514473488335  ,128.13773574368972),
            new daum.maps.LatLng(36.32972917503571  ,128.1386741276741),
            new daum.maps.LatLng(36.495579352734794 ,128.16395438673348),
            new daum.maps.LatLng(36.662506276498796 ,128.07483865705552),
            new daum.maps.LatLng(36.69161205923874  ,127.9033810513872)
        ]
    },

         {
        name : '충청권',
        path : [
            new daum.maps.LatLng(35.6600359710569   ,127.58628648946062),
            new daum.maps.LatLng(35.67524246698147  ,128.06144043102776),
            new daum.maps.LatLng(35.81292638055206  ,128.1425782145008),
            new daum.maps.LatLng(35.914530942131    ,128.13269344903154),
            new daum.maps.LatLng(36.07191175922652  ,128.0781120099413),
            new daum.maps.LatLng(36.26514473488335  ,128.13773574368972),
            new daum.maps.LatLng(36.32972917503571  ,128.1386741276741),
            new daum.maps.LatLng(36.495579352734794 ,128.16395438673348),
            new daum.maps.LatLng(36.662506276498796 ,128.07483865705552),
            new daum.maps.LatLng(36.69161205923874  ,127.9033810513872),
            new daum.maps.LatLng(36.6456511754003   ,127.87994238776417),
            new daum.maps.LatLng(36.53549445724601  ,127.79865064570724),
            new daum.maps.LatLng(36.4628190168072   ,127.60369674891069),
            new daum.maps.LatLng(36.43614235540403  ,127.3522453353068),
            new daum.maps.LatLng(36.298132086332075 ,126.83861618953173),
            new daum.maps.LatLng( 36.41732585358509 ,126.54151423204836),
            new daum.maps.LatLng(36.63774810403131  ,126.3226642842725),
            new daum.maps.LatLng(36.7935800544866   ,126.160674501424175),
            new daum.maps.LatLng(35.900960995078    ,126.66928251068673),
            new daum.maps.LatLng(35.69772246522593  ,126.60223959600857),
            new daum.maps.LatLng(35.595961418385535 ,126.53494571876033),
            new daum.maps.LatLng(35.74441821920842  ,126.83974131372321),
            new daum.maps.LatLng( 35.82743405639203 ,127.1908814207798),
            new daum.maps.LatLng(35.6600359710569   ,127.58628648946062)
        ]
    },
    {
        name : '전라권',
        path : [
            new daum.maps.LatLng(35.595961418385535 ,126.53494571876033),
            new daum.maps.LatLng(35.74441821920842  ,126.83974131372321),
            new daum.maps.LatLng( 35.82743405639203 ,127.1908814207798),
            new daum.maps.LatLng(35.67524246698147  ,128.06144043102776),
            new daum.maps.LatLng(35.425161644697184 ,128.15962556358275),
            new daum.maps.LatLng(35.53631843937653  ,128.1160606700029),
            new daum.maps.LatLng(35.425161644697184 ,128.15962556358275),
            new daum.maps.LatLng(35.38975465667173  ,127.99006440779887),
            new daum.maps.LatLng(35.22277643508894  ,128.08925653443697),
            new daum.maps.LatLng(35.101064116772555 ,128.26731873398774),
            new daum.maps.LatLng(35.0251017591968   ,128.45687767996822),
            new daum.maps.LatLng(35.056309851327505 ,128.87269348555358),
            new daum.maps.LatLng(34.843025639560636 ,128.22976510568367),
            new daum.maps.LatLng(34.73424184157204  ,128.01572289816477),
            new daum.maps.LatLng(34.68982475372392  ,127.78051066566819),
            new daum.maps.LatLng(34.67243298102145  ,127.59041333177781),
            new daum.maps.LatLng(34.56224313689007  ,127.45573804790898),
            new daum.maps.LatLng(34.53511162235602  ,127.26596492573861),
            new daum.maps.LatLng( 34.52616998533415 ,127.0094106090701),
            new daum.maps.LatLng(34.5166664966618   ,126.7417607070378 ),
            new daum.maps.LatLng(34.487967455397325 ,126.44084997380166),
            new daum.maps.LatLng(34.72693264182366  ,126.2491865540332),
            new daum.maps.LatLng(35.05933320471109  ,126.26860610584689 ),
            new daum.maps.LatLng(35.318493063405164 ,126.40140932673128),
            new daum.maps.LatLng(35.475753618886095 ,126.47922508587055),
            new daum.maps.LatLng(35.706874410769665 ,126.57956352993541),
            new daum.maps.LatLng(35.595961418385535 ,126.53494571876033)
        ]
    },
        {
        name : '제주권',
        path : [
            new daum.maps.LatLng(33.51984860692033 ,126.86600842640588),
            new daum.maps.LatLng(33.446056568121094,126.96523988891315),
            new daum.maps.LatLng(33.36291800895157 ,126.8882546683146),
            new daum.maps.LatLng(33.288928388808465,126.7894093009018),
            new daum.maps.LatLng(33.23307588646282 ,126.60277672779597),
            new daum.maps.LatLng(33.22330544566844 ,126.46001639779068),
            new daum.maps.LatLng(33.195025612113454,126.33939535040051),
            new daum.maps.LatLng(33.21265003989054 ,126.19647855388294),
            new daum.maps.LatLng(33.3326641649282  ,126.19537847292153),
            new daum.maps.LatLng(33.43475360816117 ,126.28252786033312),
            new daum.maps.LatLng(33.47242723060767 ,126.42542763314214),
            new daum.maps.LatLng(33.51904956853668 ,126.53534124347837),
            new daum.maps.LatLng(33.53812270397805 ,126.7447080975786),
            new daum.maps.LatLng(33.51984860692033 ,126.86600842640588)
        ]
    }
];

var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = { 
        center: new daum.maps.LatLng(36.032097801534185, 128.10776920882668), // 지도의 중심좌표
        level: 13, // 지도의 확대 레벨
        draggable: false
    };

var map = new daum.maps.Map(mapContainer, mapOption);
    // customOverlay = new daum.maps.CustomOverlay({}),
    // infowindow = new daum.maps.InfoWindow({removable: true})
var map = new daum.maps.Map(mapContainer, mapOption),
    customOverlay = new daum.maps.CustomOverlay({}),
    infowindow = new daum.maps.InfoWindow({removable: true});


           // 지도 타입 변경 컨트롤을 생성한다
        var mapTypeControl = new daum.maps.MapTypeControl();
        // 지도의 상단 우측에 지도 타입 변경 컨트롤을 추가한다
        map.addControl(mapTypeControl, daum.maps.ControlPosition.TOPRIGHT); 
        // 지도에 확대 축소 컨트롤을 생성한다
        var zoomControl = new daum.maps.ZoomControl();
        // 지도의 우측에 확대 축소 컨트롤을 추가한다
        map.addControl(zoomControl, daum.maps.ControlPosition.RIGHT);
        function searchDetailAddrFromCoords(coords, callback) {
          // 좌표로 법정동 상세 주소 정보를 요청합니다
          geocoder.coord2detailaddr(coords, callback);
      }


function map_change(area_name, x, y, sort) {
        alert(area_name +"으로 이동합니다.");

        map.setDraggable(true);
        map.setLevel(8, {
            animate: {duration: 700},
            anchor: new daum.maps.LatLng(x, y)
        });
        map_marker(sort);
        map_dynamic_content(sort);
}


function map_dynamic_content(reco_sort) {

          $.ajax ({
             type : 'POST',
             url : '/map/map_v_ajax_marker_content_dynamic',
             data : { reco_sort },
             dataType : 'json',
             success : function (reco_sidebar_content) {
              alert(JSON.stringify(reco_sidebar_content)); 
              //JavaScript 값을 JSON(JavaScript Object Notation) 문자열로 변환합니다.

              if (reco_sidebar_content != null) 
                $('.for_ajax').html('');
              else 
                return;

              var result = '';
              var item = reco_sidebar_content;

              for (var i =0; i < item.length; i++) {

                // alert(item[i].reco_name);
              if(item[i].reco_star==1)
                var reco_star = '★☆☆☆☆';
              else if(item[i].reco_star==2)
                 var reco_star = '★★☆☆☆';
              else if(item[i].reco_star==3)
                 var reco_star = '★★★☆☆';
              else if(item[i].reco_star==4)
                 var reco_star = '★★★★☆';
              else if(item[i].reco_star==5)
                 var reco_star = '★★★★★';


            $('.for_ajax').append (
              '<div class = "div_course"  onclick="map_marker_1('+item[i].reco_idx+')">'+
                '<div class = "div_img">'+
                '<a href="/detail/detail/'+item[i].reco_idx+'" > <img id ="img_div_course" src="/static/image/seoul/'+item[i].reco_idx+'.jpg" width="130px" height="130px"></a>'+
                '<p id="p_star">'+ reco_star + '</p> </div>' +

                '<div class ="div_content" style="overflow:scroll;">' +
                  '<table> <tr> <td class = "first_tour">(관광지명)</td> </tr>' +
                    '<tr> <td>'+ item[i].reco_name + '</td> </tr>' +

                    '<tr> <td class = "first_tour">(주소)</td> </tr>' +
                    '<tr> <td>'+ item[i].reco_address + '</td> </tr>' +

                    '<tr> <td class = "first_tour">(내용)</td> </tr>' +
                    '<tr><td>'+ item[i].reco_text + '</td></tr>' +

                  '</table>  </div> </div> </div>'
                  );
              }
        
            },
           error:function(request,status,error){
              alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
             }

           });
}

function map_marker(reco_sort) {
    //ajax로 해당 지역이 1인것을 별점순으로 가져와서 마커를 뿌려준다.
          $.ajax ({
             type : 'POST',
             url : '/map/map_v_ajax_marker',
             data : { reco_sort },
             dataType : 'json',
             success : function (data) {

              for(var i = 0 ; i < data.length ; i ++) {
                displayMarker(data[i].lat , data[i].lng, data[i].reco_name, data[i].reco_address, data[i].reco_idx, data[i].reco_star ); 
              }
             },
           error:function(request,status,error){
              alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
             }
          });
}



function map_marker_1 (reco_idx) {

         //html에서 idx를 map_marker_1함수에 가져와서 그 값을 ajax로 controllers에 보내서 그부분의 idx로 쿼리를 돌리고 값을 다시 가져와서 해당 마커에 출력한다. 

          $.ajax ({
             type : 'POST',
             url : '/map/map_v_ajax_marker_content',
             data : { reco_idx},
             dataType : 'json',
             success : function (data) {
              // alert(JSON.stringify(data));

                      var marker = new daum.maps.Marker({
                                position: new daum.maps.LatLng(data.lat, data.lng)
                       });


                      var marker_reco_star_content;


                      if(data.reco_star==1){ 
                           marker_reco_star_content = '★☆☆☆☆'; 

                      } else if(data.reco_star==2) { 

                           marker_reco_star_content = '★★☆☆☆'; 

                      } else if(data.reco_star==3) { 

                           marker_reco_star_content = '★★★☆☆'; 

                      } else if(data.reco_star==4) { 

                           marker_reco_star_content = '★★★★☆'; 

                     } else if(data.reco_star==5) { 

                          marker_reco_star_content = '★★★★★'; 
                     }


               marker_content = '<div class="wrap">' + 
                                              '    <div class="info">' + 
                                              '        <div class="title">' + data.reco_name + 
                                              '            <div class="close" onclick="closeOverlay()" title="닫기"></div>' + 
                                              '        </div>' + 
                                              '        <div class="body">' + 
                                              '            <div class="img">' +
                                              '                <img src="/static/image/seoul/' +data.reco_idx +'.jpg" width="73" height="70">' +
                                              '           </div>' + 
                                              '            <div class="desc">' + 
                                              '                <div class="ellipsis">'+data.reco_address +'</div>' + 
                                              '                <div><a href="/detail/detail/' +data.reco_idx + '" target="_blank" class="link">상세 페이지</a></div>' +
                                              '                <div class="marker_star">'+marker_reco_star_content +'</div>' +  
                                              '            </div>' + 
                                              '        </div>' + 
                                              '    </div>' +    
                                              '</div>';

                      infowindow.setContent(marker_content);
                      infowindow.open(map, marker);
             },

           error:function(request,status,error){
              alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
             }
          });  
}

// 지도에 마커를 표시하는 함수입니다
function displayMarker(marker_lat, marker_lng, marker_reco_name, marker_reco_address, marker_reco_idx, marker_reco_star ) {

    // 마커를 생성하고 지도에 표시합니다
    var marker = new daum.maps.Marker({
        map: map,
        position: new daum.maps.LatLng(marker_lat, marker_lng)
    });


    var marker_reco_star_content;
                if(marker_reco_star==1){ 
                     marker_reco_star_content = '★☆☆☆☆'; 

                } else if(marker_reco_star==2) { 

                     marker_reco_star_content = '★★☆☆☆'; 

                } else if(marker_reco_star==3) { 

                     marker_reco_star_content = '★★★☆☆'; 

                } else if(marker_reco_star==4) { 

                     marker_reco_star_content = '★★★★☆'; 

               } else if(marker_reco_star==5) { 

                    marker_reco_star_content = '★★★★★'; 
               }


    // 마커에 클릭이벤트를 등록합니다
    daum.maps.event.addListener(marker, 'click', function() {
        // 마커를 클릭하면 장소명이 인포윈도우에 표출됩니다
        marker_content = '<div class="wrap">' + 
                                        '    <div class="info">' + 
                                        '        <div class="title">' + marker_reco_name + 
                                        '            <div class="close" onclick="closeOverlay()" title="닫기"></div>' + 
                                        '        </div>' + 
                                        '        <div class="body">' + 
                                        '            <div class="img">' +
                                        '                <img src="/static/image/seoul/' +marker_reco_idx +'.jpg" width="73" height="70">' +
                                        '           </div>' + 
                                        '            <div class="desc">' + 
                                        '                <div class="ellipsis">'+marker_reco_address +'</div>' + 
                                        '                <div><a href="/detail/detail/' +marker_reco_idx + '" target="_blank" class="link">상세 페이지</a></div>' +
                                        '                <div class="marker_star">'+marker_reco_star_content +'</div>' +  
                                        '            </div>' + 
                                        '        </div>' + 
                                        '    </div>' +    
                                        '</div>';
        infowindow.setContent(marker_content);
        infowindow.open(map, marker);
    });
}



// MakrerImage 객체를 생성하여 반환하는 함수입니다
function createMarkerImage(markerSize, offset, spriteOrigin) {
    var markerImage = new daum.maps.MarkerImage(
        SPRITE_MARKER_URL, // 스프라이트 마커 이미지 URL
        markerSize, // 마커의 크기
        {
            offset: offset, // 마커 이미지에서의 기준 좌표
            spriteOrigin: spriteOrigin, // 스트라이프 이미지 중 사용할 영역의 좌상단 좌표
            spriteSize: spriteImageSize // 스프라이트 이미지의 크기
        }
    );
    return markerImage;
}

        // 지도에 영역데이터를 폴리곤으로 표시합니다 
        for (var i = 0, len = areas.length; i < len; i++) {
            displayArea(areas[i]);
        }

        // 다각형을 색상하고 이벤트를 등록하는 함수입니다
function displayArea(area) {
            // 다각형을 생성합니다 
            var polygon = new daum.maps.Polygon({
                map: map, // 다각형을 표시할 지도 객체
                path: area.path,
                strokeWeight: 2,
                strokeColor: '#004c80',
                strokeOpacity: 0.8,
                fillColor: '#fff',
                fillOpacity: 0.7 
            });

            // 다각형에 mouseover 이벤트를 등록하고 이벤트가 발생하면 폴리곤의 채움색을 변경합니다 
            // 지역명을 표시하는 커스텀오버레이를 지도위에 표시합니다
        daum.maps.event.addListener(polygon, 'mouseover', function(mouseEvent) {
                polygon.setOptions({fillColor: '#f3753a'});
                customOverlay.setContent('<div class="area">' + area.name + '</div>');
                customOverlay.setPosition(mouseEvent.latLng); 
                customOverlay.setMap(map);
            });

            daum.maps.event.addListener(polygon, 'mouseout', function() {
                polygon.setOptions({fillColor: '#fff'});
                customOverlay.setMap(null);
            }); 

// 다각형에 click 이벤트를 등록하고 이벤트가 발생하면 다각형의 이름과 면적을 인포윈도우에 표시합니다 
            // polygon.setMap(null);

daum.maps.event.addListener(polygon, 'click', function(mouseEvent) {
        polygon.setMap(null);
                switch(area.name)
                {
                    case "수도권":
                        map_change("수도권",37.55703003735185 ,127.02311048850409, 1);
                        break;
                    case "충청권":
                        alert("충청권");
                        break;
                     case "전라권":
                        alert("전라권");
                        break;
                    case "강원권":
                        alert("강원권");
                        break;
                    case "경상권":
                        alert("경상권");
                        break;
                    case "제주권":
                        map_change("제주권", 33.31097873150488, 126.56055537131121, 6);
                        break;
                }
});
}

</script>
</body>
</html>

