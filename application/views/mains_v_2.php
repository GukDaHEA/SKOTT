<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.cycle2.js"></script>

    <title>media</title>

    <style>            
        .Header:after {
            clear: both;
        }

        .Header li {
            margin: 10px 30px 0 0;
        }

        .Header:before, .Header:after {
            content: " ";
            display: table;
        }

        .Header:after {
            clear: both;
        }

        .Header-logo {
            float: left;
            margin-left: 0px;
            margin-top: 20px;
        }

            .Header-logo > a {
                display: inline-block;
                width: 150px;
                height: 70px;
                min-height: 28px;
                background-image: url(/static/image/logo2.gif);
                background-size: 100% 100%;
                background-repeat: no-repeat;
                margin-left: 20px;
            }


        .Gnb {
            float: right;
        }

        .Gnb-main {
            float: left;
            margin: 0 15px;
        }

            .Gnb-main li {
                margin: 8px;
            }

            .Gnb-main:before,
            .Gnb-main:after {
                content: " ";
                display: table;
            }

            .Gnb-main:after {
                clear: both;
            }

            .Gnb-main:before, .Gnb-main:after {
                content: " ";
                display: table;
            }

            .Gnb-main:after {
                clear: both;
            }

            .Gnb-main > li {
                float: left;
                height: 40px;
                list-style: none;
            }

                .Gnb-main > li .small {
                    font-size: 12px;
                }

        .Gnb-item {
            display: inline-block;
            position: relative;
            height: 62px;
            /*위에 언더바 길이*/
            padding: 0 3px;
            margin-top: 5px;
            font-size: 14px;
            line-height: 60px;
            text-decoration: none;
            color: #585858;
        }


            .Gnb-item:hover {
                color: #f3753a;
            }

            .Gnb-item.active, .Gnb-item:active {
                font-weight: 700;
            }

                .Gnb-item.active:before {
                    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    border-bottom: 2.5px solid #f3753a;
                }
        /*-----------------------------------------------------------------------------*/
        body, h1, h2, h3, h4, th, td, input, button {
            font-size: 12px;
            line-height: 1.5;
            font-family: "돋움",dotum,sans-serif;
            color: #333;
        }



        header .logo {
            border: 5px solid #cccccc;
            width: 100px;
            height: 20px;
            line-height: 20px;
            margin: 40px;
            text-align: center;
        }


        header li {
            float: right;
            list-style: none;
            margin-right: 20px;
            font-size: 1.5em;
        }

        header a {
            color: #f3753a;
            text-decoration: none;
        }

            header a:hover {
                text-decoration: underline;
            }

        header .image {
            width: 1000px;
            height: 350px;
            margin: 50px auto;
            font-size: 20px;
            color: #f3753a;
            
        }

        header .lnb {
            overflow: hidden;
            width: 100%;
            height: 40px;
            padding: 5px;
            font-size: 30px;
        }


        /*.background {
            width: 100%;
            height: 600px;
            margin-top: 0;
            background: url(/static/image/taxi.jpg) no-repeat left top;
            background-size: 100% 100%; /*야호 했당*/
        }
        */

                .cycle-slideshow, .cycle-slideshow * {-webkit-box-sizing:border-box; -moz-box-sizing:border-box;
            box-sizing: border-box;}
            .cycle-slideshow { height:500px; width: 500px; min-width: 200px; max-width: 1000px; margin: 10px auto; padding:0; position: relative;}
            .cycle-slideshow div.slide { width: 100%; height:100%;}
            .cycle-slideshow img {
                position: absolute; top: 0;  left: 0;
                width: 100%; padding: 0; display: block;
            }
            .cycle-slideshow img:first-child{
                position: static; z-index: 100;
            }
            .cycle-pager {
                text-align: center; width: 100%; z-index: 500; position: absolute; bottom:2px; overflow: hidden;
            }
            .cycle-pager span {
                font-family: arial; font-size: 50px; width: 16px;  height: 16px; 
                display: inline-block; color: #ddd; cursor: pointer;
            }
            .cycle-pager span.cycle-pager-active {color:#D69746;}
            .cycle-pager >* { cursor: pointer;} 

        
        /*-----------------------------------------------------------------------------------------------*/
        #content {
            background-color: rgba(0,0,0,.6);
            margin: auto;
        }

        #content .section1 {
            overflow: hidden;
            /*width: 900px;*/
            height: 100px;
            /*margin-left: 25%;
            margin-right: 25%;*/
            /*border:1px solid #cccccc;*/
        }

        /*#content .section1 div {
            width:100%;
            height:50px; float:left; line-height:50px; text-align:center;
            border:1px solid #cccccc;
            box-sizing:border-box;
        }*/

        #content .search {
            margin: 0 25% ;               
        }

        .form_control {            
            font-size: 1.7em;
            border: 2px solid #f3753a;           
            height: 7vh;            
            height: 50px;            
        }

        

        .search input {
            margin-top: 6px;
            padding: 5px;
            float: left;
            width: 70%;
            margin: 0 auto;
            border-right: none;
            border-radius: 5px 0 0 5px;
            color: #e2e2e2;
            text-indent: 10px
        }

            .search input:focus {
                color: black;
            }

        .search button {
            /*width:20%;*/
            border-left: none;
            width: 30%;
            height: 50px;
            background-color: #f3753a;
            border-radius: 0 5px 5px 0;
            border: 0;
            color: white;
            font-weight: bold;
        }

            .search button:hover {
                background-color: #d16126;
            }
        /*------------------------------------------------------------------------------------------------------*/
        body {
            margin: 0;
        }

        html {
            box-sizing: border-box;
        }

        a {
            background-color: transparent;
        }

        *, ::before, ::after {
            box-sizing: inherit;
        }

        .ThemeSearch-contents__wrap {
            width: 990px;
            margin-left: -30px;
        }

        .ThemeSearch-contents {
            width: 960px;
            padding-bottom: 150px;
            margin: 0 auto;
        }

        .ThemeSearch {
            width: 100%;
        }

        .container {
            margin-top: 0px;
        }

        .wrap {
            overflow: hidden;
            width: 100%;
            min-width: 960px;
        }

        body, html {
            width: 100%;
            height: 100%;
        }

        html {
            font-family: sans-serif;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        button, html, input, select, table, textarea {
            outline: 0;
            font-family: "Nanum Gothic","Malgun Gothic","돋움",Dotum,Helvetica,"Apple SD Gothic Neo",Sans-serif;
            font-size: 13px;
        }

        a {
            text-decoration: none;
        }

        .ThemeSearch-item {
            display: inline-block;
            overflow: hidden;
            position: relative;
            margin-top: 30px;
            margin-left: 30px;
            text-align: center;
            cursor: pointer;
        }

        .ThemeSearch-item__image {
            width: 300px;
            height: 300px;
            background-size: 100% 100%;
            transition: transform .3s ease-in-out;
        }
            /*.ThemeSearch-item__image:hover {
            transition: transform .3s ease-in-out;
        }*/


            .ThemeSearch-item__image.is-officetel {
                background-image: url(/static/image/bridge.jpg);
            }

        .ThemeSearch-item__mask {
            position: absolute;
            top: 0px;
            width: 100%;
            height: 100%;
            background-color: #2a2a2a;
            transition: transform .3s ease-in-out;
            opacity: 0.1;
            filter: alpha(opacity=20);
        }

            .ThemeSearch-item__mask:hover {
                transition: transform .3s ease-in-out;
                opacity: 0.4;
                filter: alpha(opacity=40);
            }

        .ThemeSearch-item__typo {
            position: absolute;
            top: 96px;
            width: 100%;
            color: #fff;
        }

        h1, h2, h3, h4, h5, h6, p {
            margin: 0;
        }

        .ThemeSearch-item__title {
            color: #FFF;
            font-size: 24px;
        }

            .ThemeSearch-item__title:hover {
                font-size: 30px;
            }

        .ThemeSearch-item__line {
            width: 46px;
            height: 1px;
            background-color: #fff;
            margin: 23px auto;
        }

        .ThemeSearch-item__image.is-direct {
            background-image: url(/static/image/photo.jpg);
        }

        .ThemeSearch-item__image.is-parking {
            background-image: url(/static/image/photo2.jpg);
        }

        .ThemeSearch-item__image.is-pano {
            background-image: url(/static/image/photo3.jpg);
        }

        .ThemeSearch-item__image.is-guarantee {
            background-image: url(/static/image/changdeokgung.jpg);
        }

        .ThemeSearch-item__image.is-pet {
            background-image: url(/static/image/gyeongbokgung.jpg);
        }

            
        .title {
            z-index: 10;
            position: absolute;
            left: 50%;
            margin-top: 250px;
            transform: translateX(-50%) translateY(-40%);
            font-family: "Montserrat";
            text-align: center;
            width: 60%;
        }

            .title h1 {
                position: relative;
                color: #000000;
                font-weight: 300;
                font-size: 46px;
                padding: 0;
                margin: 0;
                line-height: 1;
            }

            .title h2 {
                font-weight: 600;
                font-size: 60px;
                padding: 0;
                margin: 0;
                line-height: 1;
            }

            .title h3 {
                font-weight: 200;
                font-size: 20px;
                padding: 0;
                margin: 0;
                line-height: 2;
                color: #5e7283;
                letter-spacing: 2px;
            }

            .title p {
                font-weight: 200;
                font-size: 16px;
                color: #5e7283;
            }
            @media screen and (max-device-width: 450px) {
            body {
                background-color: #c19c9c;
            }
            .search input {
                text-indent: 0px;   
            }
        }

        }
    </style>
