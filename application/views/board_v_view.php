
<head>
	<title>
	리뷰 상세 페이지
	</title>
</head>
<body>
<br><br><br><br><br>
<h1> 리뷰  </h1>
<table border = "3" cellpadding="10">
	<tr>
		<td><?php echo $views->board_id; ?></td>
		<td><?php echo $views->user_id;  ?></td>
		<td><?php echo $views->subject;  ?></td>
		<td><?php echo $views->contents; ?></td>
		<td><?php echo $views->hits;     ?></td>
		<td><?php echo $views->reg_date  ?></td>
		<?php if ( ! $views->picture == 0) { ?> 
		<td><img alt="" src="<?php echo $views->picture ?>" style="height:100px;width:110px" /></td>
		<?php }
		?>
	</tr>

	<tr>
		<td colspan = "4"><a href="/Detail/board_delete/<?php echo $views->board_id ?>">삭제</a></td>
		<td colspan = "5"><a href="/Detail/board_v_modify/<?php echo $views->board_id ?>">수정</a></td>
	</tr>
	
	<tr>
		<!-- <td colspan = "5"><a href="/board_c/board_v">돌아가기</a></td> -->
	</tr>
</table>

</body>
</html>