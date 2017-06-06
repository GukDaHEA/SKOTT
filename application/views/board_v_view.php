
<head>
	<title>
	리뷰 상세 페이지
	</title>
</head>
<style type="text/css">
	.change{
		width: 800px;
		margin: 0 auto;
	}
	.apply{
		float: right;
	}
	.con{height: 200px;
		width: 300px;

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
<h1> 수정하기 </h1>
<form method = "POST" enctype="multipart/form-data" action="/board_c/board_v_modify">
	<div class="apply"><a href="/board_c/board_delete/<?php echo $views->board_id ?>" style="width:100pt;height:30pt;">삭제</a></div>	
	<div class="apply"><a href="/board_c/board_v_modify/<?php echo $views->board_id ?>">수정</a></div>
	<div class="hits"> 조회수 : <?php echo $views->hits;?></div>
	<div class="date"> 작성일 : <?php echo $views->reg_date;  ?></div>
	<div class="title"> 제목 : <?php echo $views->subject;?></div>

	<div class="pic"> 사진 : <?php if ( ! $views->picture == 0) { ?> 
		<td><img alt="" src="<?php echo $views->picture ?>" style="height:100px;width:110px" /></td>
		<?php }
		?>			
	</div>
	<div class="con"> 내용 : <?php echo $views->contents;?> </div>
	<div><a href="/board_c/board_v">돌아가기</a></div>
	
	 
</form>

</div>
</body>
</html>