
<head>
	<title>
	Review Detail
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

	.change{

		width: 800px;
		margin: 0 auto;
		margin-top: 20px;
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
		border: 1px solid #8C8C8C;
		}
	.back{
		
	}
	.apply{
		float: right;
		font-size: 18px;
		margin-right: 15px;
	}
	.pic{
		width: 800px;
		height: 130px;
		
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


<div class="change">
<h1> Review </h1>
<form method = "POST" enctype="multipart/form-data" action="/board_c_eng/board_v_modify/<?php echo $views->plag_id?>">	
	
	<div class="hits"> Hits: <?php echo $views->hits;?></div><br>
	<div class="date"> Date : <?php echo $views->reg_date;  ?></div><br>
	<div class="date"> from : <?php echo $views->user_name;  ?></div><br>

	<div class="title" style="text-indent:10px;">  <?php echo $views->subject;?></div>
	<hr>
	<br>

	<div class="con2" style="text-indent:20px; padding-top: 30px; "> <?php echo $views->contents;?> </div>
	
	<div class="apply" style="float: right;"><a href="/board_c_eng/board_delete/<?php echo $views->plag_id?>/<?php echo $views->board_id ?>" style="width:100pt;height:30pt;">delete</a></div>
	<div class="apply" style="float: right;">|</div>
	<div class="apply" style="float: right; "><a href="/board_c_eng/board_v_modify/<?php echo $views->plag_id?>/<?php echo $views->board_id ?>">modify</a></div>
	<div class="apply" style="float: right;">|</div>
	<div class="back" style="float: right; font-size: 18px; margin-right: 15px;"><a href="/board_c_eng/board_v/<?php echo $views->plag_id ?>">list</a></div><br>
	 <div class="pic" style="text-indent:10px; padding-top: 10px;"> image <?php if ( ! $views->picture == 0) { ?> 
		<td><img alt="" src="<?php echo $views->picture ?>" style="height:100px;width:110px; margin-left:5px;" /></td>
		<?php }
		?>			
	</div>
</form>

</div>
</body>
</html>