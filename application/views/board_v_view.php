<!DOCTYPE html>
<html>
<head>
	<title>
	board_v_view 페이지 입니다.
	</title>
</head>
<body>
<h1> Board_v_view 목록 페이지 입니다. </h1>

<table border = "3" cellpadding="10">
	<tr>
		<td><?php echo $views->board_id; ?></td>
		<td><?php echo $views->user_id;  ?></td>
		<td><?php echo $views->subject;  ?></td>
		<td><?php echo $views->contents; ?></td>
		<td><?php echo $views->hits;     ?></td>
	</tr>

	<tr>
		<td colspan = "4"><a href="/board_c/board_delete/<?php echo $views->board_id ?>">삭제</a></td>
		<td colspan = "5"><a href="/board_c/board_v_modify/<?php echo $views->board_id ?>">수정</a></td>
	</tr>
	
	<tr>
		<td colspan = "5"><a href="/board_c/board_v">돌아가기</a></td>
	</tr>
</table>

</body>
</html>