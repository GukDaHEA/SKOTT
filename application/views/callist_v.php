<head>
    <title>SKOTT - 기사</title>
</head>
<style>
.input_row{float:left;position:relative;width:100%;height:150px;padding:10px 35px 10px 15px;border-radius:10px;background:#000;color:#fff;}
 .login_form{ border:0px; width:100%;height:100% }
input {font-family:Helvetica,sans-serif;font-size:18px;color:#fff;border:0px}
input[type=text] { background-color:#000; height:40px;word-break:break-all;}
input[type=textarea] { background-color:#000; height:40px;word-break:break-all;}
textarea{ font-family:Helvetica,sans-serif;font-size:15px;color:#fff;border:0px;background-color:#000; height:40px;word-break:break-all;resize:none;}

.past {
	color:#ffffff;
	background-color:#4d7e2b;
	border:0px;
    border-radius:20px;
	width:50px;
    height:25px;
	display:block;
	text-align: center;
	font-weight:bold;
    left:80%;
    top:5%;
    position:relative;
    z-index:9999;
}
#accept {
	float:right;
	top:-155px;
	left:35px;
	height:170px;
	width:50px;
	text-align: center;
	background-color:#4d7e2b;
	position:relative;
	z-index: 1000;
	font-weight:bold;
	border-radius:0 10px 10px 0;
}
#wrap {
    margin-top:20%;
}
</style>
    <!-- Content panel -->
    <div class="past" onclick="pastpast()">이전</div>
	<div id="wrap">
			<table class = "table table-striped" cellpadding="10" cellspacing="5">

            <?php foreach ($list as $list) {
            ?>
            	<tr id="trs">
            	<td>
            		<form class="login_form" action="/drive/call_accept" method="post">
            		    <div class="input_row">
            		    	<div>
                		    	<input type="hidden" name="call_id" id="call_id" value="<?php echo $list->call_id ?>">
                		    	<input type="text" name="departure" value="<?php echo $list->departure ?>"><br>
                		    	<h6>목적지</h6>
                                <textarea wrap="hard" readonly="readonly"> <?php echo $list->destination ?> </textarea>
                		    	<input type="hidden" name="destination" value="<?php echo $list->destination ?>">
                                <input type="hidden" name="driver_id" value="<?php echo $this->session->userdata('driver_id') ?>">
                                <input type="hidden" name="user_id" value="<?php echo $list->userIdx ?>">
            		    	</div>
            		        	<input type="submit" id="accept" value="수 락" />
            		    </div>

            		</form>
            	</td>
            	</tr>
            <?php }?>

            </table>
    </div>
</div>
<script>
/*
	이전 버튼
*/
function pastpast() {
	history.back();
}
</script>
</body>
</html>