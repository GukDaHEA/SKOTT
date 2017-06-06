
<head>
	<title>
	리뷰 상세 페이지
	</title>
	<script src="/static/js/juery.bpopup.min.js" type="text/javascript"></script>

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

  .map_menu li {
    width : 8%;
  }

    .map_menu li a:hover {
    color :#4d7e2b;
  } 
    .ui.search {
    color : white;
    padding-right : 100px;
  }

       @media(max-width: 1025px) {

          .BOXA {
            width : 109%;
          }
       }
	/*헤더*/

	.change{

		width: 800px;
		margin: 0 auto;
		margin-top: 10px;
	}
	
	.date{
		float: right;				
	}
	.hits{	
		float: right;
	}
	.title{
	}	
	.pic{
		margin-bottom: 5px;
	}

	.con2{height: 350px;
		width: 800px;
		background-color: #eaf1f7;
		margin-bottom: 5px;
		}
	.back{
		
	}
	.apply{
		float: right;
	}
	.pic{
		width: 800px;
		height: 130px;
		background-color: #eaf1f7;
	}
	@media screen and (max-device-width:450px) {
	 	.change{
	 		margin: 30px;
	 	}
	 }

</style>
<body>
<!-- <h1> 리뷰  </h1>
<table border = "3" cellpadding="10">
	<tr>
		<td><?php echo $views->board_id; ?></td>
		<td><?php echo $views->user_id;  ?></td>		
		<td><?php echo $views->contents; ?></td>
		<td><?php echo $views->hits;     ?></td>
		<td><?php echo $views->reg_date  ?></td>
		<?php if ( ! $views->picture == 0) { ?> 
		<td><img alt="" src="<?php echo $views->picture ?>" style="height:100px;width:110px" /></td>
		<?php }
		?>
	</tr>


<div><a href="/Detail/board_delete/<?php echo $views->board_id ?>">삭제</a></div>
		<div><a href="/Detail/board_v_modify/<?php echo $views->board_id ?>">수정</a></div>
	
	<tr>
		<td colspan = "5"><a href="/board_c/board_v">돌아가기</a></td>
	</tr>
</table> -->


		
<div class = "BOXA">
  <div class = "map_logo"><a href="/mains"><img src="/static/image/header/logo.png"></a></div>
<div class = "map_search"> 
    <div class="ui search">
     관광지 : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="ui icon input">
        <input class="prompt" type="text" size ="60" placeholder="Search...">
       <i class="inverted circular search link icon"></i>
      </div>
    </div>

  </div>
<ol class = "map_menu">
  <li class = "map_home"><p><a href="/mains">홈</a></p></li>
  <li class = "map_view"><p><a href="/map/map_v">지도보기</a></p></li>
  <li class = "map_location"><p><a href="#">내위치</a></p></li>
               <?php
                if ($this->session->userdata('is_login')){
                ?>
                    <li class = "map_login"><a href="/Login/logout">로그아웃</a></li>
                    <li class = "map_home"><a href="/User/user"><?php echo $this->session->userdata('name') ?> 님</a></li>
                <?php
                } else {
                ?>
                    <li class = "map_login"><a href="/Login">로그인</a></li>
                <?php
                }
                ?>
  <ol>
</div>
<div class="change">
<h1> 수정하기 </h1>
<form method = "POST" enctype="multipart/form-data" action="/board_c/board_v_modify">	
	
	
	

	
	<div class="hits"> 조회수 : <?php echo $views->hits;?></div><br>
	<div class="date"> 작성일 : <?php echo $views->reg_date;  ?></div><br>

	<div class="title">  <?php echo $views->subject;?></div>
	<hr>
	<br>

	
	
	<div class="con2"><br>	 <?php echo $views->contents;?> </div>
	
	
	<div class="pic"> <br><?php if ( ! $views->picture == 0) { ?> 
		<td><img alt="" src="<?php echo $views->picture ?>" style="height:100px;width:110px; margin-left:5px;" /></td>
		<?php }
		?>			
	</div>
	<div class="apply" style="float: right;"><a href="/board_c/board_delete/<?php echo $views->board_id ?>" style="width:100pt;height:30pt;">삭제</a></div>
	<div class="apply" style="float: right;">|</div>
	<div class="apply" style="float: right;"><a href="/board_c/board_v_modify/<?php echo $views->board_id ?>">수정</a></div>
	<div class="apply" style="float: right;">|</div>
	<div class="back" style="float: right;"><a href="/board_c/board_v">목록</a></div><br> 
</form>

</div>
</body>
</html>