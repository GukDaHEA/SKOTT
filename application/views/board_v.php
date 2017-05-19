<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>


 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-3.2.0.slim.min.js"></script>

<style type="text/css">

     .container {
        width :70%;
        height :flex;
        border :0px;
        margin-top : 100px;
      }
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
 <div class="container">

<table class = "table table-striped" cellpadding="10" cellspacing="5">
	<tr>
		<th> 작성자 </th>
		<th> 제목 </th>
		<th> 내용 </th>
		<th> 조회수   </th>
		<th> 작성일 </th>
	</tr>

<?php foreach ($list as $list) {
?>
	<tr>
		<td><?php echo $list->user_name ?></td>
		<td><a href="/Detail/board_v_view/<?php echo $list->board_id ?>"><?php echo $list->subject?></a></td>
		<td><?php echo $list->contents?></td>
		<td><?php echo $list->hits ?></td>
		<td><?php echo $list->reg_date ?></td>
	</tr>
<?php }?>

</table>
<div>
			<form id="bd_search" method="post">
				<input type="text" name="search_word" id="q" placeholder="검색" required /> 
				<input type="button" value="검색" id="search_btn" required/>
			</form> <br>
<button class = "btn"><a href="/Detail/board_v_write">글쓰기</a></button> <p>
</div>
               <div id = "pagination_id"><?php echo $pagination;?></div>

<!--form id="bd_search" method="post" class="well form-search" -->


</div>
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