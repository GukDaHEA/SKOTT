<head>
<script type="text/javascript" src="/static/js/jquery.toast.min.js"></script> 
    <title>SKOTT - 기사</title>
</head>
    <link rel="stylesheet" type="text/css" href="/static/css/jquery.toast.min4.css" >
<style>
#wrap{position:relative;min-height:83%;background-color: #3e3e3e;margin-top:28%;}
.input_row{position:relative;height:120px;margin:0 0 14px;padding:10px 35px 10px 15px;border:solid 0px #dadada;border-radius:10px;text-align:center;background:#000}.input_row.focus{border:solid 1px #20bc01}
.input_box{display:block;overflow:hidden;color:#8a8a8a;}.int{font-size:15px;line-height:16px;position:relative;z-index:9;width:100%;height:16px;padding:7px 0 6px;color:#000;border:none;background:#fff;-webkit-appearance:none}
 .login_form{ border:0px;margin-top:15%;}
.btn_global{font-size:20px;font-weight:700;line-height:61px;display:block;width:80%;height:61px;margin:30px 10% 13px;padding-top:2px;cursor:pointer;text-align:center;color:#fff;border:none;border-radius:10px;background-color:#4d7e2b;-webkit-appearance:none}
input {font-family:Helvetica,sans-serif;font-size:12px;-webkit-text-size-adjust:none}
.error{font-size:12px;line-height:16px;margin:-2px 0 12px;color:#ff1616}.error .error_info{color:#333}.error strong{font-size:15px;position:relative;top:3px}

/* 밀어서 잠금해제 스타일*/
input[type="range"] {
    width: 95%;
    left: 2%;
    margin-top:10%;
    /*margin-top:20%;*/
    background: -webkit-gradient(linear, 0 0, 0 bottom, from(#000), to(#1f1f1f));
    -webkit-appearance: none;
    border-radius: 10px;
    padding: 5px;
    transition: opacity 0.5s;
    position: relative;
}

input[type="range"]::-webkit-slider-thumb {
    -webkit-appearance: none;
    border-radius: 10px;
    background: -webkit-linear-gradient(top, #fafafa 0%,#dedede 50%,#cfcfcf 51%,#a3a3a3 100%);
    z-index: 1;
    width: 75px;
    position: relative;
    height: 50px;
}

input[type="range"]:before {
    content: "밀어서 퇴근";
    color: #8a8a8a;
    position: absolute;
    left: 110px;
    top: 10px;
    z-index: 1;
    font-size: 32px;
}

input[type="range"]::-webkit-slider-thumb:before {
    color: #8a8a8a;
    position: absolute;
    left: 5px;
    top: -10px;
    z-index: 1;
    font-size: 56px;
    font-weight: bold;
    content: "→";
}

/* 로딩 아이콘 css*/
.loading {
    background: rgba(20, 20, 20, 0.9);
    position:relative;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    top:20px;
    left: 40%;
  
    -webkit-box-shadow: inset 0 0 5px #000, 0 1px 1px rgba(255, 255, 255, 0.1);
    -moz-box-shadow: inset 0 0 5px #000, 0 1px 1px rgba(255, 255, 255, 0.1);
    -ms-box-shadow: inset 0 0 5px #000, 0 1px 1px rgba(255, 255, 255, 0.1);
    -o-box-shadow: inset 0 0 5px #000, 0 1px 1px rgba(255, 255, 255, 0.1);
    box-shadow: inset 0 0 5px #000, 0 1px 1px rgba(255, 255, 255, 0.1);
}

.loading-dot {
    float: left;
    width: 8px;
    height: 8px;
    margin: 0 4px;
    background: white;
  
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
  
    opacity: 0;
  
    -webkit-box-shadow: 0 0 2px black;
    -moz-box-shadow: 0 0 2px black;
    -ms-box-shadow: 0 0 2px black;
    -o-box-shadow: 0 0 2px black;
    box-shadow: 0 0 2px black;
  
    -webkit-animation: loadingFade 1s infinite;
    -moz-animation: loadingFade 1s infinite;
    animation: loadingFade 1s infinite;
}

.loading-dot:nth-child(1) {
    -webkit-animation-delay: 0s;
    -moz-animation-delay: 0s;
    animation-delay: 0s;
}

.loading-dot:nth-child(2) {
    -webkit-animation-delay: 0.1s;
    -moz-animation-delay: 0.1s;
    animation-delay: 0.1s;
}

.loading-dot:nth-child(3) {
    -webkit-animation-delay: 0.2s;
    -moz-animation-delay: 0.2s;
    animation-delay: 0.2s;
}

.loading-dot:nth-child(4) {
    -webkit-animation-delay: 0.3s;
    -moz-animation-delay: 0.3s;
    animation-delay: 0.3s;
}

@-webkit-keyframes loadingFade {
    0% { opacity: 0; }
    50% { opacity: 0.8; }
    100% { opacity: 0; }
}

@-moz-keyframes loadingFade {
    0% { opacity: 0; }
    50% { opacity: 0.8; }
    100% { opacity: 0; }
}

@keyframes loadingFade {
    0% { opacity: 0; }
    50% { opacity: 0.8; }
    100% { opacity: 0; }
}
a:link { color: red; text-decoration: none;}
 a:visited { color: black; text-decoration: none;}
 a:hover { color: blue; text-decoration: underline;}
 a:focus {  text-decoration: none; }

#label{
    display:inline;width:60%;font-size:30px;font-weight:bold;text-align:center;top:0%;
}
#label2{
    display:none;
    width:50%;font-size:50px;font-weight:bold;text-align:center;top:0%;
}
#label3{
    display:none;
    width:60%;font-size:30px;font-weight:bold;margin-left:20%;margin-right:20%;top:0%;
}
#nul {
    background-color:#4d7e2b; 
}
#calli {
    position:relative;
    width:10%;
    margin-left:45%;
    margin-right:45%;
}
#callist {
    font-size:10px;
    font-weight:bold;
    width:120px;
    line-height:25px;
    margin-left:-40px;
    cursor:pointer;
    color:#111111;
    border:none;
    border-radius:10px;
    background-color:#e2e2e2;
    -webkit-appearance:none;
}
#number {
    width:20px;
    height:20px;
    color:#fff;
    position:relative;
    left:70px;
    top:10px;
    background-color: red;
    border-radius:10px;
    border:0px;
    font-size:15px;
    font-weight: bold;
    z-index:1000;
}
</style>
    <!-- Content panel -->
        <div id="wrap">
            <form class="login_form">
                <div class="input_row" id="id_area">
                    <span class="input_box"> <br>
                        <p id="label" style="line-height:100%"><?php echo $this->session->userdata('car');?><br><?php echo $this->session->userdata('name')?> 기사님
                        </p>
                    </span>
                    <span class="input_box" id="label2">
                        <label id="label_email_area" id="status">콜 대기중</label>
                        <div class="loading">
                            <div class="loading-dot"></div>
                            <div class="loading-dot"></div>
                            <div class="loading-dot"></div>
                            <div class="loading-dot"></div>
                        </div>
                    </span>
                    <span class="input_box">
                        <label for="email" id="label3" class="lbl" id="status" style="font-size:50px;font-weight:bold;left:25%">운행 중</label>
                    </span>
                </div>
                <a href="javascript:doDisplay1();" ><div class="btn_global" id="nul">빈 차</div></a>
                <a href="javascript:doDisplay2();"><div class="btn_global" id="active">운행 중</div></a>
            </form>
                <div id="calli">
                    <input type="button" id="number" value="0"></button>
                    <input type="button" id="callist" onclick="callist()" value="▤ 콜 리스트" style="background-color:#000;color:#fff;font-size:17px;font-family:Helvetica">
                </div>
            <input type="range" class="slideToUnlock" value="0" max="100" onchange="RangeSlider(this)"/>
        </div>
        <!-- //content -->
    </div>
