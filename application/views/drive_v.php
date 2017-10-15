
<head>
   <title>SKOTT - 호출</title>
</head>

<style>
.input_row{position:relative;height:200px;margin:0 0 14px;padding:10px 35px 10px 15px;border:solid 0px #dadada;border-radius:10px;text-align:center;background:#000}.input_row.focus{border:solid 1px #20bc01}.input_box{color:white;display:block;overflow:hidden;margin-top:-30px;}.int{font-size:15px;line-height:16px;position:relative;z-index:9;width:100%;height:16px;padding:7px 0 6px;color:#000;border:none;background:#fff;-webkit-appearance:none}.lbl{font-size:15px;text-align:center;line-height:16px;position:absolute;z-index:8;top:16px;left:15px;color:#999}.lbl{z-index:10}.wrg{position:absolute;z-index:1000;top:16px;right:13px;display:none;overflow:hidden;width:19px;height:19px;margin:0;padding:0;cursor:pointer;text-indent:-999px;border:0;background-color:transparent;background-position:-1px -263px}
.input_row{padding:10px 6px 10px 9px;} .login_form{ border:0px; margin-top:35%;}
.btn_global{font-size:20px;font-weight:700;line-height:61px;display:block;width:100%;height:61px;margin:30px 0 13px;padding-top:2px;cursor:pointer;text-align:center;color:#fff;border:none;border-radius:10px;background-color:#4d7e2b;-webkit-appearance:none}.btn_global:active,.btn_global:hover,.btn_global:link{text-decoration:none;color:#fff}
input {font-family:Helvetica,sans-serif;font-size:12px;-webkit-text-size-adjust:none}
input[type=submit]{margin-top:50%;}

/* 
    loader
*/
.loader {
    display: none;
    background: #000;
    opacity: 0.7;
    filter: alpha(opacity=70); /* For IE8 and earlier */
    background: radial-gradient(#222, #000);
    bottom: 0;
    left: 0;
    overflow: hidden;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 99999;
}

.loader-inner {
    bottom: 0;
    height: 60px;
    left: 0;
    margin: auto;
    position: absolute;
    right: 0;
    top: 0;
    width: 100px;
}

.loader-line-wrap {
    animation: 
        spin 2000ms cubic-bezier(.175, .885, .32, 1.275) infinite
    ;
    box-sizing: border-box;
    height: 50px;
    left: 0;
    overflow: hidden;
    position: absolute;
    top: 0;
    transform-origin: 50% 100%;
    width: 100px;
}
.loader-line {
    border: 4px solid transparent;
    border-radius: 100%;
    box-sizing: border-box;
    height: 100px;
    left: 0;
    margin: 0 auto;
    position: absolute;
    right: 0;
    top: 0;
    width: 100px;
}
.loader-line-wrap:nth-child(1) { animation-delay: -50ms; }
.loader-line-wrap:nth-child(2) { animation-delay: -100ms; }
.loader-line-wrap:nth-child(3) { animation-delay: -150ms; }
.loader-line-wrap:nth-child(4) { animation-delay: -200ms; }
.loader-line-wrap:nth-child(5) { animation-delay: -250ms; }

.loader-line-wrap:nth-child(1) .loader-line {
    border-color: hsl(0, 80%, 60%);
    height: 90px;
    width: 90px;
    top: 7px;
}
.loader-line-wrap:nth-child(2) .loader-line {
    border-color: hsl(60, 80%, 60%);
    height: 76px;
    width: 76px;
    top: 14px;
}
.loader-line-wrap:nth-child(3) .loader-line {
    border-color: hsl(120, 80%, 60%);
    height: 62px;
    width: 62px;
    top: 21px;
}
.loader-line-wrap:nth-child(4) .loader-line {
    border-color: hsl(180, 80%, 60%);
    height: 48px;
    width: 48px;
    top: 28px;
}
.loader-line-wrap:nth-child(5) .loader-line {
    border-color: hsl(240, 80%, 60%);
    height: 34px;
    width: 34px;
    top: 35px;
}

@keyframes spin {
    0%, 15% {
        transform: rotate(0);
    }
    100% {
        transform: rotate(360deg);
    }
}
/* --- 로딩 아이콘 ---*/

    
.start_end {
    color :white;
    margin-top: -50px;
}

.start_content, .end_content {
    font-size: 22px;
}
#start_spot, #end_spot, #totalTime_spot, #totalDistance_spot, #taxiFare_spot{
    background-color: #000;
    color:#fff;
    border:0;
    font-size: 15px;
    text-align: center;
    width:100%;
    font-weight: bold;
}
</style>

    <!-- Content panel -->
    
        <form class="login_form" name="theForm" method="POST" action="/drive/cus_wide">
            <div class="input_row" id="id_area">
                <span class="input_box"><br><br><br>
                <input type="text" name="start_spot" id="start_spot" wrap="virtual" value="<?=$start?>">에서
                <input type="text" name="end_spot" id="end_spot" wrap="virtual" value="<?=$end?>">까지 <br>
    소요시간 : 약  <input type="text" id="totalTime_spot" wrap="virtual" value="<?=$totalTime?>">,
       거리 : 약  <input type="text" id="totalDistance_spot" wrap="virtual" value="<?=$totalDistance?>">
    예상요금 : 약  <input type="text" name="taxiFare" id="taxiFare_spot" value="<?=$taxiFare?>">
                <input type="hidden" name="Slat" id="Slat_spot" value="<?=$Slat?>">
                <input type="hidden" name="Slon" id="Slon_spot" value="<?=$Slon?>">
                <input type="hidden" name="Elat" id="Elat_spot" value="<?=$Elat?>">
                <input type="hidden" name="Elon" id="Elon_spot" value="<?=$Elon?>">
                <input type="hidden" name="call_id" id="call_id" >
                <input type="hidden" name="driveIdx" id="driveIdx" >
                <span class="input_box"><br><br><br></span>
            </div>
            <input type="button" title="호출 하기" alt="호출 하기" value="호출 하기" class="btn_global" onclick="callDriver()">
        </form>
        <!-- </form> -->
    </div>
    <div class="loader">
        <div class="loader-inner">
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    function callDriver() {
        $.ajax ({
          type : 'POST',
          url : '/index.php/drive/drivecall',
          data : { departure: $('#start_spot').val(), destination: $('#end_spot').val(), modify: 'asdsa',
                    user_idx: "<?php echo $this->session->userdata('user_idx') ?>", totalTime: $('#totalTime_spot').val(),
                    totalDistance: $('#totalDistance_spot').val(), taxiFare: $('#taxiFare_spot').val(), Slat: $('#Slat_spot').val(),
                    Slon: $('#Slon_spot').val(), Elat: $('#Elat_spot').val(), Elon: $('#Elon_spot').val()
            },
          dataType : 'json',
          success : function (data) {
            alert("호출 버튼을 누르셨습니다. 잠시만 기다려주세요.");
            document.getElementsByClassName('loader')[0].style.display='block';
             // document.theForm.submit();
             idxx = data.call_id;
             document.getElementById('call_id').value= idxx;

            $(document).ready(function(){
                timerld = setInterval("waitCall()", 1000);
            });
    
          }
        });
    }

    function waitCall() {
                 $.ajax ({
                    type : 'POST',
                    url : '/index.php/drive/waitCall',
                    data : { call_id: $('#call_id').val() },
                    dataType : 'json',
                    success : function (data) {
                        document.getElementById('driveIdx').value= data.driveIdx;
                        if (!data.driveIdx){
                            
                        } else {
                            document.theForm.submit();
                            clearInterval(timerld);
                        }
                    }
                 });
    }
</script>
</body>
</html>