<!DOCTYPE html>
<html>
<head>
  <title>
    
  </title>
  <script src="/static/js/juery.bpopup.min.js" type="text/javascript"></script>

        <link rel="stylesheet" type="text/css" href="/static/Semantic/semantic.min.css">
        <script
          src="https://code.jquery.com/jquery-3.1.1.min.js"
          integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
          crossorigin="anonymous">
        </script>
        <script src="/static/Semantic/semantic.min.js"></script>
</head>

    <style type="text/css">

    .BOXA {
/*    border : 1px solid black;*/
    height: 11%;
    background-color: rgba(0,0,0,0.8);
    color : white;
    text-align: center;
    vertical-align: middle;
    font-size: 10pt;
  }

  .map_logo {
/*    border : 1px solid red;*/
    height: 100%;
    width : 15%;
    float : left;
    padding-top : 10px;
  }

  .map_search {
/*    border : 1px solid red;*/
    width : 45%;
    height: 100%;
    float : left;
    padding-top : 30px;
  }

  .map_home, .map_view, .map_location, .map_login {
/*    border : 1px solid red;*/
    width : 10%;
    height: 100%;
    float : left;
    padding-top : 30px;
  }
  .ui.search {
    color : black;
    padding-right : 100px;
  }
  ol {
    list-style: none;
  }

  .map_menu li a {
    color : white;
    text-decoration: none;
  }

  .map_menu li {
    width : 8%;
  }

    .map_menu li a:hover {
    color :#4d7e2b;
  } 
    .ui.search {
    color : white;
    padding-right : 100px;
  }

       @media(max-width: 1025px) {

          .BOXA {
            width : 109%;
          }

          .prompt {
            width : 300px;
          }
       }
    </style>

<body>
<div class = "BOXA">
  <div class = "map_logo"><a href="/mains"><img src="/static/image/header/logo.png"></a></div>
<div class = "map_search"> 
    <div class="ui search">
     관광지&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="ui icon input">
        <input class="prompt" type="text" size ="60" placeholder="Search...">
       <i class="inverted circular search link icon"></i>
      </div>
    </div>

  </div>
<ol class = "map_menu">
  <li class = "map_home"><p><a href="/mains">홈</a></p></li>
  <li class = "map_view"><p><a href="/map/map_v">지도보기</a></p></li>
  <li class = "map_location"><p><a href="#">내위치</a></p></li>
               <?php
                if ($this->session->userdata('is_login')){
                ?>
                    <li class = "map_login"><a href="/Login/logout">로그아웃</a></li>
                    <li class = "map_home"><a href="/User/user"><?php echo $this->session->userdata('name') ?> 님</a></li>
                <?php
                } else {
                ?>
                    <li class = "map_login"><a href="/Login">로그인</a></li>
                <?php
                }
                ?>
  <ol>
</div>
</body>
</html>