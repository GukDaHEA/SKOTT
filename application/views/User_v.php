
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate">
<meta http-equiv="Cache-Control" content="post-check=0, pre-check=0">
<meta http-equiv="Pragma" content="No-Cache">

<title>프로필 수정</title>

<script type="text/javascript" src="/inc/common/js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/static/css/user.css">
<link href="https://nid.naver.com/favicon_1024.png" rel="apple-touch-icon-precomposed" sizes="1024x1024" />
<script type="text/javascript" src="https://nid.naver.com/js/clickcr.js"></script>
<script type="text/javascript" src="/inc/common/js/lcslog.js"></script>
<script type="text/javascript" src="https://nid.naver.com/inc/common/js/ko/commonUtil.js?20170214"></script>
<script type="text/javascript" src="/inc/common/js/lua.js"></script>
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
<meta name="decorator" content="NEW_USER_MYINFO">
</head>

<body onclick="clearDocs();gnbClose();" id="mainBody">
<div id="wrap">
	<!-- //스킵네비게이션 -->
	<div id="header">
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
</div>
		<div id="lnb_area">
			<div class="lnb">
	            <ul> 
					<li id="nid"><a href="/user2/help/myInfo.nhn?lang=ko_KR" onclick="clickcr(this,'LNB.myinfo','','',event);">회원정보<em></em></a></li>
					<li id="security"><a href="/user2/help/myInfo.nhn?m=viewSecurity&lang=ko_KR" onclick="clickcr(this,'LNB.protect','','',event);">보안설정<em></em></a></li>
				</ul>
			</div>
		</div>
<script type="text/javascript">
document.getElementById("nid").className = "selected";

var tagList = "nid security ";
var menu = "";
if(menu == "nid1_sub_m3" || menu.substring(0,4) == "nid2") { 
	menu = "security";
} else if( menu.substring(0,4) == "nid1" ) { 
	menu = "nid"; 
} else if( menu.substring(0,4) == "nid1" ) { 
	menu = "security"; 
} else if(menu == "" || menu == "null" || menu == null || tagList.indexOf(menu) == -1){
	menu = "nid";
} 

showMenu(menu);
function showMenu(subMenu) {
	document.getElementById(subMenu).className = "on";
	
	var otherMenu = tagList.replace(subMenu + " ", "").split(" ");
	for (var i = 0; i < otherMenu.length - 1; i++) {
		document.getElementById(otherMenu[i]).className = "";
	}
}
</script>	</div>

	<div id="container">
		<!-- CONTENTS -->
		<div id="content">
    <div class="c_header">
        <h2>프로필 수정</h2>
        <p class="contxt">SKOTT의 프로필과 별명을 수정 하실 수 있습니다.</p>
    </div>
    <form id="profileForm" method="post" enctype="multipart/form-data">
        <input type="hidden" id="helpToken" name="token_help" value="vQx4b7fSSXhtFtN1" />
        <input type="hidden" id="deleteYn" name="deleteYn" value="N" />
        <input type="hidden" id="ieLessThan9Yn" name="ieLessThan9Yn" value="N" />
        <fieldset>
            <legend>프로필 수정</legend>
            <table border="0" class="tbl_model">
                <caption><span class="blind">프로필 수정</span></caption>
                <colgroup>
                    <col style="width:22%"><col>
                </colgroup>
                <tbody>
                <tr>
                    <th scope="row">
                        <div class="thcell">프로필 사진</div>
                    </th>
                    <td>
                        <div class="tdcell">
                            <div class="profile_photo">
                                <img id="imgThumb" src="https://static.nid.naver.com/images/web/user/default.png" width="100" height="100">
                                <span class="mask"></span>
                            </div>
                            <p class="btn_area_btm">
                                <span class="btn_file">
                                    <label for="inputImage" class="btn_model"><b id="btnChangeProfile" class="btn2">사진변경</b></label>
                                    <input type="file" id="inputImage" name="profileImage"  accept="image/*" />
                                </span>
                                <a href="javascript:;" class="btn_model"><b id="btnDelete" class="btn2">삭제</b></a>
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <div class="thcell"><label for="inpNickname">별명</label></div>
                    </th>
                    <td>
                        <div class="tdcell">
                            <p class="contxt_webctrl nickname">
                                <input type="text" name="nickname" id="inpNickname" value="" style="width:254px">
                                <!-- Enter 입력으로 submit이 되는걸 방지하기 위한 Input -->
                                <input type="text" style="display: none;" >
                            </p>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="btn_wrap">
                <a href="javascript:;" class="btn_model"><b id="btnConfirm" class="btn8">적용</b></a>
                <a href="javascript:;" class="btn_model"><b id="btnCancel" class="btn2">취소</b></a>
            </div>
        </fieldset>
    </form>
</div>
<script type="text/javascript" src="/inc/common/js/base64.js"></script>
<script type="text/javascript" src="/inc/common/js/jquery.form.min.js"></script>
<script type="text/javascript" src="/inc/user/js/profileChange.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var profileInfo = {
            isNicknameChanged : false,
            nickname : "밴댕이",
            defaultImageUrl : "https://static.nid.naver.com/images/web/user/default.png",
            imageUrl : "",
            token : "vQx4b7fSSXhtFtN1",
            id : "zziltongjh",
            lang : "ko_KR",
            deleteYn : "N",
            originImageUrl : "",
            originNickname : "밴댕이"
        };

        var message = {
            maxUploadSizeErrMessage : "최대 파일 업로드 사이즈는 10MB입니다.",
            overTimeReturnErrMessage : "유효 시간이 초과 되었습니다. 다시 시도해 주세요.",
            temporaryAccessErrMessage : "일시적인 오류입니다. 잠시 후 다시 시도해 주세요.",
            confirm : "프로필 변경 사항을 적용하시겠습니까?"
        };

        var url = {
            removeTempImageUrl : "/user2/api/naverProfile.nhn?m=removeTempImageUrl",
            checkImageAndSaveTmep : "/user2/api/naverProfile.nhn?m=checkImageAndSaveTempForUser",
            changeProfile : "/user2/api/naverProfile.nhn?m=changeProfileForUser",
            returnUrl : "L3VzZXIyL2hlbHAvbXlJbmZvLm5obj9sYW5nPWtvX0tS"
        };

        profile.init(profileInfo, message, url);
        profile.run();
    });
</script>
	</div>

<script type="text/javascript" src="/inc/common/js/jquery.resize.js"></script>
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
</script>	</div>
</div>

<script type="text/javascript">
getGNB();

window.onresize = function() {
	setContainerHeight(document.getElementById('content').clientHeight);
}
</script>
</body>
</html>
