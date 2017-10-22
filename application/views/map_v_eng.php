<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>SKOTT - Map</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/static/Semantic/semantic.min.css">
        <script
          src="https://code.jquery.com/jquery-3.1.1.min.js"
          integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
          crossorigin="anonymous">
        </script>
        <script src="/static/Semantic/semantic.min.js"></script>
        </head>
    <style type="text/css">
    @media(min-width: 1025px) {
        .button_menu {
           position:absolute;right:10%;z-index: 10;font-size:20px;border-radius: 10px;}
        .map_wrap, .map_wrap * {margin:0;padding:0;font-family:'Malgun Gothic',dotum,'돋움',sans-serif;font-size:15px;}
        .map_wrap a, .map_wrap a:hover, .map_wrap a:active{color:#000;text-decoration: none;}
        .map_wrap {width:100%;height:100%;}
        #menu_wrap {position:absolute;top:0px;left:70%;bottom:0;width:23%;height:70%;margin:200px 0 30px 10px;padding:5px;overflow-y:auto;background:#eaf1f7;z-index: 1;font-size:15px;border-radius: 10px;border:2px solid black;}
        #menu_wrap hr {display: block; height: 1px;border: 0; border-top: 2px solid #5F5F5F;margin:3px 0;}
        #menu_wrap .option{text-align: center;}
        #menu_wrap .option p {margin:10px 0;}  
        #menu_wrap .option button {margin-left:5px;}
        #placesList li {list-style: none;}
        #placesList .item {position:relative;border-bottom:1px solid #888;cursor: pointer;min-height: 65px;}
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

    #map {
      width:100%;height:92%;
    }
     .div_content {
      display: none;
     }
    }
    #katalk {
      top: 80%;
      left: 50px;
    }
    .up_scroll {
      display:none;
    }
    </style>
<style type="text/css">
/*모바일 버전*/
 @media(max-width: 1024px) {
    #map {
      width:100%;height:80%;
    }

    .map_wrap {top:9%;position:relative;width:100%;height:100%;}

     .div_content_click img {height: 420px; }
     #menu_wrap {
      margin-top:-80px;
      overflow:scroll;
      overflow-y:auto;
      height: 70%;
     }

     .ui.like.button {
      width : 100%;
      height: 50px;
      /*font-size : 35px;*/
     }

     .ui.detail.button {
      width : 100%;
      height: 50px;
            /*font-size : 35px;*/
     }
     
     .ui.small.buttons {
      display :none;
     }

    #katalk{top:60%;left:70%;}
    .up_scroll{display:block;}
   }
   .div_course {
    width:90%;
   }

</style>


<style>
/* 공통 */
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


  .example .popup {
  color: #FF0000;
  }
  #katalk {
    z-index : 15000;
    width : 90px;
    height : 90px;
    border-radius: 50px;
    position: absolute;
    background: url('/static/image/katalk.png');
    background-size: 100% 100%;
    box-shadow: 0px 10px 15px  grey;
  }
  #katalk:hover {
    opacity: 0.4;
  }
  #md {
    display:none;
  }

  .div_content {
    width : 100%;
  }

  .like_content {
      background-color: yellow;
      float : left;
      width : 50%;
      height : 100%;
  }

  .detail_content {
    background-color: black;
        float : left;
        width : 50%;
        height : 100%;
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
        width: 100%;
       }

    .ui.accordion {
               line-height: 60px;
               width : 100%;
            }
    .reco_course {
      color : black;
      text-align: center;
      background-color: #e2e2e2;
    }
    .up_scroll {
      text-align: center;
      background-color: #e2e2e2;
      border-top:solid 1px black;
      border-bottom:solid 1px black;
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
        width: 95%;
      }

      .div_img {
        display :flex;
        flex-direction:column;

      }

      .div_content table{
        font-size : 10pt;
      } 

      .div_content_click {
        font-size : 13pt;
        text-align: center;
        padding : 5px;
      }

      .img_click {
        width : 100%;
        height : 210px;
      }

      #p_star {
        font-size: 10pt;
        text-align: center;
      }

    .first_tour {
      font-size:15px;
    }

</style>

</style>

