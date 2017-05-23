<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://malsup.github.com/jquery.cycle2.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="/static/js/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="/static/css/jquery.bxslider.css" rel="stylesheet" />
<script>
	 $(document).ready(function(){
	  $('.bxslider').bxSlider();
	});
</script>
<title>무제 문서</title>

<style>	
	
	#select .sen_1{
		padding-top: 100px;
		width: 100%;
		text-align: center;
		font-size: 24px;
		color: #fff;
		margin-bottom: 22px;
		cursor: default;
	}

	#select .sen_2 {
		width: 100%;
		font-size: 48px;
		text-align: center;
		color: #fff;
		cursor: default;
	}
	#select .overlay {
		width: 100%;
		height: 100px;
		text-align: center;
	}
	#select .topCitiesImage{
		height: 50px;
	}
	#select .topcities{
		border-style: solid;
		width: 75px;
		height: 50px;
		text-align: center;
	}	
	
	#select .backImage{
		padding-top: 20x;
		padding-bottom: 20px;
		background: url(/static/image/pic2.jpg);
		background-repeat: no-repeat;
		
	}
	#select .bxslider{				
		margin-left: auto;
		margin-right: auto;
	}
	
	#select .search{		
		display: table;		/*검색창 가운데 정렬*/
		margin-left: auto;
		margin-right: auto;
	}
		.search_input {                      
            float: left;
            width: 300px;
			height: 42px;
            border-radius: 5px 0 0 5px;
            color: #e2e2e2;
            text-indent: 10px		/*글 뒤로 보내기*/
        }
			.search_button {				
				border-left: none;
				width: 100px;
				height: 50px;
				background-color: #f3753a;
				border-radius: 0 5px 5px 0;
				border: 0;
				color: white;
				font-weight: bold;
			}

            .searchbutton:hover {
                background-color: #d16126;
            }
	
	
	</style>

</head>

<body>
<div class="content">
  <div id="select">
    <div class="backImage">      
        <div class="sen_1">안녕하세요</div>
        <div class="sen_2">SKOTT</div>      
      
      <div class="overlay">
        <div class="topCitiesImage">사진</div>
        <div class="topCities">skott이 추천하는 관광지</div>
      </div>
      <div class="tourList">
        <div class="swiper" align="center">
          <ul class="bxslider">
            <li><img src="/static/image/pic1.jpg" /></li>
            <li><img src="/static/image/pic2.jpg" /></li>
            <li><img src="/static/image/pic3.jpg" /></li>
            <li><img src="/static/image/pic2.jpg" /></li>
            <li><img src="/static/image/pic4.jpg" /></li>
            <li><img src="/static/image/pic5.jpg" /></li>   
          </ul>
          <script>
			$('.bxslider').bxSlider({
			minSlides: 2,
			maxSlides: 3,
			slideWidth: 500,			
			slideMargin: 10,
				auto: true			
				});
			</script></div>
      </div>           
      <div class="searchContainer">
      	<div class="tripSearch">
   		  <div class="search" >
				<input type="text" class="search_input"  placeholder="원하시는 지역명/관광지명을 입력하세요.">
				<button class="search_button" >찾아보기</button>				
			</div>
   		  </div>
        </div>
      </div>
    </div>
</div>
</body>
</html>