<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>무제 문서</title>
	<style type="text/css">
		body {
			width: 300px;
			height: 500px;
			font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
			border-style: solid;
			border-color: hsla(122,26%,49%,1);
			margin-top: 30px;
			margin-right: auto;
			margin-bottom: auto;
			margin-left: auto;
		}
	</style>
</head>

<link rel="stylesheet" href="/static/css/drive_sucess.css">

<body>
	<div id="drive">
		<div id="drive_header">
			<div id="drive_logo"><img src="static/image/header/logo.png" width="148" height="54" alt=""/></div>
			<div id="drive_menu">메뉴</div>	
		</div>
		<div id="driver_name">국다혜 기사님</div>
		<div id="drive_info">
			<div id="wait">콜 대기중</div>
			<div class="spinner">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>
		<div id="drive_call"><button class="call"><a href="javascipt:" onclick="javascript:window.close();" style="">퇴근하기</a></button></div>


	</div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">

	function test(target) {

		$.ajax ({
			type : 'POST',
			url : '/index.php/drive/driveok',
			data : { call_id: target.id },
			dataType : 'json',
			success : function (data) {
				alert("예약이 완료되었습니다.");
				history.go(0);
			}
		});

	}

</script>


</html>