</head>
<body>
    <!-- <div class="body_main">
        <div class="background_main"></div>
        <div class="title">
            <h3>PLASM.it - 2017</h3>
            <h1>THIS IS SKOTT</h1>
            <h2>BUCHEON UNIVERSITY</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere ad saepe quo, neque facilis, eum veritatis ut odio assumenda voluptatibus architecto ipsa, 
                ratione ipsum culpa. Voluptas quisquam beatae, quod porro.
            </p>
        </div>
    </div> -->
    <div class="Header">
        <h1 class="Header-logo" alt="SKOTT" title="SKOTT"><a href="/mains"></a></h1>
        <div class="Gnb">
            <ul class="Gnb-main">
                <li><a class="Gnb-item room-search active" href="/map/map_v">지도보기</a></li>
                <li><a class="Gnb-item room-favorite " href="/">추천코스</a></li>
                <li><a class="Gnb-item add-room" style="cursor: pointer">내 위치</a></li>
                <?php
                if ($this->session->userdata('is_login')){
                ?>
                    <li><a class="Gnb-item login small" style="cursor: pointer" href="/Login/logout">로그아웃</a></li>
                    <li><a class="Gnb-item login small" style="cursor: pointer;" href="/User/user"><?php echo $this->session->userdata('name') ?> 님</a></li>
                <?php
                } else {
                ?>
                    <li><a class="Gnb-item login small" style="cursor: pointer" href="/Login">로그인</a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
    <header>
        <div class="background">
            <div class="image">
                
                <div class="cycle-slideshow"
                     data-cycle-fx=scrollHorz
                   data-cycle-timeout=2000>
                   <div class="cycle-pager"></div>
                   
                    <img src="/static/image/gyeongbokgung.jpg">
                    <img src="http://malsup.github.io/images/p2.jpg">
                    <img src="http://malsup.github.io/images/p3.jpg">
                    <img src="http://malsup.github.io/images/p4.jpg">
                </div>


            </div>
            <div id="content">
                <div class="section1">
                    <div class="search">
                        <input type="text" class="form_control" id="search input"  placeholder="원하시는 지역명/관광지명을 입력하세요.">
                        <button class="form_control" id="search button">찾아보기</button>
                    </div>
                </div>
            </div>
            
        </div>
    </header>
</body>
<body class="dabang">
    <div class="wrap">
        <div id="home-component">
            <div class="container">
                <div class="ThemeSearch">
                    <div class="ThemeSearch-contents">
                        <div class="ThemeSearch-contents__wrap">
                            <a class="ThemeSearch-item" href="/detail/detail/3">
                                <!-- 정환오빠 페이지 -->

                                <div class="ThemeSearch-item__mask">
                                    <!-- onmouseover="hide(this.id)" id="mask_1_hide" style="background-color: #5D5D5D; opacity: 0.5; display: block"   ThemeSearch-item__mask에 스타일 -->
                                </div>
                                <div class="ThemeSearch-item__image is-pet">
                                    <!-- onmouseover="show(this.id)" id="mask_1" 위에서 내용지움  -->
                                </div>
                                <div class="ThemeSearch-item__typo">
                                    <h3 class="ThemeSearch-item__title" style="color: #FFF">★경복궁</h3>
                                    <div class="ThemeSearch-item__line">
                                    </div>
                                    <p class="ThemeSearch-item__desc">
                                        <span>조선 왕조의 법궁, 조선의 중심지</span>
                                        <br><span>찾아보기</span>
                                    </p>
                                </div>

                                <!-- <script>
                                    function show(id) {

                                        document.getElementById(id+'_hide').style.display = "block";
                                    }

                                    function hide(id) {
                                        document.getElementById(id).style.display = "none";
                                        $('#id').css('width', '200px');

                                    }

                                </script> -->
                            </a><a class="ThemeSearch-item">
                                <div class="ThemeSearch-item__image is-guarantee">
                                </div>
                                <div class="ThemeSearch-item__mask">
                                </div>
                                <div class="ThemeSearch-item__typo">
                                    <h3 class="ThemeSearch-item__title">★창덕궁</h3>
                                    <div class="ThemeSearch-item__line">
                                    </div>
                                    <p class="ThemeSearch-item__desc">
                                        <span>자연경관과 함께</span>
                                        <br>
                                        <span>찾아보기</span>
                                    </p>
                                </div>
                            </a><a class="ThemeSearch-item">
                                <div class="ThemeSearch-item__image is-pano">
                                </div>
                                <div class="ThemeSearch-item__mask">
                                </div>
                                <div class="ThemeSearch-item__typo">
                                    <h3 class="ThemeSearch-item__title">★경희궁</h3>
                                    <div class="ThemeSearch-item__line">
                                    </div><p class="ThemeSearch-item__desc">
                                        <span>조용하게 산책하는</span>
                                        <br><span>찾아보기</span>
                                    </p>
                                </div>
                            </a><a class="ThemeSearch-item">
                                <div class="ThemeSearch-item__image is-parking">
                                </div>
                                <div class="ThemeSearch-item__mask">
                                </div>
                                <div class="ThemeSearch-item__typo">
                                    <h3 class="ThemeSearch-item__title">★코엑스</h3>
                                    <div class="ThemeSearch-item__line">
                                    </div>
                                    <p class="ThemeSearch-item__desc">
                                        <span>국제교류의 장 마련</span>
                                        <br>
                                        <span>찾아보기</span>
                                    </p>
                                </div>
                            </a><a class="ThemeSearch-item">
                                <div class="ThemeSearch-item__image is-direct">
                                </div>
                                <div class="ThemeSearch-item__mask">
                                </div>
                                <div class="ThemeSearch-item__typo">
                                    <h3 class="ThemeSearch-item__title">★남산</h3>
                                    <div class="ThemeSearch-item__line">
                                    </div>
                                    <p class="ThemeSearch-item__desc">
                                        <span>서울특별시 공원 중에서 가장 넓은</span>
                                        <br>
                                        <span>찾아보기</span>
                                    </p>
                                </div>
                            </a><a class="ThemeSearch-item">
                                <div class="ThemeSearch-item__image is-officetel">
                                </div>
                                <div class="ThemeSearch-item__mask">
                                </div>
                                <div class="ThemeSearch-item__typo">
                                    <h3 class="ThemeSearch-item__title">★경리단길</h3>
                                    <div class="ThemeSearch-item__line">
                                    </div>
                                    <p class="ThemeSearch-item__desc">
                                        <span>'그랑블루'가 있는 </span>
                                        <br>
                                        <span>찾아보기</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<style>
    .footer {
        position: relative;
        width: 100%;
        clear: both;
    }

        .footer .footer-bottom {
            width: 100%;
            background-color: #2a2a2a;
        }

            .footer .footer-bottom .footer-info2 {
                z-index: 33;
                position: relative;
                width: 950px;
                height: 268px;
                margin: 0 auto;
            }

                .footer .footer-bottom .footer-info2 .footer-logo {
                    float: left;
                    width: 200px;
                    padding-top: 93px;
                }

                    .footer .footer-bottom .footer-info2 .footer-logo a {
                        display: inline-block;
                    }

                .footer .footer-bottom .footer-info2 .footer-address-wrap {
                    float: left;
                    margin-left: 45px;
                    color: #919191;
                }

                    .footer .footer-bottom .footer-info2 .footer-address-wrap .footer-address1, .footer .footer-bottom .footer-info2 .footer-address-wrap .footer-address2, .footer .footer-bottom .footer-info2 .footer-address-wrap .footer-address3 {
                        display: inline-block;
                    }

                        .footer .footer-bottom .footer-info2 .footer-address-wrap .footer-address1 li, .footer .footer-bottom .footer-info2 .footer-address-wrap .footer-address2 li, .footer .footer-bottom .footer-info2 .footer-address-wrap .footer-address3 li {
                            margin-bottom: 11px;
                        }

                        .footer .footer-bottom .footer-info2 .footer-address-wrap .footer-address1 a, .footer .footer-bottom .footer-info2 .footer-address-wrap .footer-address2 a, .footer .footer-bottom .footer-info2 .footer-address-wrap .footer-address3 a {
                            text-decoration: none;
                        }

                    .footer .footer-bottom .footer-info2 .footer-address-wrap .footer-address1 {
                        width: 238px;
                        margin-top: 60px;
                    }

                        .footer .footer-bottom .footer-info2 .footer-address-wrap .footer-address1 em {
                            color: #fff;
                            font-weight: 700;
                        }

                        .footer .footer-bottom .footer-info2 .footer-address-wrap .footer-address1 .fax {
                            margin-left: 10px;
                        }

                    .footer .footer-bottom .footer-info2 .footer-address-wrap .footer-address2 {
                        width: 273px;
                    }

                        .footer .footer-bottom .footer-info2 .footer-address-wrap .footer-address2 a {
                            color: #919191;
                        }

                            .footer .footer-bottom .footer-info2 .footer-address-wrap .footer-address2 a:hover {
                                color: #fff;
                                text-decoration: underline;
                            }

                    .footer .footer-bottom .footer-info2 .footer-address-wrap .footer-address3 {
                        width: 145px;
                    }
</style>
<div class="footer">
    <img width="1" height="1" src="//pixel.mathtag.com/event/img?mt_id=731408&amp;mt_adid=138611&amp;v1=&amp;v2=&amp;v3=&amp;s1=&amp;s2=&amp;s3=" style="position: absolute;" />
    <div id="alert"></div>
    <div id="modal"></div>
    <div class="footer-bottom">
        <div class="footer-info2 clearfix">
            <div class="footer-logo"><a href="http://www.bc.ac.kr" target="_blank"><img alt="부천대학교로 이동" src="http://www.bc.ac.kr/images/intro_logo.png" style="width:200px;margine:10px;"></a></div>
            <div class="footer-address-wrap">
                <ul class="footer-address1">
                    <li><em>부천대학교</em></li>
                    <li>대표 : 국다혜, 김정환, 송창환</li>
                    <li>주소 : 경기도 부천시 원미구 신흥로 56번길25(심곡동) (주)SKOTT</li>
                    <li><span>전화 : 1111-1111 </span><span class="fax"> 팩스 : 032-000-0000</span></li>
                </ul>
                <ul class="footer-address2">
                    <li>사업자 번호 : 있겠냐</li>
                    <li>통신판매업신고번호 : 없겠지</li>
                    <li>프로모션/사업 제휴문의 : <a href="mailto:zziltongjh@gmail.com">zziltongjh@gmail.com</a></li>
                </ul>
                <ul class="footer-address3">
                    <li>
                        <p>SKOTT, Inc. All rights reserved.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


</body>

</html>