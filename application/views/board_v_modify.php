<!DOCTYPE html>
<html>
<head>
	<title>
	수정하기
	</title>
</head>
<style type="text/css">

	.change{
		padding-top: 20px;		
		width: 800px;
		margin: 0 auto;
	}
	.apply{
		margin-right: 15px;
		float: right;
		font-size: 18px;
	}
	.con{height: 200px;
		width: 300px;

		}
</style>
<body>

<div class="change">

<h1> 수정하기 </h1><br>
<form method = "POST" enctype="multipart/form-data" action="/board_c/board_v_modify/<?php echo $views->plag_id?>/<?php echo $views->board_id ?>"> 
<!-- 파일 업로드 할때 필요한  --> 				<!-- action은 /Detail/board_v_modify 에 함수 실행  -->
	
	
	<!-- <div class="apply"><input type="submit" name="submit_test" value="수정" style="width:100pt;height:30pt;"></div>	 -->			
	<div class="title"> 제목 : &nbsp; <input type="text" name="modify_subject" style="width: 500px; height: 30px; text-indent:7px;" value= "<?php echo $views->subject;?>"></div> <hr><br>

		<!-- 	<div class="con"> 내용 : <input type="text" name="modify_contents" value = "<?php echo $views->contents;?>" style="width:800px;height:300px;"></div> -->
	<textarea name="modify_contents" rows="18" cols="108" style="text-indent: 10px;padding-top: 20px; background-color: #eaf1f7;" > <?php echo $views->contents;?> </textarea> <br>

	<div class="apply" id="del" style="float: right;width:100pt;height:30pt;cursor:pointer">취소</div>	
	<div class="apply" style="float: right;">|</div>
	<!-- 	<div class="apply" style="float: right;"><a href="/board_c/board_v_modify/<?php echo $views->board_id ?>" style="width:100pt;height:30pt;">수정(아직)</a></div>  -->
		<div class = "apply" style="float: right; "><input type="submit" value ="수정" style="background-color: transparent; border-style: none; color:#4183C4;"> </div>

	<div class="pic"> 사진 : <img alt="사진" src="<?php echo $views->picture ;?>" style="height:100px;width:110px" />
		<input type="file" name="user_upload_file" />
	</div>

	<!-- <div class="pic"> 사진 : <img alt="" src=<?php if (!$views->picture) {?>"/static/Image/default.png"
                           <?php } else if ($views->picture) {?>"<?php echo $views->picture ;?>"<?php } ?> style="height:100px;width:110px" />
		<input type="file" name="user_upload_file" />
	</div> -->
</form>

</div>
<script> 
$('#del').click(function() { 
      location.replace('/board_c/board_v/<?php echo $views->plag_id ?>'); 
  }); 
</script>
</body>
</html>