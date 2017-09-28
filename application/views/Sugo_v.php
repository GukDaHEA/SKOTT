<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<title>어떠셨나요?</title>
</head>
<style type="text/css">
body {
	background-color: #000;
	font-family:Helvetica,sans-serif;;-webkit-text-size-adjust:none;
}
.btn_global2{
    font-size:20px;font-weight:700;float:left;line-height:61px;display:block;width:91%;height:61px;cursor:pointer;text-align:center;color:#fff;border:none;border-radius:10px;background-color:#4d7e2b;-webkit-appearance:none;position:fixed;top:86%;left:5%;
}
.test {
	position:fixed;
	top:30%;
	left:5%;
	width:91%;
	height:230px;
	background-color: #fff;
}
#top {
	padding-top:7%;
	text-align: center;
	font-weight:bold;
	width:100%;
	height:50%;
	font-size:25px;
	display:block;
}
#middle {
	margin-top:-7%;
	text-align: center;
	width:100%;
	height:50%;
	font-size:18px;
	display:block;
	height:50%;
	border:solid 0.5px black;
}
#like {
	float:left;
	text-align: center;
	width:33%;
	height:100%;
	display:inline-block;
	background-color:#f3753a;
	color: #fff;
	font-weight:bold;
	border-right:solid 0.5px black;
	box-shadow: inset 0 0 20px #000;
}
#soso {
	width:33%;
	height:100%;
	text-align: center;
	display:inline-block;
	background-color: #e1e1e1;
	font-weight:bold;
	/*border:solid 0.5px black;*/
}
#hate {
	float:right;
	text-align: center;
	width:33%;
	height:100%;
	display:block;
	background-color: #e1e1e1;
	font-weight:bold;
	border-left:solid 0.5px black;
}

</style>
<body>
<div class="test"> 
	<div id="top">방금 탑승한 손님은 <br> 어떠셨나요?</div>
	<div id="middle">
		<span id="like" onclick="doDisplay1()"><br><br>좋아요</span>
		<span id="soso" onclick="doDisplay2()"><br><br>보통</span>
		<span id="hate" onclick="doDisplay3()"><br><br>싫어요</span>
	</div>
</div>
<div alt="보내기" class="btn_global2" onclick="success()"> 보내기 </div>
</body>
<script type="text/javascript">
function success() {
	alert("평가가 반영 되었습니다.");
	location.href="/drive/call"
}

function doDisplay1() {
	document.getElementById('like').style.backgroundColor="#f3753a";
	document.getElementById('like').style.boxShadow="inset 0 0 20px #000";
	document.getElementById('like').style.color="#fff";
	document.getElementById('soso').style.backgroundColor="#e1e1e1";
	document.getElementById('soso').style.boxShadow="none";
	document.getElementById('soso').style.color="#000";
	document.getElementById('hate').style.backgroundColor="#e1e1e1";
	document.getElementById('hate').style.boxShadow="none";
	document.getElementById('hate').style.color="#000";
}
function doDisplay2() {
	document.getElementById('like').style.backgroundColor="#e1e1e1";
	document.getElementById('like').style.boxShadow="none";
	document.getElementById('like').style.color="#000";
	document.getElementById('soso').style.backgroundColor="#f3753a";
	document.getElementById('soso').style.boxShadow="inset 0 0 20px #000";
	document.getElementById('soso').style.color="#fff";
	document.getElementById('hate').style.backgroundColor="#e1e1e1";
	document.getElementById('hate').style.boxShadow="none";
	document.getElementById('hate').style.color="#000";
}
function doDisplay3() {
	document.getElementById('like').style.backgroundColor="#e1e1e1";
	document.getElementById('like').style.boxShadow="none";
	document.getElementById('like').style.color="#000";
	document.getElementById('soso').style.backgroundColor="#e1e1e1";
	document.getElementById('soso').style.boxShadow="none";
	document.getElementById('soso').style.color="#000";
	document.getElementById('hate').style.backgroundColor="#f3753a";
	document.getElementById('hate').style.boxShadow="inset 0 0 20px #000";
	document.getElementById('hate').style.color="#fff";
}
</script>
</html>