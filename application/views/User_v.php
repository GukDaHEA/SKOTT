
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<title>프로필 수정</title>
<link rel="stylesheet" type="text/css" href="/static/css/user.css">
<link href="https://nid.naver.com/favicon_1024.png" rel="apple-touch-icon-precomposed" sizes="1024x1024" />
<script type="text/javascript" src="https://nid.naver.com/js/clickcr.js"></script>
<script type="text/javascript" src="/static/js/lcslog.js"></script>
<script type="text/javascript" src="https://nid.naver.com/inc/common/js/ko/commonUtil.js?20170214"></script>
<script type="text/javascript" src="/static/js/lua.js"></script>
<script type="text/javascript">
	var gnb_option = {
		gnb_service : "nid",
		gnb_template : "gnb_utf8",
		gnb_logout : encodeURIComponent("https://nid.naver.com/user2/help/myInfo.nhn?menu=home"),
		gnb_brightness : 1,
		gnb_one_naver : 1,
		gnb_item_hide_option : 0
	}

	lcs_do();

	function gnbClose(){
		$('#wrap').click(function(e){
			if( !$('#gnb').has(e.target).length ){
				gnbAllLayerClose();
			}
		});
	}
	//120919 win8 이슈 대응 : capslock 자동설정해제
	document.msCapsLockWarningOff = true;
	function setContainerHeight(height) {}
	function clearDocs(){}
</script>
</head>

