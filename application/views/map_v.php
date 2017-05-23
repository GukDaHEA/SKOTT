<!DOCTYPE html>
<html>
<head>



    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>지도 화면</title>
<!--         <script src="/static/js/jquery-3.1.1.js"></script> -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

        <link rel="stylesheet" type="text/css" href="/static_TEST/Semantic/semantic.min.css">
        <script
          src="https://code.jquery.com/jquery-3.1.1.min.js"
          integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
          crossorigin="anonymous">
        </script>
        <script src="/static_TEST/Semantic/semantic.min.js"></script>

</head>
    <style type="text/css">
    @media(min-width: 1025px) {
        .button_menu {
           position:absolute;right:10%;z-index: 10;font-size:20px;border-radius: 10px;}
        .map_wrap, .map_wrap * {margin:0;padding:0;font-family:'Malgun Gothic',dotum,'돋움',sans-serif;font-size:12px;}
        .map_wrap a, .map_wrap a:hover, .map_wrap a:active{color:#000;text-decoration: none;}
        .map_wrap {width:100%;height:100%;}
        #menu_wrap {position:absolute;top:30px;left:65%;bottom:0;width:28%;height:80%;margin:100px 0 30px 10px;padding:5px;overflow-y:auto;background:rgba(255, 255, 255, 0.7);z-index: 1;font-size:12px;border-radius: 10px;}
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
        #pagination {margin:10px auto;text-align: center;}
        #pagination a {display:inline-block;margin-right:10px;}
        #pagination .on {font-weight: bold; cursor: default;color:#777;}
    }
    }


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

 @media(max-width: 1025px) {
            #course {
                line-height: 300px;
            }

           #img_div_course {
                    width: 280px;
                    height: 280px;
            }

            .ui.accordion {
               line-height: 250px;
               width : 100%;
            }

            #p_star {
                font-size: 25pt;
                text-align: center;
              }


   }

   .ui.modal {
    height: 300px;
   }

   .active.title {
    font-weight: bold;
   }
   #img_div_course {
    position: relative;
    margin: 5px;
    opacity: 0.8;
   }

    .ui.small.buttons {
        width: 100%
       }

    .ui.accordion {
               line-height: 60px;
               width : 100%;
            }
    .reco_course {
      color : black;
      font-size:15px;
      text-align: center;
      border-bottom:solid black;
    }

      .div_head {
         display :flex;
        flex-direction:column;
      }

      .div_course {
        border:1px solid black;
        display :flex;
        flex-direction:row;
        margin : 10px;
      }

     .div_course:hover {
/*            background-color: yellow;*/
      }

      .div_img {
        display :flex;
        flex-direction:column;

      }

      .div_content {
        width:1000px;

      }

      .div_content table{
        font-size : 10pt;
      } 

      #p_star {
        font-size: 10pt;
        text-align: center;
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

  <div class="ui sidebar inverted vertical menu">
  <a class="item">
    <i class="home icon"></i>
    Home
  </a>
  <a class="item">
    <i class="block layout icon"></i>
    Topics
  </a>
  <a class="item">
    <i class="smile icon"></i>
    Friends
  </a>
</div>


<div class="ui modal">
  <div class="header">
    관광지
  </div>
  <div class="image content">
    <div class="description">
      <div class="ui header">We've auto-chosen a profile image for you.</div>
      <p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
      <p>Is it okay to use this photo?</p>
    </div>
  </div>
  <div class="actions">
    <div class="ui black deny button">
      Cancel
    </div>
    <div class="ui positive right labeled icon button">
      MOVE
      <i class="checkmark icon"></i>
    </div>
  </div>
</div>

<div class="map_wrap">
    <div id="map" style="width:100%;height:89%;"></div>
<<<<<<< HEAD
        <div class="button_menu">
        <button type="button" onclick="location.href='map_v'" >뒤로 가기</button>
        </div>