<!-- <META HTTP-EQUIV="refresh" CONTENT="15"> -->

<!-- 빈차, 운행중, 퇴근 전환 -->
<script type="text/javascript">
    function doDisplay1(){
    document.getElementById("label").style.display='none';
    document.getElementById("label3").style.display='none';
    document.getElementById("label2").style.display='inline';
    document.getElementById("nul").style.backgroundColor='#004400';
    document.getElementById("active").style.backgroundColor='#4d7e2b';

    cnt = 0;
    $(document).ready(function(){
        timerld = setInterval("acceptCalls()", 1000);
        });
    }

    function doDisplay2(){
    document.getElementById("label").style.display='none';
    document.getElementById("label2").style.display='none';
    document.getElementById("label3").style.display='inline';
    document.getElementById("nul").style.backgroundColor='#4d7e2b';
    document.getElementById("active").style.backgroundColor='#004400';

    clearInterval(timerld);
    }

    function acceptCalls() {
    // var result = confirm("<?php echo $departure ?> 에서 <?php echo $destination?> 까지 (<?php echo $distance ?>) 가는 콜이 있습니다. 수락하시겠습니까?");
    $.toast.config.width = 300;
    document.getElementById('number').value= cnt;
                 $.ajax ({
                    type : 'POST',
                    url : '/index.php/drive/waitCall_drive',
                    data : {  },
                    dataType : 'json',
                    success : function (data) {
                        cnt++;
                        $.toast('<h2>알림</h2>  '+ data.departure +' 에서 '+data.destination + '까지 '+ data.distance +' 가는 콜이 있습니다.', { type: 'success', duration: 7000 } );
                    }
                 });
    // if(result) {        
    //     $.ajax ({
    //       type : 'POST',
    //       url : '/index.php/drive/accept_call',
    //       data : { departure: $('#start_spot').val(), destination: $('#end_spot').val(), distance: '0', modify: 'asdsa'
    //                 // user_idx: "<?php echo $this->session->userdata('user_idx') ?>"
    //         },
    //       dataType : 'json',
    //       success : function (data) {
    //          location.href="/index.php/drive/accept_call";
    //           }
    //         });
    //     } else {
    //     }
    }

function callist() {
    cnt = 0;
    location.href="/drive/callist";
}

// <!-- 버튼 클릭시 화면 전환 -->
function RangeSlider() {
    theRange = document.querySelector("input[type=\"range\"]").value;
    if(theRange == 100) {
        theRange = 0;
        document.querySelector("input[type=\"range\"]").value = theRange;
        document.getElementById("label").style.display='inline';
        document.getElementById("label3").style.display='none';
        document.getElementById("label2").style.display='none';
        document.getElementById("nul").style.backgroundColor='#4d7e2b';
        document.getElementById("active").style.backgroundColor='#4d7e2b';

        clearInterval(timerld);
        } else {
            document.querySelector("input[type=\"range\"]").value = 0;
        }
    }
</script>
</body>
</html>