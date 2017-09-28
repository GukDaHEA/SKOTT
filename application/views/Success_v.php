<head>
      <title>SKOTT - 기사</title>
</head>

<style>

.input_row{position:relative;height:30%;margin:0 0 14px;padding:10px 35px 10px 15px;border:solid 0px #dadada;border-radius:10px;text-align:center;background:#000}.input_row.focus{border:solid 1px #20bc01}.input_box{color:white;display:block;overflow:hidden;margin-top:-30px;}.int{font-size:15px;line-height:16px;position:relative;z-index:9;width:100%;height:16px;padding:7px 0 6px;color:#000;border:none;background:#fff;-webkit-appearance:none}.lbl{font-size:15px;text-align:center;line-height:16px;position:absolute;z-index:8;top:16px;left:15px;color:#999}.lbl{z-index:10}.wrg{position:absolute;z-index:1000;top:16px;right:13px;display:none;overflow:hidden;width:19px;height:19px;margin:0;padding:0;cursor:pointer;text-indent:-999px;border:0;background-color:transparent;background-position:-1px -263px}
.input_row{padding:10px 6px 10px 9px; margin:0;} .login_form{ border:0px;margin-top:15%;}
#div_Map { margin-left:20px; color:#fff;font-weight:bold;font-size:25px;}
.btn_global{font-size:20px;font-weight:700;float:left;line-height:61px;display:block;width:43%;height:61px;margin:30px 0 -10px 20px;padding-top:2px;cursor:pointer;text-align:center;color:#fff;border:none;border-radius:10px;background-color:#4d7e2b;-webkit-appearance:none}.btn_global:active,.btn_global:hover,.btn_global:link{text-decoration:none;color:#fff}
input {font-family:Helvetica,sans-serif;font-size:12px;-webkit-text-size-adjust:none}
.error{font-size:12px;line-height:16px;margin:-2px 0 12px;color:#ff1616}.error .error_info{color:#333}.error strong{font-size:15px;position:relative;top:3px}
.phishing_banner{margin:47px 0 15px;padding:25px 0 31px;border:1px solid #dce6ee;background-color:#e5edf3}.phishing_banner .sp{position:relative;width:396px;height:110px;margin:0 auto}.phishing_banner.bw_crome .sp{background-position:0 -670px}.phishing_banner.bw_safari .sp{background-position:0 -800px}.phishing_banner.bw_firefox .sp{background-position:0 -930px}.phishing_banner.bw_ie,.phishing_banner.toolbar{display:none} @media only screen and (max-device-width:1024px) and (-webkit-min-device-pixel-ratio:1.5),(min--moz-device-pixel-ratio:1.5),(-o-min-device-pixel-ratio:3/2),(min-device-pixel-ratio:1.5) {.phishing_banner.bw_safari .sp {background-position: 0 -790px;}.phishing_banner.bw_firefox .sp {background-position: 0 -910px;}}
input[type=textarea]{background:#000;border:0px;color:white;font-size:20px;}
input[type=submit]{margin-top:50%;}
.btn_global2{
    font-size:20px;font-weight:700;float:left;line-height:61px;display:block;width:91%;height:61px;cursor:pointer;text-align:center;color:#fff;border:none;border-radius:10px;background-color:#4d7e2b;-webkit-appearance:none;position:relative;margin-top:35%;left:5%;
}

</style>
    <!-- Content panel -->
            <form class="login_form" method="POST" action="/drive/suGo" name="theForm">
                    <div class="input_row" id="id_area">
                        <div id="div_Map"> <br><br><?php echo $destination ?></div>
                    </div>
                    
                <input type="text" title="전화" alt="전화하기" value="전 화" class="btn_global" onclick="document.location.href='tel:<?echo $user->phone?>'">
                <a href="sms://<?echo $user->phone?>" style="color:white;text-decoration:none;">
                <input type="text" title="메시지" alt="메시지" value="메시지" class="btn_global">
                </a>
                <div alt="목적지 도착 완료" class="btn_global2" onclick="success()"> 목적지 도착 완료
                </div>
            </form>
            <!-- </form> -->     
    </div>

<script>
function success() {
    var result = confirm("목적지에 도착 하셨나요?");
    if(result) {
        document.theForm.submit();
    } else {

    }
}

function report() {
    var result = confirm("정말 신고 하시겠습니까?");
    if(result) { //yes 
        alert('신고 처리 되었습니다.');
      location.replace('/drive/report');
    }
    else { //no 
    }
}
</script>
</body>
</html>