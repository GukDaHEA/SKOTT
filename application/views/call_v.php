<head>
<script type="text/javascript" src="/static/js/jquery.toast.min.js"></script> 
    <title>SKOTT - 기사</title>
</head>
    <link rel="stylesheet" type="text/css" href="/static/css/jquery.toast.min4.css" >
<style>
#wrap{position:relative;min-height:80%;background-color: #3e3e3e;margin-top:28%;}
.input_row{position:relative;height:120px;margin:0 0 14px;padding:10px 35px 10px 15px;border:solid 0px #dadada;border-radius:10px;text-align:center;background:#000}.input_row.focus{border:solid 1px #20bc01}.input_box{display:block;overflow:hidden}.int{font-size:15px;line-height:16px;position:relative;z-index:9;width:100%;height:16px;padding:7px 0 6px;color:#000;border:none;background:#fff;-webkit-appearance:none}.lbl{font-size:15px;text-align:center;line-height:16px;position:absolute;z-index:8;top:16px;left:15px;color:#999}.lbl{z-index:10}.wrg{position:absolute;z-index:1000;top:16px;right:13px;display:none;overflow:hidden;width:19px;height:19px;margin:0;padding:0;cursor:pointer;text-indent:-999px;border:0;background-color:transparent;background-position:-1px -263px}
 .login_form{ border:0px;margin-top:15%;}
.btn_global{font-size:20px;font-weight:700;line-height:61px;display:block;width:100%;height:61px;margin:30px 0 13px;padding-top:2px;cursor:pointer;text-align:center;color:#fff;border:none;border-radius:10px;background-color:#4d7e2b;-webkit-appearance:none}
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
    top: 35%;
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
    display:inline;
}
#label2{
    display:none;

}
#label3{
    display:none;
}
#nul {
    background-color:#4d7e2b; 
}
#callist {
    font-size:10px;
    font-weight:bold;
    width:120px;
    line-height:25px;
    cursor:pointer;
    margin-left:34%;
    color:#111111;
    border:none;
    border-radius:10px;
    background-color:#e2e2e2;
    -webkit-appearance:none;
}
</style>
    <!-- Content panel -->
        <div id="wrap">
            <form class="login_form">
                <div class="input_row" id="id_area">
                    <span class="input_box"><br><br><br>
                        <label id="label" class="lbl" id="status" style="font-size:25px;font-weight:bold;top:30%;left:20%"><?php echo $this->session->userdata('car');?><br/><br/><?php echo $this->session->userdata('name')?> 기사님</label>
                    </span> <br>
                    <span class="input_box" id="label2">
                        <label id="label_email_area" class="lbl" id="status" style="font-size:50px;font-weight:bold;top:30%;left:18%">콜 대기중</label>
                        <div class="loading">
                            <div class="loading-dot"></div>
                            <div class="loading-dot"></div>
                            <div class="loading-dot"></div>
                            <div class="loading-dot"></div>
                        </div>
                    </span>
                    <span class="input_box">
                        <label for="email" id="label3" class="lbl" id="status" style="font-size:50px;font-weight:bold;top:30%;left:25%">운행 중</label>
                    </span>
                </div>
                <a href="javascript:doDisplay1();" ><div class="btn_global" id="nul">빈 차</div></a>
                <a href="javascript:doDisplay2();"><div class="btn_global" id="active">운행 중</div></a>
            </form>
            <a href="/drive/callist">
                <input type="button" id="callist" value="▤ 콜 리스트" style="background-color:#000;color:#fff;font-size:17px;font-family:Helvetica">
            </a>    
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
    $.toast('<h4>알람</h4> 이것은 성공 메세지입니다.<br> 블라블라블라', { type: 'success', duration: 3000 } );

    if(result) {
        $.ajax ({
          type : 'POST',
          url : '/index.php/drive/accept_call',
          data : { departure: $('#start_spot').val(), destination: $('#end_spot').val(), distance: '0', modify: 'asdsa'
                    // user_idx: "<?php echo $this->session->userdata('user_idx') ?>"
            },
          dataType : 'json',
          success : function (data) {
             location.href="/index.php/drive/accept_call";
              }
            });
        } else {
        }
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