=======
>>>>>>> e475d8e19d453f4acc0295d716c043872b9e1819
    <div id="menu_wrap" class="bg_white">
        <hr>
        <div class = "reco_course"> 추천관광지 </div>
        <div id="course" class ="for_ajax"> 
            <div class = "div_course">
              <div class = "div_img"></div>
              <div class ="div_content""></div>
<!--                style="overflow:scroll; -->
            </div>

<script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=6f9cc1cd3f08a51269ed1888616c3701&libraries=clusterer"></script>

<script>
// 지도에 폴리곤으로 표시할 영역데이터 배열입니다 

function zoomIn() {        
    // 현재 지도의 레벨을 얻어옵니다
    var level = map.getLevel();
    
    // 지도를 1레벨 내립니다 (지도가 확대됩니다)
    map.setLevel(level - 1);
    
    // 지도 레벨을 표시합니다
    displayLevel();
}    


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


function map_change(x, y, sort) {

        map.setDraggable(true);
        map.setLevel(7, {
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
              // alert(JSON.stringify(reco_sidebar_content)); 
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
                        '<div class="active title">' +
                         '<i class="dropdown icon">' + '</i>' +item[i].title + "  " + reco_star +
                       '</div>' +
                // '<p id="p_star">'+ reco_star + '</p>' +
              '<div class = "div_course"  onclick="map_marker_1('+item[i].reco_idx+')">'+

                '<div class = "div_img">'+
<<<<<<< HEAD
                '<a href="/detail/detail/'+item[i].reco_idx+'" > <img id ="img_div_course" src="/static/image/seoul/'+item[i].reco_idx+'.jpg" width="130px" height="130px"></a>'+
                '<p id="p_star">'+ reco_star + '</p> </div>' +
=======
                '<a href="http://localhost/detail/detail/'+item[i].reco_idx+'" > <img id ="img_div_course" src="/static_TEST/image/seoul/'+item[i].reco_idx+'.jpg" width="365px" height="180px"></a>'+
>>>>>>> e475d8e19d453f4acc0295d716c043872b9e1819

                        '<div class="ui small buttons">' +
                          '<button class="ui button">♥</button>' +
                          '<div class="or"></div>' +
                          '<button class="ui button">상세보기</button>' +
                           '</div>' +
                        '</div>' +

                '<div class ="div_content">' +
                     '<div>' +

                       // '<div class="active content">' +
                       //   '<p>' + item[i].reco_text + '</p>' +
                       // '</div>' +


                       '</div>' +
                  '</div> </div> </div>'
                  );

                // $('.ui.accordion').accordion('onClose');
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
                displayMarker(data[i].lat , data[i].lng, data[i].title, data[i].reco_address, data[i].reco_idx, data[i].reco_star ); 
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
             data : {reco_idx},
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
                                              '        <div class="title">' + data.title + 
                                              '            <div class="close" onclick="closeOverlay()" title="닫기"></div>' + 
                                              '        </div>' + 
                                              '        <div class="body">' + 
                                              '            <div class="img">' +
                                              '                <img id="marker_img"  src="/static_TEST/image/seoul/' +data.reco_idx +'.jpg" width="73" height="70">' +
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
                                        '                <img id = "marker_img" src="/static_TEST/image/seoul/' +marker_reco_idx +'.jpg" width="73" height="70">' +
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

</script>

<script type="text/javascript">

    $('.ui.button').click(function() {
         var search_text = $(".prompt").val();
         // alert(search_text); searach_text에 검색한 이름이 띄어짐

        $.ajax ({
             type : 'POST',
             url : '/map/search_marker_content',
             data : {search_text},
             dataType : 'json',
             success : function (data) {
              // alert(JSON.stringify(data));

                  // 마커를 생성하고 지도에 표시합니다
                      var marker = new daum.maps.Marker({
                                position: new daum.maps.LatLng(data.lat, data.lng)
                       });


                      var marker_reco_star_content;

                      if(data.reco_star==1){ 
                           marker_reco_star_content = '별점 : ★☆☆☆☆'; 

                      } else if(data.reco_star==2) { 

                           marker_reco_star_content = '별점 : ★★☆☆☆'; 

                      } else if(data.reco_star==3) { 

                           marker_reco_star_content = '별점 : ★★★☆☆'; 

                      } else if(data.reco_star==4) { 

                           marker_reco_star_content = '별점 : ★★★★☆'; 

                     } else if(data.reco_star==5) { 

                          marker_reco_star_content = '별점 : ★★★★★'; 
                     }


               marker_content = '<div class="wrap">' + 
                                              '    <div class="info">' + 
                                              '        <div class="title">' + data.title + 
                                              '            <div class="close" onclick="closeOverlay()" title="닫기"></div>' + 
                                              '        </div>' + 
                                              '        <div class="body">' + 
                                              '            <div class="img">' +
                                              '                <img id="marker_img"  src="/static_TEST/image/seoul/' +data.reco_idx +'.jpg" width="73" height="70">' +
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

});


// 마커를 표시할 위치와 title 객체 배열입니다 
var positions = [
    {
        title: '경기권', 
        latlng: new daum.maps.LatLng(37.55703003735185 ,127.02311048850409)
    },
    {
        title: '제주권', 
        latlng: new daum.maps.LatLng(33.31097873150488, 126.56055537131121)
    },
    {
        title: '강원권', 
        latlng: new daum.maps.LatLng(37.6130868206661 , 128.5442381745224)
    },
    {
        title: '경상권',
        latlng: new daum.maps.LatLng(36.28157430275591 , 128.75691078469748)
    },
    {
        title: '충청권',
        latlng: new daum.maps.LatLng(36.22053767676641 , 126.83090136233223)
    },
    {
        title: '전라권',
        latlng: new daum.maps.LatLng(35.24232751217275 , 126.88920902196487)
    }
];

// 마커 이미지의 이미지 주소입니다
var imageSrc = "http://t1.daumcdn.net/localimg/localimages/07/mapapidoc/marker_red.png"; 
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기 입니다ㅈ
    var imageSize = new daum.maps.Size(55, 55); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new daum.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker1 = new daum.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시됩니다
        image : markerImage // 마커 이미지 
    });

if(positions[i].title =="경기권") {
  daum.maps.event.addListener(marker1, 'click', function() {
              $('.ui.header').html('경기권 입니다.');
               $('.ui.modal')
                .modal('show'); 

              $('.ui.positive.button').click(function() {
                 // alert("1");
                 map_change(37.55703003735185 ,127.02311048850409, 1);
              });
  });
}

if(positions[i].title =="제주권") {
  daum.maps.event.addListener(marker1, 'click', function() {
              $('.ui.header').html('제주권 입니다.');
               $('.ui.modal')
                .modal('show'); 
  });
}

if(positions[i].title =="강원권") {
  daum.maps.event.addListener(marker1, 'click', function() {
              $('.ui.header').html('강원권 입니다.');
               $('.ui.modal')
                .modal('show'); 
  });
}

if(positions[i].title =="경상권") {
  daum.maps.event.addListener(marker1, 'click', function() {
              $('.ui.header').html('경상권 입니다.');
               $('.ui.modal')
                .modal('show'); 
  });
}

if(positions[i].title =="충청권") {
  daum.maps.event.addListener(marker1, 'click', function() {
              $('.ui.header').html('충청권 입니다.');
               $('.ui.modal')
                .modal('show'); 
  });
}

if(positions[i].title =="전라권") {
  daum.maps.event.addListener(marker1, 'click', function() {
              $('.ui.header').html('전라권 입니다.');
               $('.ui.modal')
                .modal('show'); 
  });
}


}

$('.Box0').click(function() {
    $('.ui.sidebar')
      .sidebar('toggle')
    ;
});


</script>



</body>
</html>

