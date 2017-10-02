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
        margin-top :30px;
      }
	#pagination_id {
		margin-left :20%;
		/*margin-top:-2%;*/
		font-size:20px;
		text-align: center;
		letter-spacing:10px;
		color:#4d7e2b;
		display:block;
		background-color: #fff;
		margin-top:-5%;
	}
	.btn {
		position: relative;
		float: right; 
		right : 30px;
		background-color:#4d7e2b;
		color:white;
		font-weight: bold;
		margin-top:-5%;
		width: 100px;
	}

	.btn2 {
		border:0px;
		position: relative;
		float: right; 
		right : 30px;
		background-color:#4d7e2b;
		color:white;
		font-weight: bold;
		margin-top:-5%;
		margin-right:110px;
		border-radius:5px;
		width:55px;
		height:35px;
		width: 100px;
	}
	.btn a{
		color:white;
	}

	.btn2 a{
		color:white;
	}
	.btn3 {
		border:0px;
		position: relative;
		float: right; 
		right : 30px;
		background-color:#4d7e2b;
		color:white;
		font-weight: bold;
		margin-top:-5%;
		margin-right:230px;
		border-radius:5px;
		width:55px;
		height:35px;
		width: 100px;
	}
	.btn3 a{
		color:white;
	}
	#bd_search {
		margin-left: 30px;
		margin-top:70px;
	}

	a{color: black;}
	a:hover{text-decoration: none;}

	table #trs {
		height:130px;
	}


</style>


<body>
 <div class="container">
<h3 style="color:#4d7e2b">Review </h3>
<br><br>
<table class = "table table-striped" cellpadding="10" cellspacing="5">
	<tr>
		<th> Writer </th>
		<th> Title </th>
		<th> Contents </th>
		<th> Views   </th>
		<th> Date </th>
		<th> Images </th>
	</tr>

<?php foreach ($list as $list) {
?>
	<tr id="trs">
		<td><?php echo $list->user_name ?></td>
		<td><a href="/board_c_eng/board_v_view/<?php echo $list->board_id ?>"><?php echo $list->subject?></a></td> 
		<!-- 제목을 통해서 들어가기 -->
		<td><a href="/board_c_eng/board_v_view/<?php echo $list->board_id ?>"><?php echo $list->contents?></a></td>
		<td><?php echo $list->hits ?></td>
		<td><?php echo $list->reg_date ?></td>
		<?php if ( ! $list->picture == 0) { ?> 
		<td><img alt="" src="<?php echo $list->picture ?>" style="height:100px;width:110px" /></td>
		<?php } else { ?> <td></td> <?php }
		?>
	</tr>
<?php }?>

</table>
               <div id = "pagination_id"><?php echo $pagination;?></div>
<div>
			<form id="bd_search" method="post">

				<input type="text" style="width: 300px;"name="search_word" id="q" placeholder="search" required /> 
				<input type="button" value="search" id="search_btn" required/>
			</form> 
               <br>
<button class = "btn"><a href="/board_c_eng/board_v_write">Write</a></button>
<button class = "btn2"><a href="/board_c_eng/board_v">List</a></button>
<button class = "btn3"><a href="/detail_eng/detail/3">Back</a></button>

</div>

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
					var act = '/board_c_eng/board_v/q/'+$("#q").val()+'/page/1';
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