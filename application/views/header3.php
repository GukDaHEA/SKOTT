<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" type="text/css" href="/static/Semantic/semantic.min.css">
        <script
          src="https://code.jquery.com/jquery-3.1.1.min.js"
          integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
          crossorigin="anonymous">
        </script>
        <script src="/static/Semantic/semantic.min.js"></script>
</head>

<style type="text/css">
	.BOXA {
/*		border : 1px solid black;*/
		height: 11%;
		background-color: rgba(0,0,0,0.8);
		color : white;
		text-align: center;
		vertical-align: middle;
		font-size: 10pt;
	}

	.map_logo {
/*		border : 1px solid red;*/
		height: 100%;
		width : 15%;
		float : left;
		padding-top : 10px;
	}

	.map_search {
/*		border : 1px solid red;*/
		width : 45%;
		height: 100%;
		float : left;
		padding-top : 30px;
	}

	.map_home, .map_view, .map_location, .map_login {
/*		border : 1px solid red;*/
		width : 10%;
		height: 100%;
		float : left;
		padding-top : 30px;
	}

/*	.map_view {
		border : 1px solid red;
		width : 10%;
		height: 100%;
		float : left;
	}
	.map_location {
		border : 1px solid red;
		width : 10%;
		height: 100%;
		float : left;
	}
	.map_login {
		border : 1px solid red;
		width : 10%;
		height: 100%;
		float : left;
	}*/

</style>
<body>

<div class = "BOXA">
	<div class = "map_logo"><img src="/static/image/header/logo.png"></div>
	<div class = "map_search"> 
		<div id="h_search" class="ui search">
			 <form method="get" action="/search" id="search">
			  <input class = "prompt" name="q" type="text" size="40" placeholder="찾아보기" />
			</form>
		</div>
  </div>

	<div class = "map_home">홈</div>
	<div class = "map_view">지도보기</div>
	<div class = "map_location">내위치</div>
	<div class = "map_login">로그인</div>
</div>
	
	
	
</body>

<script type="text/javascript">
  
	 var recommand_name = <?php echo $recommand_name;?>

	$('.ui.search')
	  .search({
	    source: recommand_name
	  })
	;

</script>
</html>