<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <script
          src="https://code.jquery.com/jquery-3.1.1.min.js"
          integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
          crossorigin="anonymous">
        </script>
    <title>SKOTT - 기사</title>
</head>
<style>
.h_logo{display:block;overflow:hidden;width:100px;height:50px;left:150px;margin:0 auto;background-position:-1px -1px}
.h_logo{background-image:url("/static/image/header/logo.png");background-size: 100% 100%;background-repeat:no-repeat;margin-top:10px;}
.input_row{float:left;position:relative;width:290px;top:100px;height:150px;padding:10px 35px 10px 15px;border:solid 0px #dadada;border-radius:10px;background:#000;color:#fff;}
 .login_form{ border:0px;margin-top:0; width:100%;}
input {font-family:Helvetica,sans-serif;font-size:18px;color:#fff;border:0px}
input[type=text] { background-color:#000; height:40px;word-break:break-all;}
#header { z-index: 1500; position:fixed; background-color: #3e3e3e;margin:auto 0; width:100%;height:12%;}
body {
    margin: 0;
    color: #111111;
    background-color:#e5edf3;
}
/*
  Menu
*/
nav#slide-menu {
    position: fixed;
    top: 0;
    left: -100px;
    bottom: 0;
    display: block;
    float: left;
    width: 100%;
    max-width: 284px;
    height: 100%;

    -moz-transition: all 300ms;
    -webkit-transition: all 300ms;
    transition: all 300ms;
}

body.menu-active nav#slide-menu { left: 0px; }
body.menu-active nav#slide-menu ul { left: 0px; opacity: 1;}

/*
  Content
*/

    div#container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #353535;
        overflow: scroll;
        border-radius: 0;

        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;

        -moz-box-shadow: -3px 0 6px darken(#556270, 5%);
        -webkit-box-shadow: -3px 0 6px darken(#556270, 5%);
        box-shadow: -3px 0 6px darken(#556270, 5%);

        -moz-transition: all 300ms;
        -webkit-transition: all 300ms;
        transition: all 300ms;
    }
    div.menu-trigger {
        position: fixed;
        top: 20px;
        left: 20px;
        width: 36px;
        height: 36px;
        cursor: pointer;
        border-radius: 5px;

        -moz-transition: all 300ms;
        -webkit-transition: all 300ms;
        transition: all 300ms;
    }

    img { max-width: 100%; width: auto !important; height: auto ; }

body.menu-active div#container { left: 150px; border-radius: 7px 0 0 7px; }
body.menu-active div#container .menu-trigger { left: 150px; }

.past {
	color:#ffffff;
	background-color:#3e3e3e;
	border:0px;
	width:50px;
	display:block;
	text-align: center;
	font-weight:bold;
	float:right;
	margin-right:15px;
	margin-top:-60px;
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
</style>
<body class="chrome">
<!-- Navigation -->
    <nav id="slide-menu">
        <div id="myinfo">  </div>
        <ul>
            <li>내 기록</li>
            <li>개인 정보</li>
            <li>설정</li>
            <li>로그아웃</li>
        </ul>
    </nav>

<div id="container">
    <!-- Content panel -->
    <div id="header">
                <div class="menu-trigger"><img src="/static/image/menu.png"/></div>
                <h1><a href="/mains" class="h_logo" tabindex="2"></a></h1>
                <button class="past" onclick="pastpast()">이전</button>
	</div>
	<div id="content">
		<div id="wrap">
			<table class = "table table-striped" cellpadding="10" cellspacing="5">

<?php foreach ($list as $list) {
?>
	<tr id="trs">
	<td>
		<form class="login_form" action="/drive/call_accept" method="post">
		    <div class="input_row">
		    	<div style="width:75%">
    		    	<input type="hidden" name="call_id" id="call_id" value="<?php echo $list->call_id ?>">
    		    	<input type="text" name="departure" value="<?php echo $list->departure ?>"><br>
    		    	<h6>목적지</h6>
    		    	<input type="text" name="destination" value="<?php echo $list->destination ?>">
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
</div>
<script>
/*
  Slidemenu
*/
(function() {
    var $body = document.body
    , $menu_trigger = $body.getElementsByClassName('menu-trigger')[0];

    if ( typeof $menu_trigger !== 'undefined' ) {
        $menu_trigger.addEventListener('click', function() {
            $body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
        });
    }

}).call(this);
</script>

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