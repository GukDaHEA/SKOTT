<html>
<head>
      <meta charset="utf-8">
      <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <title>상세 페이지</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style>
.Header:after{clear:both}
.Header:before,.Header:after{content:" ";display:table}
.Header:after{clear:both}
.Header-logo{float:left;margin-left:0px}
.Header-logo>a{display:inline-block;
      width:150px;
      height:70px;
      min-height:28px;
      background-image:url(/static/image/logo2.gif);
      background-size: 100% 100%;
      background-repeat:no-repeat;
      margin-left:0px
}

 body {
            font-family:'Times New Roman', Times, serif;
            font-family: "돋움",dotum,sans-serif;
            font-size: 12px;
            margin:0;
        }

        a {text-decoration:none}

        header {
            width:100%;
            margin:0;
            border:1px solid #cccccc;
        }  

        #header_nav li{
            font-size:0.9em;
            color:#ffffff;
            margin-right:20px;
            list-style:none;
            float:left;
        }
        #header_info div {
            margin-top:10px;
            float:left;
        }

        #header_info .search {
            float: left;
            padding-left: 3%;
            padding-top: 1%;
        }

        #header_info .search_input {
            width:330px; height:40px;
            font-size:16px;
            border:1px solid #f3753a;
            margin-top:6px;
            padding:5px;
            border-right:none;
            border-radius:5px 0 0 5px;
            color:#e2e2e2;
        }
        .search_input:active {
          border:1px solid #f3753a;
        }
        
        #header_info .btn_search {
            width:124px; height:40px;
            /*background:url(./search_btn.png) no-repeat 0 0;*/
            border:0;  
            margin:6px 0 0 0;          
            border-left:none;
            background-color:#f3753a;
            border-radius:0 5px 5px 0;
            float:right;
            color:antiquewhite;
            font-size:17px;
            font-weight:bold;
            
        }

        #header_info .search_input:focus{
            color:black;
        }


        #header_info .btn_search:hover{
            background-color:#d16126;            
        }

        #header_info .txt_sw {
            color:#ffffff;
            font-size:1.2em;
        }
/*------------------------------------------------------------------*/
        #header_info .service {
            float:right;
            font-size: 14px;
            margin-right:30px;
            margin-top:;
        }

        #header_info .Gnb-item {
             color: #585858;
             margin:3px;
             line-height: 60px;
             display: inline-block;

        }

        #header_info .Gnb-item:hover {
            color:#f3753a;
            text-decoration: none;
        }
               

        #header_info .Gnb-item.active, .Gnb-item:active {
            font-weight: 700;
            border-bottom :2px solid #f3753a;
            margin-bottom : 3px;

        }
              
        #header_info .service ul li{
            float:left;
            list-style:none;
            margin-right:15px;

        }</style>
</head>
<body onload="initTmap()">

<div class="Header">
  <h1 class="Header-logo" alt="SKOTT" title="SKOTT"><a href="/index.php/topic/mains"></a></h1>
    <div id="header_info">        
        <div class="search">
            <input type="text" id="form_control" class="search_input" placeholder="원하시는 지역명/관광지명을 입력하세요.">
            <button id="form_control" class="btn_search">찾아보기</button>
        </div>
        <div class="service">
            <ul>
                <li><a class="Gnb-item room-search active" href="/index.php/topic/csstest">지도보기</a></li>
                <li><a class="Gnb-item room-favorite ">추천코스</a></li>
                <li><a class="Gnb-item add-room" id="map_location" style="cursor: pointer">내 위치</a></li>
                <li><a class="Gnb-item login small" style="cursor: pointer">로그인</a></li>
            </ul>
        </div>
    </div>



<script type="text/javascript">

$("#map_location").click(function(){
                  // alert("내 위치를 클릭하셨습니다.");


            if (navigator.geolocation) {
                
                // GeoLocation을 이용해서 접속 위치를 얻어옵니다
                navigator.geolocation.getCurrentPosition(function(position) {
                    
                    var lat = position.coords.latitude, // 위도
                        lon = position.coords.longitude; // 경도
                    
                    var locPosition = new daum.maps.LatLng(lat, lon), // 마커가 표시될 위치를 geolocation으로 얻어온 좌표로 생성합니다
                        message = '<div style="padding:5px;">여기에 계신가요?!</div>'; // 인포윈도우에 표시될 내용입니다
                    

                    map.setLevel(8, {
                        animate: {duration: 700},
                        anchor: new daum.maps.LatLng(lat, lon)
                    });
                    
                    // 마커와 인포윈도우를 표시합니다
                    displayMarker(locPosition, message);
                        
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