<!DOCTYPE html>
<html>
<head>
	<title>
	board_v_modify 페이지 입니다.
	</title>
</head>
<body>
<h1> Board_v_modify </h1>

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

<form method = "POST" enctype="multipart/form-data" action="/Detail/board_v_modify">
	 제목 : <input type="text" name="modify_subject" value= "<?php echo $views->subject;?>" >
	 내용 : <input type="text"  name="modify_contents" value = "<?php echo $views->contents;?>">
	 사진 : <img alt="" src=<?php if (!$views->picture) {?>"/static/Image/default.png"
                           <?php } else if ($views->picture) {?>"<?php echo $views->picture ;?>"<?php } ?> style="height:100px;width:110px" />
		<input type="file" name="user_upload_file" />
	 <input type="submit" name="submit_test" value="적용">
</form>



</body>
</html>