<body style="overflow:hidden" >
<div class="ui modal tour">
  <div class="header">
    Recommand Spot
  </div>
  <div class="image content">
    <div class="description">
      <div class="ui header"><br> Unknown </div>
      <br><br>
      <p> <b>Go Click </b> Change Map </p>
    </div>
  </div>
  <div class="actions">
    <div class="ui black deny button">
      Cancel
    </div>
    <div class="ui positive right labeled icon button">
      Go
      <i class="checkmark icon"></i>
    </div>
  </div>
</div>

<div id="md">
<div class="ui modal katalk">
  <div class="header">
    Open Kakao Chatting Room
  </div>
  <div class="image content">
    <div class="description">
      <p> <b> 한국 url : </b><a href="https://open.kakao.com/o/g0uvutw" target="_blank"> https://open.kakao.com/o/g0uvutw </a></p>
      <p> <b> English url : </b><a href="https://open.kakao.com/o/gp6Zttw" target="_blank"> https://open.kakao.com/o/gp6Zttw </a></p>
      <br><br>
    </div>
  </div>
  <div class="actions">
    <div class="ui black deny button">
      Go back
    </div>
  </div>
</div>
</div>

<div class="map_wrap">
    <div id="map"></div>
        <div id="katalk">
        <i class="katalk" data-content="오픈 카카오톡방으로 여행 팁을 공유해보세요 !"></i>
    </div>
</div>
    <div id="menu_wrap" class="bg_white">
          <div class = "up_scroll"> ∧∧∧ </div>
  <div class = "reco_course" id = "reco_course"><b>Recommandation</b><hr>
    <div id="course" class ="for_ajax">
      <div class = "div_course">
        <div class = "div_img"></div>
        <div class ="div_content"></div>
      </div>
      <div class = "div_content_click"><a href="/detail_eng/detail/8"><img class = "img_click" src="/static/image/map/map_v_1.jpg";></a> </div>
      <div class = "div_content_click"><a href="/detail_eng/detail/56"><img class = "img_click" src="/static/image/map/map_v_2.jpg";></a> </div>
      <div class = "div_content_click"><a href="/detail_eng/detail/57"><img class = "img_click" src="/static/image/map/map_v_3.jpg";></a> </div>
    </div>
  </div>
        </div>

    <script type="text/javascript">
    $('.katalk')
      .popup({
        inline: true
      })
    ;
    $('#katalk').click( function() {
      $("#md").css("display","");
               $('.ui.katalk')
                .modal('show'); 

              $('.ui.black.deny.button').click(function() {
              });
    });
    </script>
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
        center: new daum.maps.LatLng(36.497482, 127.937508), // 지도의 중심좌표
        level: 13, // 지도의 확대 레벨
        draggable: false
    };

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

geocoder = new daum.maps.services.Geocoder();
function searchDetailAddrFromCoords(coords, callback) {
          // 좌표로 법정동 상세 주소 정보를 요청합니다
          geocoder.coord2detailaddr(coords, callback);
      }


