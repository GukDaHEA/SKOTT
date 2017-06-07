<!DOCTYPE html>
<html>
<head>
	<title>
	수정하기
	</title>
</head>
<style type="text/css">

	.change{
		padding-top: 10px;		
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


<!-- <table border = "3" cellpadding="10">
	<tr>
		<td><?php echo $views->board_id; ?></td>
		<td><?php echo $views->user_id;  ?></td>
		<td><?php echo $views->subject;  ?></td>
		<td><?php echo $views->contents; ?></td>
		<td><?php echo $views->hits;     ?></td>
	</tr>

	<tr>
		<td colspan = "5"><a href="/board_c/board_v_view">돌아가기</a></td>
	</tr>
</table> -->
<div class="change">

<h1> 수정하기 </h1>
<form method = "POST" enctype="multipart/form-data" action="/board_c/board_v_modify"> 
<!-- 파일 업로드 할때 필요한  --> 				<!-- action은 /Detail/board_v_modify 에 함수 실행  -->
	
	<div class="apply" style="float: right;"><a href="/board_c/board_delete/<?php echo $views->board_id ?>" style="width:100pt;height:30pt;">삭제</a></div>	
	<div class="apply" style="float: right;">|</div>
	<div class="apply" style="float: right;"><a href="/board_c/board_delete/<?php echo $views->board_id ?>" style="width:100pt;height:30pt;">수정(아직)</a></div>
	<!-- <div class="apply"><input type="submit" name="submit_test" value="수정" style="width:100pt;height:30pt;"></div>	 -->			
	<div class="title"> 제목 : <input type="text" name="modify_subject" style="width: 500px;" value= "<?php echo $views->subject;?>"></div> <hr>

		<!-- 	<div class="con"> 내용 : <input type="text" name="modify_contents" value = "<?php echo $views->contents;?>" style="width:800px;height:300px;"></div> -->
	<textarea name="modify_contents" rows="20" cols="105" > <?php echo $views->contents;?> </textarea> <br>

	<div class="pic"> 사진 : <img alt="" src=<?php if ($views->picture) {?>"<?php echo $views->picture ;?>"<?php } ?> style="height:100px;width:110px" />
		<input type="file" name="user_upload_file" />
	</div>

	<!-- <div class="pic"> 사진 : <img alt="" src=<?php if (!$views->picture) {?>"/static/Image/default.png"
                           <?php } else if ($views->picture) {?>"<?php echo $views->picture ;?>"<?php } ?> style="height:100px;width:110px" />
		<input type="file" name="user_upload_file" />
	</div> -->
	 
</form>

</div>

</body>
</html>