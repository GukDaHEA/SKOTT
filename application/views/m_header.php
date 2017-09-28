<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <script
          src="https://code.jquery.com/jquery-3.1.1.min.js"
          integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
          crossorigin="anonymous">
        </script>
</head>
<style type="text/css">
body {
    color: #fff;
    background-color:#9e9e9e;
}
#header { z-index: 1001; position:fixed; background-color: #3e3e3e; width:100%;height:12%;}
#h_logo{display:block;width:100px;height:50px;left:150px;margin:0 auto;background-image:url("/static/image/header/logo.png");background-size: 100% 100%;background-repeat:no-repeat;}

/*
  Menu
*/
nav#slide-menu {
    position: fixed;
    top: 0;
    left: -150px;
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

body.menu-active div#content { left: 150px; border-radius: 7px 0 0 7px; }
body.menu-active div#content .menu-trigger { left: 170px; }
</style>
<body>
<!-- Navigation -->
    <nav id="slide-menu">
        <ul>
            <li>내 기록</li><br>
            <li>개인 정보</li><br>
            <li>설정</li><br>
               <?php
                if ($this->session->userdata('is_login')){
                ?>
                    <li><a href="/drive/call_login" style="color:white;text-decoration:none;">로그아웃</a></li>
                <?php
                } else {
                ?>
                    <li><a href="/drive/logout" style="color:white;text-decoration:none;">로그인</a></li>
                <?php
                }
                ?>
        </ul>
    </nav>
    <div id="content">
	    <div id="header">
	        <div class="menu-trigger"><img src="/static/image/menu.png"/></div>
	        <a href="/mains" id="h_logo" tabindex="2"></a>
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