<body onclick="clearDocs();gnbClose();" id="mainBody">
<div id="wrap">
	<!-- //스킵네비게이션 -->
    <div class="Header">
  <h1 class="Header-logo" alt="SKOTT" title="SKOTT"><a href="/mains"></a></h1>
    <div id="header_info">        
        <div class="search">
            <input type="text" id="form_control" class="search_input" placeholder="원하시는 지역명/관광지명을 입력하세요.">
            <button id="form_control" class="btn_search">찾아보기</button>
        </div>
        <div class="service">
            <ul>
                <li><a class="Gnb-item room-search active" href="/map/map_v">지도보기</a></li>
                <li><a class="Gnb-item room-favorite" style="cursor: pointer">추천코스</a></li>
                <li><a class="Gnb-item add-room" id="map_location" style="cursor: pointer">내 위치</a></li>
                <?php
                if ($this->session->userdata('is_login')){
                ?>
                    <li><a class="Gnb-item login small" style="cursor: pointer" href="/login/logout">로그아웃</a></li>
                    <li><a class="Gnb-item login small" style="cursor: pointer;" href="/user/user"><?php echo $this->session->userdata('name') ?> 님</a></li>
                <?php
                } else {
                ?>
                    <li><a class="Gnb-item login small" style="cursor: pointer" href="/login">로그인</a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div> <br> <br> <br>
	<div id="header">
		<div id="lnb_area">
			<div class="lnb">
	            <ul> 
					<li id="nid"><a href="/user/user" onclick="clickcr(this,'LNB.myinfo','','',event);">회원정보<em></em></a></li>
                    <li id="ntaxi"><a href="/user/user" onclick="clickcr(this,'LNB.myinfo','','',event);">내 택시정보<em></em></a></li>
				</ul>
			</div>
		</div></div>
	<div id="container">
		<!-- CONTENTS -->
		<div id="content">
    <div class="c_header">
        <h2>프로필 수정</h2>
        <p class="contxt">SKOTT의 프로필을 수정 하실 수 있습니다.</p>
    </div>
    <form  method="post" enctype="multipart/form-data" action="/User/user_modify">
            <legend>프로필 수정</legend>
            <table border="0" class="tbl_model">
                <caption><span class="blind">프로필 수정</span></caption>
                <colgroup>
                    <col style="width:22%"><col>
                </colgroup>
                <tr>
                    <th scope="row">
                        <div class="thcell">프로필 사진</div>
                    </th>
                    <td>
                        <div class="tdcell">
                            <div class="profile_photo">
                                <img id="imgThumb" src=<?php if (!$views->picture) {?>"/static/image/default.png"
                                                <?php } else if ($views->picture) {?>"<?php echo $views->picture ;?>"<?php } ?> width="100" height="100">
                            </div>
                            <p class="btn_area_btm">
                                    <!-- <label for="inputImage" class="btn_model"><b id="btnChangeProfile" class="btn2">사진변경</b></label> -->
                                <span>    <input type="file" name="user_upload_file" /> </span>
                                <span><a href="javascript:imgurlDelete();" class="btn_model"><b id="btnDelete" class="btn2">삭제</b></a></span>
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <div class="thcell"><label for="inpNickname">이름</label></div>
                    </th>
                    <td>
                        <div class="tdcell">
                            <p class="contxt_webctrl nickname">
                                <input type="text" name="name" id="name" value="<?php echo $views->name ;?>" style="width:254px">
                                <!-- Enter 입력으로 submit이 되는걸 방지하기 위한 Input -->
                                <input type="text" style="display: none;" >
                            </p>
                        </div>
                    </td>
                <tr>
                    <th scope="row">
                        <div class="thcell"><label for="inpNickname">국적</label></div>
                    </th>
                    <td>
                        <div class="tdcell">
                            <p class="contxt_webctrl nickname">
                                <input type="text" name="nation" id="nation" value="<?php echo $views->nation; ?>" style="width:254px">
                                <!-- Enter 입력으로 submit이 되는걸 방지하기 위한 Input -->
                                <input type="text" style="display: none;" >
                            </p>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="btn_wrap">
                     <input type="submit" name="submit_test" value="적용">
                <!-- <a href="javascript:;" class="btn_model"><b id="btnConfirm" class="btn8">적용</b></a> -->
                <!-- <a href="javascript:;" class="btn_model"><b id="btnCancel" class="btn2">취소</b></a> -->
            </div>
    </form>
</div>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="/static/js/base64.js"></script>
<script type="text/javascript" src="/static/js/profile.js"></script>
</div>
<script type="text/javascript">
var imgurl = (document.getElementById("imgThumb").src);
function imgurlDelete() {
    document.getElementById("imgThumb").src = "/static/image/default.png";
}
</script>
<script type="text/javascript">
var ua = window.navigator.userAgent.toLowerCase();
var cur_container_height = Number(document.getElementById("content").clientHeight);
var min_container_height = 647;
var header_height = 140;
var footer_height = 85;

window.onload = changeContentSize; // Window 창 로드시
window.onresize = changeContentSize; // Window 창 크기를 조정할때마다
$("#content").resize(changeContentSize);

function changeContentSize() {
	cur_container_height = Number(document.getElementById("content").clientHeight);

	var container_height = min_container_height;
	var window_height = Number(document.documentElement.clientHeight) - header_height - footer_height;
	if (window_height > cur_container_height) {
		if (window_height > min_container_height) {
			container_height = window_height;
		}
	} else {
		if (cur_container_height > min_container_height) {
			container_height = cur_container_height;
		}
	}
	
    if (navigator.appName == 'Netscape' && navigator.userAgent.search('Trident') != -1) { // ie11 추가
        document.getElementById("container").style.height = container_height + "px";
    }else if (window.navigator.userAgent.indexOf("MSIE") == -1 || (document.all && window.XMLHttpRequest)) { // ie6 제외
        document.getElementById("container").style.height = container_height + "px";
    } else {
        document.getElementById("container").style.height ="100%";
    }
}

function setContainerHeight(height) {
	if (height >= 0) {
		cur_container_height = height;
	} else {
		cur_container_height = Number(document.getElementById("container").clientHeight);
	}
	
	if(height == -9 || height == 0 || height == "undefined"){ //공지사항 예외처리 //ie7대응
		document.getElementById("container").style.height ="100%";
	}else{
		changeContentSize();
	}
}
</script>	
</div> <!-- wrap finish -->
</div>

</body>
</html>