function map_change(x, y, sort) {

        map.setDraggable(true);
        map.setLevel(9, {
            animate: {duration: 50},
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
                         item[i].title_eng + "  " + reco_star +
                       '</div>' +
              '<div class = "div_course">' + 
                '<div class = "div_img">' +
                 '<img id ="img_div_course" src="/static/image/seoul/'+item[i].reco_idx+'.jpg" onclick="map_marker_1('+item[i].reco_idx+')" width="365px" height="180px"></a>' +
                        // '<div class="ui small buttons">' +
                  '<button class="ui like button" onclick="like_content_click('+item[i].reco_idx+')"> ♥'+
                    '<div class = "like_content'+item[i].reco_idx+'">' +item[i].reco_like + '</div>' +
                  '</button>' +
                  '<div class = "or"></div>' +
                  '<button class="ui detail button" onclick = "detail_location()"><a href="/detail_eng/detail/'+item[i].reco_idx+'" >Details</button>' +
                '</div>' +
              '</div>'
            //     '<div class ="div_content">' +
            //          '<div class = "like_content"> <button class="ui like button" onclick="like_content_click('+item[i].reco_idx+')"> ♥ ' +
            //           '<div class = "like_content'+item[i].reco_idx+'">' +item[i].reco_like+'</button> </div> '+
            //          '<div class = "detail_content">' +
            //          '<div class = "or"></div>' +
            //               '<button class="ui detail button" onclick = "detail_location()"><a href="/detail/detail/'+item[i].reco_idx+'" >상세보기</button>' +
            //                '</div>' +
            //            '</div>' +
            //       '</div> </div>'
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
             url : '/map_eng/map_v_ajax_marker',
             data : { reco_sort },
             dataType : 'json',
             success : function (data) {
              for(var i = 0 ; i < data.length ; i ++) {
                displayMarker(data[i].lat , data[i].lng, data[i].title_eng, data[i].reco_address, data[i].reco_idx, data[i].reco_star ); 
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

                      var moveLatLon = new daum.maps.LatLng(data.lat, data.lng);

                      // 지도 중심을 부드럽게 이동시킵니다
                      // 만약 이동할 거리가 지도 화면보다 크면 부드러운 효과 없이 이동합니다
                      map.panTo(moveLatLon);

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
                                              '        <div class="title">' + data.title_eng + 
                                              '            <div class="close" onclick="closeOverlay()" title="닫기"></div>' + 
                                              '        </div>' + 
                                              '        <div class="body">' + 
                                              '            <div class="img">' +
                                              '                <img id="marker_img"  src="/static/image/seoul/' +data.reco_idx +'.jpg" width="73" height="70">' +
                                              '           </div>' + 
                                              '            <div class="desc">' + 
                                              '                <div class="ellipsis">'+data.reco_address +'</div>' + 
                                              '                <div><a href="/detail_eng/detail/' +data.reco_idx + '" class="link">Detail Page</a></div>' +
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
    var imageSrc = "/static/Image/marker_image/markers.png";

    var imageSize = new daum.maps.Size(40,50); 

    // 마커 이미지를 생성합니다    
    var markerImage = new daum.maps.MarkerImage(imageSrc, imageSize); 

    // 마커를 생성하고 지도에 표시합니다
    var marker = new daum.maps.Marker({
        map: map,
        position: new daum.maps.LatLng(marker_lat, marker_lng),
        image : markerImage
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
                                        '                <img id = "marker_img" src="/static/image/seoul/' +marker_reco_idx +'.jpg" width="73" height="70">' +
                                        '           </div>' + 
                                        '            <div class="desc">' + 
                                        '                <div class="ellipsis">'+marker_reco_address +'</div>' + 
                                        '                <div><a href="/detail_eng/detail/' +marker_reco_idx + '" target="_blank" class="link">Detail Page</a></div>' +
                                        '                <div class="marker_star">'+marker_reco_star_content +'</div>' +  
                                        '            </div>' + 
                                        '        </div>' + 
                                        '    </div>' +    
                                        '</div>';
        infowindow.setContent(marker_content);
        infowindow.open(map, marker);


       // map.setLevel(7, {
       //                  animate: {duration: 1000},
       //                  anchor: new daum.maps.LatLng(marker_lat, marker_lng)
       //              });



    });

}


</script>

<script type="text/javascript">

    $('.ui.search').click(function() {
         var search_text = $(".prompt").val();
         // alert(search_text); searach_text에 검색한 이름이 띄어짐

        $.ajax ({
             type : 'POST',

             url : '/map_eng/search_marker_content',
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
                           marker_reco_star_content = 'Star : ★☆☆☆☆'; 

                      } else if(data.reco_star==2) { 

                           marker_reco_star_content = 'Star : ★★☆☆☆'; 

                      } else if(data.reco_star==3) { 

                           marker_reco_star_content = 'Star : ★★★☆☆'; 

                      } else if(data.reco_star==4) { 

                           marker_reco_star_content = 'Star : ★★★★☆'; 

                     } else if(data.reco_star==5) { 

                          marker_reco_star_content = 'Star : ★★★★★'; 
                     }


               marker_content = '<div class="wrap">' + 
                                              '    <div class="info">' + 
                                              '        <div class="title">' + data.title_eng + 
                                              '            <div class="close" onclick="closeOverlay()" title="닫기"></div>' + 
                                              '        </div>' + 
                                              '        <div class="body">' + 
                                              '            <div class="img">' +
                                              '                <img id="marker_img"  src="/static/image/seoul/' +data.reco_idx +'.jpg" width="73" height="70">' +
                                              '           </div>' + 
                                              '            <div class="desc">' + 
                                              '                <div class="ellipsis">'+data.reco_address +'</div>' + 
                                              '                <div><a href="/detail_eng/detail/' +data.reco_idx + '" target="_blank" class="link">Detail Page</a></div>' +
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

var imageSrc1 = "/static/image/marker_image/marker_1.png"; 
var imageSrc2 = "/static/image/marker_image/marker_2.png"; 
var imageSrc3 = "/static/image/marker_image/marker_3.png"; 
var imageSrc4 = "/static/image/marker_image/marker_4.png"; 
var imageSrc5 = "/static/image/marker_image/marker_5.png"; 
var imageSrc6 = "/static/image/marker_image/marker_6.png"; 



var imageSize = new daum.maps.Size(60, 60); 

// 마커를 표시할 위치와 title 객체 배열입니다 
var positions = [
    {
        title: '경기권', 
        latlng: new daum.maps.LatLng(37.55703003735185 ,127.02311048850409),
        markerImage : new daum.maps.MarkerImage(imageSrc1, imageSize)
    },
    {
        title: '제주권', 
        latlng: new daum.maps.LatLng(33.12920323452201 ,126.5438352744674),
        markerImage : new daum.maps.MarkerImage(imageSrc2, imageSize)
    },
    {
        title: '강원권', 
        latlng: new daum.maps.LatLng(37.6130868206661 , 128.5442381745224),
        markerImage : new daum.maps.MarkerImage(imageSrc3, imageSize)
    },
    {
        title: '경상권',
        latlng: new daum.maps.LatLng(36.28157430275591 , 128.75691078469748),
        markerImage : new daum.maps.MarkerImage(imageSrc4, imageSize)
    },
    {
        title: '충청권',
        latlng: new daum.maps.LatLng(36.22053767676641 , 126.83090136233223),
        markerImage : new daum.maps.MarkerImage(imageSrc5, imageSize)
    },
    {
        title: '전라권',
        latlng: new daum.maps.LatLng(35.23696846708566 , 127.4386510851341),
        markerImage : new daum.maps.MarkerImage(imageSrc6, imageSize)
    }
];

for (var i = 0; i < positions.length; i ++) {
    // 마커를 생성합니다
    var marker1 = new daum.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시됩니다
        image :  positions[i].markerImage // 마커 이미지 
    });

if(positions[i].title =="경기권") {
      daum.maps.event.addListener(marker1, 'click', function() {
                  $('.ui.header').html('Gyeonggi-do Place');
                   $('.ui.tour')
                    .modal('show');

                  $('.ui.positive.button').click(function() {
                    map_change(37.65703003735185 ,126.92311048850409, 1);
                  });
      });
    }

    if(positions[i].title =="제주권") {
      daum.maps.event.addListener(marker1, 'click', function() {
                  $('.ui.header').html('Jeju Island Place');
                   $('.ui.tour')
                    .modal('show'); 

                  $('.ui.positive.button').click(function() {
                     map_change(33.440377, 126.496006, 2);
                  });
      });
    }

    if(positions[i].title =="강원권") {
      daum.maps.event.addListener(marker1, 'click', function() {
                  $('.ui.header').html('Gangwon-do Place');
                   $('.ui.tour')
                    .modal('show'); 

                  $('.ui.positive.button').click(function() {
                     map_change(37.6130868206661 , 128.5442381745224, 1);
                  });
      });
    }

    if(positions[i].title =="경상권") {
      daum.maps.event.addListener(marker1, 'click', function() {
                  $('.ui.header').html('Kyungsang-do Place');
                   $('.ui.tour')
                    .modal('show'); 

                  $('.ui.positive.button').click(function() {
                     map_change(36.28157430275591 , 128.75691078469748, 1);
                  });
      });
    }

    if(positions[i].title =="충청권") {
      daum.maps.event.addListener(marker1, 'click', function() {
                  $('.ui.header').html('Chungcheong-do Place');
                   $('.ui.tour')
                    .modal('show'); 

                  $('.ui.positive.button').click(function() {
                     map_change(36.257669, 126.894619, 1);
                  });
      });
    }

    if(positions[i].title =="전라권") {
      daum.maps.event.addListener(marker1, 'click', function() {
                  $('.ui.header').html('Joella-do Place');
                   $('.ui.tour')
                    .modal('show'); 

                  $('.ui.positive.button').click(function() {
                     map_change(35.150578, 126.845514, 1);
                  });
      });
    }
}

$('.Box0').click(function() {
    $('.ui.sidebar')
      .sidebar('toggle')
    ;
});

function like_content_click(reco_idx) {
          $.ajax ({
             type : 'POST',
             url : '/map/like_content_click',
             dataType : 'json',
             data : {reco_idx},
              success : function (data) {
                // // alert(data.reco_like);

                var like = ".like_content" +data.reco_idx;

                $(like).html(data.reco_like);
                // location.reload();
              },
              error:function(request,status,error){
              alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
             }
          }); 
}


  
   var recommand_name = <?php echo $recommand_name;?>

  $('.ui.search')
    .search({
      source: recommand_name
    })
  ;

</script>

<script type="text/javascript">
function prompt(window, pref, message, callback) {
    let branch = Components.classes["@mozilla.org/preferences-service;1"]
                           .getService(Components.interfaces.nsIPrefBranch);

    if (branch.getPrefType(pref) === branch.PREF_STRING) {
        switch (branch.getCharPref(pref)) {
        case "always":
            return callback(true);
        case "never":
            return callback(false);
        }
    }

    let done = false;

    function remember(value, result) {
        return function() {
            done = true;
            branch.setCharPref(pref, value);
            callback(result);
        }
    }

    let self = window.PopupNotifications.show(
        window.gBrowser.selectedBrowser,
        "geolocation",
        message,
        "geo-notification-icon",
        {
            label: "Share Location",
            accessKey: "S",
            callback: function(notification) {
                done = true;
                callback(true);
            }
        }, [
            {
                label: "Always Share",
                accessKey: "A",
                callback: remember("always", true)
            },
            {
                label: "Never Share",
                accessKey: "N",
                callback: remember("never", false)
            }
        ], {
            eventCallback: function(event) {
                if (event === "dismissed") {
                    if (!done) callback(false);
                    done = true;
                    window.PopupNotifications.remove(self);
                }
            },
            persistWhileVisible: true
        });
}

prompt(window,
       "extensions.foo-addon.allowGeolocation",
       "Foo Add-on wants to know your location.",
       function callback(allowed) { alert(allowed); });
</script>
<script type="text/javascript">

$(".map_location").click(function(){
            if (navigator.geolocation) {
                // GeoLocation을 이용해서 접속 위치를 얻어옵니다
                navigator.geolocation.getCurrentPosition(function(position) {
                    var lat = position.coords.latitude, // 위도
                        lon = position.coords.longitude; // 경도
                    
                    var locPosition = new daum.maps.LatLng(lat, lon), // 마커가 표시될 위치를 geolocation으로 얻어온 좌표로 생성합니다
                        message = '<div style="padding:5px;">My Place</div>'; // 인포윈도우에 표시될 내용입니다

                    map.setLevel(7, {
                        animate: {duration: 1000},
                        anchor: new daum.maps.LatLng(lat, lon)
                    });

                    // 마커와 인포윈도우를 표시합니다
                    displayMarker(locPosition, message);                       
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
                
                var locPosition = new daum.maps.LatLng(33.450701, 126.570667),    
                    message = 'geolocation을 사용할수 없어요..'
                    
                displayMarker(locPosition, message);
            }

            // 지도에 마커와 인포윈도우를 표시하는 함수입니다
            function displayMarker(locPosition, message) {

                // 마커를 생성합니다
                var marker = new daum.maps.Marker({  
                    map: map, 
                    position: locPosition
                }); 
                
                var iwContent = message, // 인포윈도우에 표시할 내용
                    iwRemoveable = true;

                // 인포윈도우를 생성합니다
                var infowindow = new daum.maps.InfoWindow({
                    content : iwContent,
                    removable : iwRemoveable
                });
                
                // 인포윈도우를 마커위에 표시합니다 
                infowindow.open(map, marker);
                
                // 지도 중심좌표를 접속위치로 변경합니다
                map.setCenter(locPosition);      
            }    
});
</script>
</body>
</html>