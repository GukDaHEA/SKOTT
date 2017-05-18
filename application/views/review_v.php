<!DOCTYPE html>
<html>
<head>
	<title>
		리뷰페이지  입니다.
	</title>
</head>
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<style type="text/css">

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
<h1> 글쓰기 </h1> <br>
	<form method="post">
		<input type="text" name="board_subject" placeholder="제목" class = "text_subject"> <br> <br>
		<textarea cols = "50" rows = "10" name="board_contents" placeholder="내용" class = "text_textarea"></textarea> <br><br>
		<input type="submit" name="board_submit" class = "btn btn-primary" value = "작성"> 
	</form>
</body>
<!-- <script type="text/javascript">
		function board_search_enter(form) {
			var keycode = window.event.keyCode;
			if(keycode == 13) $("#board_submit").click();
		}
</script> -->



</html>
