<!DOCTYPE html>
<html>
<head>
	<title>
		board_view 입니다.
	</title>
</head>


 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-3.2.0.slim.min.js"></script>

<style type="text/css">
	#pagination_id {
		margin-left :200px;
	}
	.btn {
		position: relative;
		float: right; 
		right : 30px;
	}

	#pagination_id {
		text-align: center;
		font-size: 15px
	}
	#bd_search {
		margin-left: 30px;
	}
</style>


<body>

<h1> 게시판 </h1> <br>

			<form id="bd_search" method="post">
				<input type="text" name="search_word" id="q" placeholder="검색" required /> 
				<input type="button" value="검색" id="search_btn" required/>
			</form> <br>

<table class = "table table-striped" cellpadding="10" cellspacing="5">
	<tr>
		<th> 작성자 </th>
		<th> 제목 </th>
		<th> 내용 </th>
		<th> 조회수   </th>
	</tr>

<?php foreach ($list as $list) {
?>
	<tr>
		<td><?php echo $list->user_id ?></td>
		<td><a href="/board_c/board_v_view/<?php echo $list->board_id ?>"><?php echo $list->subject?></a></td>
		<td><?php echo $list->contents?></td>
		<td><?php echo $list->hits ?></td>
	</tr>
<?php }?>

</table>

<button class = "btn"><a href="/board_c/board_v_write">글쓰기</a></button> <p>

               <div id = "pagination_id"><?php echo $pagination;?></div>

<!--form id="bd_search" method="post" class="well form-search" -->



</body>
<script type="text/javascript">
	
	$('input, textarea').characterlimit();

</script>



<script type="text/javascript">
		$(document).ready(function(){
			$("#search_btn").click(function(){
				if($("#q").val() == ''){
					alert('검색어를 입력해주세요.');
					return false;
				} else {
					var act = '/board_c/board_v/q/'+$("#q").val()+'/page/1';
					$("#bd_search").attr('action', act).submit();
				}
			});
		});

		function board_search_enter(form) {
			var keycode = window.event.keyCode;
			if(keycode == 13) $("#search_btn").click();
		}

</script>
</html>