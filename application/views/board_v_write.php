<!DOCTYPE html>
<html>
<head>

	<title>
		리뷰 작성 페이지 
	</title>
</head>
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<style type="text/css">

	.background {
		padding-top: 10px;
		width: 800px;
		margin: auto;
	}
	.btn {
		position: relative;
		float: right; 
		right : 7%;
	}
	.text_subject {
		margin-left: 3%;
	}

	.text_textarea {
		margin-left: 3%;
		width : 90%;
	}

</style>
<body>
	


	<form method="post" enctype="multipart/form-data" action="/board_c/board_v_write" class="background">
<h1> 리뷰 쓰기 </h1> <br>	
		<input type="text" name="board_subject" placeholder="제목" class = "text_subject" style="width: 500px;"> <br> <hr>
		<textarea cols = "50" rows = "10" name="board_contents" placeholder="내용" class = "text_textarea"></textarea> <br><br>
		<input type="file" name="user_upload_file" />
		<input type="submit" name="board_submit" class = "btn btn-primary" value = "작성"> 
	</form>
<!-- 	<script src="/static/ckeditor/ckeditor.js"></script>
	<script>
		//textarea를 ckeditor로 대체
		CKEDITOR.replace('board_contents', {
			'filebrowserUploadUrl':'/board_c/board_v_write_ok'
		});
	</script> -->


</body>
<!-- <script type="text/javascript">
		function board_search_enter(form) {
			var keycode = window.event.keyCode;
			if(keycode == 13) $("#board_submit").click();
		}
</script> -->



</html>
