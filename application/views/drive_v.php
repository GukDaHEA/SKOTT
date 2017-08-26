<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>SKOTT - 호출</title>
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<style>

.h_logo{background-image:url("/static/image/header/logo.png");background-size: 100% 100%;background-repeat:no-repeat;display:block;overflow:hidden;width:100px;height:50px;margin:0 auto;background-position:-1px -1px}
.input_row{position:relative;height:150px;margin:0 0 14px;padding:10px 35px 10px 15px;border:solid 0px #dadada;border-radius:10px;text-align:center;background:#000}.input_row.focus{border:solid 1px #20bc01}.input_box{color:white;display:block;overflow:hidden;margin-top:-30px;}.int{font-size:15px;line-height:16px;position:relative;z-index:9;width:100%;height:16px;padding:7px 0 6px;color:#000;border:none;background:#fff;-webkit-appearance:none}.lbl{font-size:15px;text-align:center;line-height:16px;position:absolute;z-index:8;top:16px;left:15px;color:#999}.lbl{z-index:10}.wrg{position:absolute;z-index:1000;top:16px;right:13px;display:none;overflow:hidden;width:19px;height:19px;margin:0;padding:0;cursor:pointer;text-indent:-999px;border:0;background-color:transparent;background-position:-1px -263px}
.input_row{padding:10px 6px 10px 9px;} .login_form{ border:0px; margin-top:25%;}
.btn_global{font-size:20px;font-weight:700;line-height:61px;display:block;width:100%;height:61px;margin:30px 0 13px;padding-top:2px;cursor:pointer;text-align:center;color:#fff;border:none;border-radius:10px;background-color:#4d7e2b;-webkit-appearance:none}.btn_global:active,.btn_global:hover,.btn_global:link{text-decoration:none;color:#fff}
input {font-family:Helvetica,sans-serif;font-size:12px;-webkit-text-size-adjust:none}
input[type=textarea]{background:#000;border:0px;color:white;font-size:20px;}
input[type=submit]{margin-top:50%;}
/* menu icon 스타일*/
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

    div#content {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #3e3e3e;
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

body.menu-active div#content { left: 150px; border-radius: 7px 0 0 7px; }
body.menu-active div#content .menu-trigger { left: 150px; }

</style>

<style type="text/css">
    
.start_end {
    color :white;
    margin-top: -50px;
}

.start_content, .end_content {
    font-size: 22px;
}
#start_spot{
    background-color: #000;
    color:#fff;
    border:0;
    font-size: 15px;
    text-align: center;
    width:100%;
    font-weight: bold;
}
#end_spot{
    background-color: #000;
    color:#fff;
    border:0;
    font-size: 15px;
    text-align: center;
    width:100%;
    font-weight: bold;
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

    <!-- Content panel -->
    <div id="content">
        <!-- container -->
                <div class="menu-trigger"><img src="/static/image/menu.png"/></div>
            <!-- content -->
                <h1><a href="/mains" class="h_logo" tabindex="1"></a></h1>
                <!-- <form id="frmNIDLogin" name="frmNIDLogin" action="javascript:log();" method="post"> -->
                    <form class="login_form" method="POST" action="/drive/cus_wide">
                        <div class="input_row" id="id_area">
                            <span class="input_box"><br><br><br>
                             <input type="text" id="start_spot" wrap="virtual" value="<?=$start?>">에서
                             <input type="text" id="end_spot" wrap="virtual" value="<?=$end?>">까지
                            <span class="input_box"><br><br><br></span>

                        </div>
                        <!-- <?php echo $this->session->userdata('user_idx') ?> -->
                    <input type="button" title="호출 하기" alt="호출 하기" value="호출 하기" class="btn_global" onclick="callDriver()">
                </form>
            <!-- </form> -->
    </div>
<script type="text/javascript">
    function callDriver() {
        $.ajax ({
          type : 'POST',
          url : '/index.php/drive/drivecall',
          data : { departure: $('#start_spot').val(), destination: $('#end_spot').val(), distance: '0', modify: 'asdsa',
                    user_idx: "<?php echo $this->session->userdata('user_idx') ?>"
            },
          // url : '/index.php/drive/call_send_start_end',
          // data : { departure: '부천시 원미구 심곡동 부천대', destination: '서울시 경복궁'},
          dataType : 'json',
          success : function (data) {
             alert("호출 버튼을 누르셨습니다.");
             // location.href="/index.php/drive/cus_wide";
         }
    });
    }
</script>

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
</body>
</html>