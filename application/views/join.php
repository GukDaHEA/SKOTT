<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>SKOTT : 회원가입</title>
</head>
<style>

#header{margin:0 10px}#header{position:relative;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;height:168px;padding:62px 0 0}#header .h_logo{line-height:999px;display:block;overflow:hidden;width:240px;height:100px;margin:0 auto;background-position:-1px -1px}#header .lang{position:absolute;top:14px;right:0}
@media only screen and (min-width:1024px){#container,#header{width:768px;margin:0 auto!important;}#content{width:460px;margin:0 auto;}.error_browser p{width:460px;margin:0 auto}} 
@media screen and (min-width:460px){#content{width:460px;margin:0 auto}.error_browser p{width:460px;margin:0 auto}}
.header_area{overflow:hidden;height:45px}.privacy_title{font-size:18px;font-weight:700;line-height:45px;text-align:center;color:#fff;background-color:#01c73c}.content_area{max-width:460px;margin:0 auto;padding:28px 10px 162px;background-color:#fff}
@media only screen and (min-width:1024px){#container,#header{max-width:768px;margin:0 auto!important}.join_content{width:460px;margin:0 auto}#header .lang{right:10px}.ipin_certify_txt{line-height:27px}}
@media screen and (min-width:460px){#container,#header{margin:0 10px}.join_content{width:460px;margin:0 auto}.join_mobile .int_mobile{width:193px}.ipin_certify_txt{line-height:27px}}
.h_logo{background-image:url("/static/image/logo2.gif");background-size: 100% 100%;background-repeat:no-repeat}
.title{margin-bottom:7px}.title p{font-size:13px;line-height:17px;color:#333}.title p .sevice{font-weight:700}a.btn_minor{font-size:13px;line-height:13px;display:inline-block;margin-top:6px;padding-right:11px;text-decoration:none;color:#999;background-position:100% -16px}
.blind{font-size:0;line-height:0;position:absolute;top:0;left:0;visibility:hidden;overflow:hidden;width:1px;height:1px}body{position:relative;background:#f5f6f7}
.join_content{margin-top:100px; width:460px;border:0px;}
#wrap{position:relative;min-height:100%;background-color: #fffeee}
body{position:relative;height:100%;background:#f5f6f7}
#wrap{position:relative;min-height:100%}#container{padding-bottom:200px}
.join_row{position:relative;height:29px;margin:0 0 14px;padding:10px 35px 10px 15px;border:solid 1px #dadada;background:#fff}.input_row.focus{border:solid 1px #20bc01}.input_box{display:block;overflow:hidden}.int{font-size:15px;line-height:16px;position:relative;z-index:9;width:100%;height:16px;padding:7px 0 6px;color:#000;border:none;background:#fff;-webkit-appearance:none}.lbl{font-size:15px;line-height:16px;position:absolute;z-index:8;top:16px;left:15px;color:#999}.lbl{z-index:10}.wrg{position:absolute;z-index:1000;top:16px;right:13px;display:none;overflow:hidden;width:19px;height:19px;margin:0;padding:0;cursor:pointer;text-indent:-999px;border:0;background-color:transparent;background-position:-1px -263px}
.join_form{clear:both; border:0px;margin-top:80px;}
input {font-family:Helvetica,sans-serif;font-size:12px;-webkit-text-size-adjust:none}
.join_row_tb{display:table;width:100%;*display:block}.join_row_tb .join_row{display:table-cell;width:50%;table-layout:fixed;*display:block;*float:left;*width:206px}.join_row_tb .join_sex{border-top:1px solid #f0f0f0;border-right:solid 1px #f0f0f0;*width:205px}
@media screen and (min-width:460px){#container,#header{margin:0 10px}.join_mobile .int_mobile{width:193px;padding:10px;}}
.row_group{zoom:1;margin:10px;border:0px;background:#fffeee}
.int_id,.int_pass,.int_pass_check,.int_pass_check2,.int_pass_step1,.int_pass_step2,.int_pass_step3,.int_pass_step4{padding-right:95px}.ps_box.int_id{background-position:100% -57px}.ps_box.int_pass{background-position:100% -476px}.ps_box.int_pass_step1{background-position:100% -126px}.ps_box.int_pass_step2{background-position:100% -196px}.ps_box.int_pass_step3{background-position:100% -266px}.ps_box.int_pass_step4{background-position:100% -336px}.ps_box.int_pass_check{background-position:100% -525px}.ps_box.int_pass_check2{background-position:100% -406px}html[lang=en] .ps_box.int_pass_step1{background-position:100% -631px}html[lang=en] .ps_box.int_pass_step2{background-position:100% -701px}html[lang=en] .ps_box.int_pass_step3{background-position:100% -771px}html[lang=en] .ps_box.int_pass_step4{background-position:100% -841px}.btn_join{display:block;height:61px;margin:33px 0 19px;margin:10px 0 19px\9;background:#f3753a;*width:460px}.btn_join input{width:100%;height:61px;text-indent:-999em;border:1px solid #1eb702;background:#f3753a 50% 0 no-repeat;-webkit-background-size:108px auto;background-size:108px auto;*border:none;*text-indent:0;*padding-left:900px;-webkit-appearance:none}html[lang=en] .btn_join input{background-position:50% -63px}
.btn_global{font-size:20px;font-weight:700;line-height:61px;display:block;width:100%;height:61px;margin:30px 0 13px;padding-top:2px;cursor:pointer;text-align:center;color:#fff;border:none;border-radius:0;background-color:#f3753a;-webkit-appearance:none}.btn_global:active,.btn_global:hover,.btn_global:link{text-decoration:none;color:#fff}
.join_from{border:0px;}
.join_from .error_ch{margin-bottom:0px}.ps_box{position:relative;display:block;height:27px;background:#fff 100% 0 no-repeat;-webkit-background-size:97px 900px;background-size:97px 900px}.join_from .lbl{font-size:15px;line-height:18px;position:absolute;z-index:9;top:5px;left:0;display:block;color:#999}.join_row .int{font-size:15px;position:relative;z-index:10;width:100%;height:16px;padding:6px 0;border:none;background:#fff;*position:absolute;*top:0;*left:0;apperance:none;-webkit-apperance:none}
.int{font-size:15px;font-weight:700;line-height:16px;position:relative;z-index:9;width:100%;height:16px;padding:7px 0 6px;color:#000;border:none;background:#fff;-webkit-appearance:none}
.join_from .cell{display:table-cell;width:5px;padding-right:10px;text-indent:-999em;background: -94px -575px no-repeat;-webkit-background-size:97px 900px;background-size:97px 900px;*display:block;*float:left;*padding:0}
</style>
<body>
 <div id="wrap">

    <!-- header -->
    <div id="header">
        <h1><a href="/mains" class="h_logo">NAVER</a></h1>
    </div>
    <!-- //header -->
    
    <!-- container -->
    <div id="container">
        
        <!-- content -->
        <div id="content">
            <h2 class="blind">네이버 회원가입</h2>
            <div class="join_content">
                <div class="join_form">
                
                <form id="join_form" method="post" action="/login/join" >
                    <fieldset class="join_from">                        
                        <legend class="blind">회원가입</legend> 
                        <div class="row_group">
                            <?php echo validation_errors(); //validation에 대한 에러 출력?>
                            <div id="idDiv" class="join_row">
                                <span class="ps_box int_id">
                                    <input type="text" id="email" name="email" value="<?php echo set_value('email'); ?>" maxlength="50" autocomplete="off" 
                                    onFocus="toggleLabel('emailLb','email', 'in');"
                                    onBlur="toggleLabel('emailLb','email', 'out');checkId('first')"
                                    placeholder="이메일" class="int"> 
                                    <label id="emailLb" for="email" class="lbl">이메일</label> <button type="button" disabled="" title="delete" class="wrg">삭제</button>
                                </span>
                                <div id="idMsg" class="error" style="display:none">필수 정보입니다.</div>
                            </div>                      
                            <div id="pswd1Div" class="join_row">
                                <!-- [D]normal상태 int_pass / 1단계 사용불가 int_pass_step1 / 2단계 낮음 int_pass_step2 / 3단계 적정 int_pass_step3 / 4단계 높음 int_pass_step4 -->                         
                                <span id="pswd1Img" class="ps_box int_pass">
                                    <input type="password" id="password" name="password" maxlength="20"
                                    onFocus="toggleLabel('pswd1Lb','password','in');"
                                    onBlur="toggleLabel('pswd1Lb','password','out');checkPswd1('check')";                              
                                    onkeyup="checkShiftUp(event);"                              
                                    onkeypress="checkCapslock(event)";
                                    onKeydown="checkShiftDownJoin(event);"                               
                                    placeholder="비밀번호" class="int"> 
                                    <label id="pswd1Lb" for="password" class="lbl">비밀번호</label> <button type="button" disabled="" title="delete" class="wrg">삭제</button>
                                </span>                         
                                <div id="pswd1Msg" class="error" style="display:none">필수 정보입니다.</div>
                            </div>
                            <div id="pswd2Div" class="join_row">
                                <!-- [D]normal상태 int_pass_check / 비밀번호 확인완료 int_pass_check2  -->                            
                                <span id="pswd2Img" class="ps_box int_pass_check">
                                    <input type="password" id="pswd2" name="pswd2" maxlength="20"
                                    onFocus="toggleLabel('pswd2Lb','pswd2','in');"
                                    onBlur="toggleLabel('pswd2Lb','pswd2','out');checkPswd2('check')";
                                    onkeyup="checkShiftUp(event);"                              
                                    onkeypress="checkCapslock2(event)";
                                    onKeydown="checkShiftDown(event);"
                                    placeholder="비밀번호 재확인" class="int"> 
                                    <label id="pswd2Lb" for="pswd2" class="lbl">비밀번호 재확인</label> <button type="button" disabled="" title="delete" class="wrg">삭제</button>
                                </span> 
                                <div id="pswd2Msg" class="error" style="display:none">필수 정보입니다.</div>
                            </div>
                        </div>
                        <div class="row_group">
                            <div id="nmDiv" class="join_row">
                                <span class="ps_box">
                                    <input type="text" id="name" name="name" maxlength="40" value="<?php echo set_value('name'); ?>"
                                    onFocus="toggleLabel('nmLb','name','in');"
                                    onBlur="toggleLabel('nmLb','name','out');checkName('check')"
                                    placeholder="이름" class="int"> 
                                    <label id="nmLb" for="name" class="lbl">이름</label> <button type="button" disabled="" title="delete" class="wrg">삭제</button>
                                </span>
                                <div id="nmMsg" class="error" style="display:none">필수 정보입니다.</div>
                            </div> 
                            <div id="mobDiv" class="join_row" style="display:block">
                                <span class="ps_box"> 
                                    <input type="text" id="phone" name="phone" maxlength="16" value="<?php echo set_value('phone'); ?>"
                                    onFocus="toggleLabel('mobnoLb','phone','in');"
                                    onBlur="toggleLabel('mobnoLb','phone','out');checkMobno('check')"
                                    placeholder="휴대전화번호" class="int">
                                    <label id="phnLb" for="phone" class="lbl">휴대전화번호</label> <button type="button" disabled="" title="delete" class="wrg">삭제</button>
                                </span>
                                <div id="mobnoMsg" class="error" style="display:none">필수 정보입니다.</div> 
                            </div>                        
                <input type="submit" title="회원가입" alt="회원가입" tabindex="12" value="가입하기" class="btn_global" onclick="" target="_blank">
                        </div>
                        
                        </fieldset>
                    </form>  
                    <a name="bottom"></a>                   
                    <div class="error_ch"><span id="joinMsg" class="error" style="display:none">가입정보를 확인해주세요.</span></div>   
                </div>   
            </div>  
        </div>
        <!-- //content -->
    </div>
    <!-- //container -->
</div>
    <!-- //wrap -->
</body>
</html>