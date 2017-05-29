<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
      <!-- BASICS -->
        <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>GREEN responsive bootstraap template</title>
        <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="/static/tem_css/isotope.css" media="screen" />   
      <link rel="stylesheet" href="/static/tem_js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="/static/tem_css/bootstrap.css">
      <link rel="stylesheet" href="/static/tem_css/bootstrap-theme.css">
      <link href="/static/tem_css/responsive-slider.css" rel="stylesheet">
      <link rel="stylesheet" href="/static/tem_css/animate.css">
        <link rel="stylesheet" href="/static/tem_css/style.css">

      <link rel="stylesheet" href="/static/tem_css/font-awesome.min.css">

      <!-- skin -->
      <link rel="stylesheet" href="/static/tem_skin/default.css">
        <!-- =======================================================
            Theme Name: Green
            Theme URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
            Author: BootstrapMade
            Author URL: https://bootstrapmade.com
        ======================================================= -->
    </head>

    <style type="text/css">
       .img_service {
          width : 100%;
          height : 100%;
       }

       .img_logo {
          width : 250px;
          height: 100px;
          border : 5px solid white;
       }

    </style>
    
     
    <body>
   
   
   <div class="header">
   <section id="header" class="appear">
      
      <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
         
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="fa fa-bars color-white"></span>
               </button>
               <h1><a class="navbar-brand" href="index.html" data-0="line-height:90px;" data-300="line-height:50px;"> <div class = "img_logo">SKOTT</div>   
               </a></h1> 
            </div>
            <div class="navbar-collapse collapse">
               <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
                  <li class="active"><a href="/mains">홈</a></li>
                  <li><a href="/map/map_v">지도보기</a></li>
                  <li><a href="#services">추천코스</a></li>
                  <li><a href="#line-pricing">서비스 소개</a></li>
                  <li><a href="#team">팀 소개</a></li>
             <?php
                if ($this->session->userdata('is_login')){
                ?>
                    <li><a href="/Login/logout">로그아웃</a></li>
                    <li><a href="/User/user"><?php echo $this->session->userdata('name') ?> 님</a></li>
                <?php
                } else {
                ?>
                    <li><a class="Gnb-item login small" style="cursor: pointer" href="/Login">로그인</a></li>
                <?php
                }
                ?>

               </ul>
            </div><!--/.navbar-collapse -->
         </div>

      
      
   </section>
   </div>
   

<div class="slider">      
      <div id="about-slider">
         <div id="carousel-slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators visible-xs">
               <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
               <li data-target="#carousel-slider" data-slide-to="1"></li>
               <li data-target="#carousel-slider" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
               <div class="item active">                  
                  <img src="/static/image/pic1.jpg" class="img-responsive" alt=""> 
                  <div class="carousel-caption">
                     <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">                        
                        <h2><span>SKOTT</span></h2>
                     </div>
                     <div class="col-md-10 col-md-offset-1">
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">                        
                           <p><strong>S</strong>afty <strong>Ko</strong>rea <strong>T</strong>axi <strong>T</strong>our </p>
                        </div>
                     </div>
                     <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">                        
                        <form class="form-inline">
                           <div class="form-group">
                              <button type="livedemo" name="Live Demo" class="btn btn-primary btn-lg" required="required">LIST</button>
                           </div>
                           <div class="form-group">
                              <button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required">START TOUR</button>
                           </div>
                        </form>
                     </div>
                  </div>
                </div>
         
                <div class="item">
                  <img src="/static/image/pic2.jpg" class="img-responsive" alt=""> 
                  <div class="carousel-caption">
                     <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">                        
                        <h2>SKOTT</h2>
                     </div>
                     <div class="col-md-10 col-md-offset-1">
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">                        
                           <p><strong>S</strong>afty <strong>Ko</strong>rea <strong>T</strong>axi <strong>T</strong>our </p>
                        </div>
                     </div>
                     <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">                        
                        <form class="form-inline">
                           <div class="form-group">
                              <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live Demo</button>
                           </div>
                           <div class="form-group">
                              <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Get Now</button>
                           </div>
                        </form>
                     </div>
                  </div>
                </div> 
            </div>
            
            <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
               <i class="fa fa-angle-left"></i> 
            </a>
            
            <a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
               <i class="fa fa-angle-right"></i> 
            </a>
         </div> <!--/#carousel-slider-->
      </div><!--/#about-slider-->
   </div><!--/#slider-->
      
   <!--about-->
   <section id="section-about">
      <div class="container">
         <div class="about">
            <div class="row mar-bot40">
               <div class="col-md-offset-3 col-md-6">
                  <div class="title">
                     <div class="wow bounceIn">
                  
                     <h2 class="section-heading animated" data-animation="bounceInUp">SKOTT < 여행 > </h2>
                     
                  
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
         
               <div class="row-slider">
                  <div class="col-lg-6 mar-bot30">
                     <div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
                        <div class="slides" data-group="slides">
                           <ul>
               
                              <div class="slide-body" data-group="slide">
                                 <li><img alt="" class="img-responsive" src="/static/image/seoul/1.jpg" width="100%" height="350"/></li>
                                 <li><img alt="" class="img-responsive" src="/static/image/seoul/13.jpg" width="100%" height="350"/></li>
                                 <li><img alt="" class="img-responsive" src="/static/image/seoul/15.jpg" width="100%" height="350"/></li>
                     
                              </div>
                           </ul>
                              <a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
                              <a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>
                        
                        </div>
                     </div>
                  </div>
               
                  <div class="col-lg-6 ">
                     <div class="company mar-left10">
                        <h4>"SKOTT"이란... </h4>
                        <p>"SKOTT" 은 Safty KOrea Taxi Tour 의 약자로 한국으로 여행하는 외국인들 대상으로 만든 사이트이다. 한국으로 놀러오는 외국인들이 택시를 탈때 바가지요금을 방지하기 위한 택시 플랫폼이다.</p>
                     </div>
                     <div class="list-style">
                        <div class="row">
                           <div class="col-lg-6 col-sm-6 col-xs-12">
                              <ul>
                                 <li>SKOTT</li>
                                 <li>지역별 관광지</li>
                                 <li>관광지 조회</li>
                              </ul>
                           </div>
                           <div class="col-lg-6 col-sm-6 col-xs-12">
                              <ul>
                                 <li>SKOTT</li>
                                 <li>한국 관광객</li>
                                 <li>외국인 관광객</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               
               </div>   
            </div>
               
         </div>
         
      </div>
   </section>
   <!--/about-->
      
      <!-- services -->
      <section id="services" class="section pad-bot5 bg-white">
      <div class="container"> 
            <div class="row mar-bot5">
               <div class="col-md-offset-3 col-md-6">
                  <div class="section-header">
                  <div class="wow bounceIn"data-animation-delay="7.8s">
                  
                     <h2 class="section-heading animated"  >SKOTT < 관광지 ></h2>
                     <h4>추천 관광지 TOP3</h4>
                  
                  </div>
                  </div>
               </div>
            </div>
         <div class="row mar-bot40">
            <div class="col-lg-4" >
               <div class="wow bounceIn">
                  <div class="align-center">
                     <div class="wow rotateIn">
                        <div class="service-col">
                           <div class="service-icon">
                           <img class = "img_service" src="/static/image/mains/TOP3/8.jpg">
                           </div>
                              <h2><a href="#">TOP1<br> < 이태원 > </a></h2> 
                              <p>서울특별시 용산구 이태원동 일대로서 주한 미군을 비롯한 외국인, 외국 상품, 외국 문화의 집결지</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
               
            <div class="col-lg-4" >
               <div class="align-center">
                  <div class="wow bounceIn">
                  
                     <div class="wow rotateIn">
                        <div class="service-col">   
                           <div class="service-icon">
                              <img class = "img_service" src="/static/image/mains/TOP3/4.jpg">
                           </div>
                              <h2><a href="#">TOP2<br> < 남산 > </a></h2> 
                              <p>서울 시가지 팽창으로 교통문제를 초래하게 되어 1·2·3호 터널이 뚫려 있다. 남산골 한옥마을, 장충단공원, 정도 600년 타임캡슐 등이 주변의 명소들이다.</p>
                        </div>
                     </div>   
                  </div>
               </div>
            </div>
         
            <div class="col-lg-4" >
               <div class="align-center">
                  <div class="wow bounceIn">
                     <div class="service-col">
                        <div class="service-icon">
                           <img class = "img_service" src="/static/image/mains/TOP3/9.jpg">
                        </div>
                           <h2><a href="#">TOP3<br> < 홍대입구 > </a></h2> 
                           <p>홍대(弘大)는 서울특별시 마포구 서울 지하철 2호선 홍대입구역과 홍익대학교 정문을 잇는 지역 및 이 일대에 있는 번화가를 말한다. '홍대'는 홍익대학교의 한국어 약칭으로 이 지역의 정식 지명이 아닌 통용 명칭이며, 홍익대학교와 구분하기 위하여 홍대입구, 홍대거리라고도 부른다.</p>
                     </div>
                  </div>
               </div>
            </div>
         
         </div>   

      </div>
      </section>
         
      <!-- team -->
      <section id="team" class="team-section appear clearfix">
      <div class="container">

            <div class="row mar-bot10">
               <div class="col-md-offset-3 col-md-6">
                  <div class="section-header">
                  <div class="wow bounceIn">
                  
                     <h2 class="section-heading animated" data-animation="bounceInUp">SKOTT < 팀 > </h2>
                     <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
                  
                  </div>
                  </div>
               </div>
            </div>

               <div class="row align-center mar-bot45">
                  <div class="col-md-4">
                  <div class="wow bounceIn" data-animation-delay="4.8s">
                     <div class="team-member">
                        <div class="profile-picture">
                           <figure><img src="/static/image/mains/TEAM/kim.jpg" alt=""></figure>
                           <div class="profile-overlay"></div>
                              <div class="profile-social">
                                 <div class="icons-wrapper">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                 </div>
                              </div>
                        </div>
                        <div class="team-detail">
                           <br><h4>송창환</h4>
                           <span>Web developer</span>
                        </div>
                        <div class="team-bio">
                        <p>프론트엔트, 백엔트 개발자</p>
                        </div>
                     </div>
                  </div>
                  </div>
                  <div class="col-md-4">
                     
                     <div class="wow bounceIn">
                     <div class="team-member">
                        <div class="profile-picture">
                           <figure><img src="/static/image/mains/TEAM/songg.jpg" alt=""></figure>
                           <div class="profile-overlay"></div>
                              <div class="profile-social">
                                 <div class="icons-wrapper">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                 </div>
                              </div>
                        </div>
                        <div class="team-detail">
                           <br><h4>김정환</h4>
                           <span>Web developer</span>
                        </div>
                        <div class="team-bio">
                        <p>프론트엔트, 백엔트 개발자</p>
                        </div>
                     </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="wow bounceIn">
                     <div class="team-member">
                        <div class="profile-picture">
                           <figure><img src="/static/image/mains/TEAM/guk.jpg" alt=""></figure>
                           <div class="profile-overlay"></div>
                              <div class="profile-social">
                                 <div class="icons-wrapper">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                 </div>
                              </div>
                        </div>
                        <div class="team-detail">
                           <br><h4>국다혜</h4>
                           <span>Web designer</span>
                        </div>
                        <div class="team-bio">
                        <p>프론트엔트 개발자</p>
                        </div>
                     </div>
                     </div>
                  </div>
                  
               </div>
                  
      </div>
      </section>
      <!-- /team -->
      
      <section id="line-pricing" class="line-section line-center">
         <div class="container pad-top50">
            <div class="row mar-bot10 ">
               <div class="col-md-offset-3 col-md-6">
                  <div class="section-header">
                     <div class="wow bounceIn">
                  
                        <h2 class="section-heading animated" data-animation="bounceInUp">SKOTT < 사용방법 > </h2>
                        <p>How to use SKOTT</p>
                  
                     </div>
                  </div>
               </div>
            </div>
            <div class="line-wrap">
               <div class="line-pricing-table">
                           <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.3s">
                              <ul>
                                 <li class="line-head-row">
                                    지도보기
                                 </li>
                                 <li class="line-price-row">
                                    <p>
                                       <span class="symbol"></span>
                                       <span>STEP1</span>
                                    </p>
                                    <small>Map Begging</small>
                                 </li>
                                 <li>
                                    01. 페이지 상단 이동
                                 </li>
                                 <li>
                                    02. 지도보기버튼 클릭
                                 </li>
                                 <li>
                                    03. 지역별 관광지정보 확인
                                 </li>
                                 <li class="line-btn-row">
                                    <a href="" class="line-btn light">Get Started</a>
                                 </li>
                              </ul>
                           </div>
                           <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.5s">
                              <ul class="line-highlight">
                                 <li class="line-head-row">
                                    검색
                                 </li>
                                 <li class="line-price-row">
                                    <p>
                                       <span class="symbol"></span>
                                       <span>STEP2</span>
                                    </p>
                                    <small>Search</small>
                                 </li>
                                 <li>
                                    01. 관굉지 정보 확인
                                 </li>
                                 <li>
                                    02. 관광지 검색
                                 </li>
                                 <li class="line-btn-row">
                                    <a href="" class="line-btn green">Get Started</a>
                                 </li>
                              </ul>
                           </div>
                           <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.7s">
                              <ul>
                                 <li class="line-head-row">
                                    관광지 클릭
                                 </li>
                                 <li class="line-price-row">
                                    <p>
                                       <span class="symbol"></span>
                                       <span>STEP3</span>
                                    </p>
                                    <small>Tour Search</small>
                                 </li>
                                 <li>
                                    01. 지도상에 관광지 위치 표시
                                 </li>
                                 <li>
                                    02. 관광지 상세페이지 이동
                                 </li>
                                 <li>
                                    03. 관광지 예상거리, 예상택시비 표시
                                 </li>
                                 <li class="line-btn-row">
                                    <a href="" class="line-btn light">Get Started</a>
                                 </li>
                              </ul>
                           </div>
               </div>
            </div>
         </div>
      </section>

      
      <!-- section works -->
      <section id="section-works" class="section appear clearfix">
         <div class="container">
            
            <div class="row mar-bot40">
               <div class="col-md-offset-3 col-md-6">
                  <div class="section-header">
                     <h2 class="section-heading animated" data-animation="bounceInUp">지역별 관광지</h2>
                     <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
                  </div>
               </div>
            </div>
               
                        <div class="row">
                          <nav id="filter" class="col-md-12 text-center">
                            <ul>
                              <li><a href="#" class="current btn-theme btn-small" data-filter="*">전체</a></li>
                              <li><a href="#"  class="btn-theme btn-small" data-filter=".webdesign" >경기권</a></li>
                              <li><a href="#"  class="btn-theme btn-small" data-filter=".photography">전라권</a></li>
                              <li ><a href="#" class="btn-theme btn-small" data-filter=".print">제주권</a></li>
                            </ul>
                          </nav>
                          <div class="col-md-12">
                            <div class="row">
                              <div class="portfolio-items isotopeWrapper clearfix" id="3">
                       
                                <article class="col-md-4 isotopeItem webdesign">
                           <div class="portfolio-item">
                           <div class="wow rotateInUpLeft" data-animation-delay="4.8s">
                              <img src="/static/image/seoul/1.jpg" alt="welcome" />
                           </div>
                               <div class="portfolio-desc align-center">
                                 <div class="folio-info">
                                    <h5><a href="#">Project name 1</a></h5>
                                    <a href="/static/image/seoul/1.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                  </div>                                 
                               </div>
                           </div>
                                </article>

                                <article class="col-md-4 isotopeItem photography">
                           <div class="portfolio-item">
                           <div class="wow bounceIn">
                              <img src="/static/image/seoul/2.jpg" alt="" />
                           </div>
                               <div class="portfolio-desc align-center">
                                 <div class="folio-info">
                                    <h5><a href="#">Project name 2</a></h5>
                                    <a href="/static/image/seoul/2.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                  </div>                                 
                               </div>
                           </div>
                                </article>
                        

                                <article class="col-md-4 isotopeItem photography">
                           <div class="portfolio-item">
                           <div class="wow rotateInDownRight">
                              <img src="/static/image/seoul/3.jpg" alt="" />
                           </div>   
                               <div class="portfolio-desc align-center">
                                 <div class="folio-info">
                                    <h5><a href="#">Project name 3</a></h5>
                                    <a href="/static/image/seoul/3.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                  </div>                                 
                               </div>
                           </div>
                                </article>

                                <article class="col-md-4 isotopeItem print">
                           <div class="portfolio-item">
                           <div class="wow rotateInUpLeft">
                              <img src="/static/image/seoul/15.jpg" alt="" />
                            </div>   
                               <div class="portfolio-desc align-center">
                                 <div class="folio-info">
                                    <h5><a href="#">Project name 4</a></h5>
                                    <a href="/static/image/seoul/15.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                  </div>                                 
                               </div>
                           </div>
                                </article>

                                <article class="col-md-4 isotopeItem photography">
                           <div class="portfolio-item">
                           <div class="wow bounceIn">
                              <img src="/static/image/seoul/5.jpg" alt="" />
                           </div>
                               <div class="portfolio-desc align-center">
                                 <div class="folio-info">
                                    <h5><a href="#">Project name 5</a></h5>
                                    <a href="/static/image/seoul/5.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                  </div>                                 
                               </div>
                           </div>
                                </article>

                                <article class="col-md-4 isotopeItem webdesign">
                           <div class="portfolio-item">
                           <div class="wow rotateInDownRight">
                              <img src="/static/image/seoul/6.jpg" alt="" />
                            </div>      
                               <div class="portfolio-desc align-center">
                                 <div class="folio-info">
                                    <h5><a href="#">Project name 6</a></h5>
                                    <a href="/static/image/seoul/6.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                  </div>                                 
                               </div>
                           </div>
                                </article>

                                <article class="col-md-4 isotopeItem print">
                           <div class="portfolio-item">
                           <div class="wow rotateInUpLeft">
                              <img src="/static/image/seoul/7.jpg" alt="" />
                           </div>
                               <div class="portfolio-desc align-center">
                                 <div class="folio-info">
                                    <h5><a href="#">Project name 7</a></h5>
                                    <a href="/static/image/seoul/7.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                  </div>                                 
                               </div>
                           </div>
                                </article>

                                <article class="col-md-4 isotopeItem photography">
                           <div class="portfolio-item">
                           <div class="wow bounceIn">
                              <img src="/static/image/seoul/8.jpg" alt="" />
                           </div>   
                               <div class="portfolio-desc align-center">
                                 <div class="folio-info">
                                    <h5><a href="#">Project name 8</a></h5>
                                    <a href="/static/image/seoul/8.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                  </div>                                 
                               </div>
                           </div>
                                </article>

                                <article class="col-md-4 isotopeItem print">
                           <div class="portfolio-item">
                           <div class="wow rotateInDownRight">
                              <img src="/static/image/seoul/9.jpg" alt="" />
                           </div>
                               <div class="portfolio-desc align-center">
                                 <div class="folio-info">
                                    <h5><a href="#">Project name 9</a></h5>
                                    <a href="/static/image/seoul/9.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                  </div>                                 
                               </div>
                           </div>
                                </article>
                                </div>
                                        
                     </div>
                                     

                     </div>
                        </div>
            
         </div>
      </section>

      <!-- contact -->
      <section id="section-contact" class="section appear clearfix">
         <div class="container">
            
            <div class="row mar-bot40">
               <div class="col-md-offset-3 col-md-6">
                  <div class="section-header">
                     <h2 class="section-heading animated" data-animation="bounceInUp">Contact us</h2>
                     <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 col-md-offset-2">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div> 
                            
                            <div class="text-center"><button type="submit" class="line-btn green">Send Message</button></div>
                        </form>
               </div>
               <!-- ./span12 -->
            </div>
            
         </div>
      </section>
      <!-- map -->

   <section id="footer" class="section footer">
      <div class="container">
         <div class="row animated opacity mar-bot0" data-andown="fadeIn" data-animation="animation">
            <div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>            
            </div>
         </div>

         <div class="row align-center copyright">
               <div class="col-sm-12">
                   <p>&copy; GREEN Theme</p>
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Green
                            -->
                            <a href="https://bootstrapmade.com/">Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
         </div>
      </div>

   </section>


   <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>   

   <script src="/static/tem_js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
   <script src="/static/tem_js/jquery.js"></script>
   <script src="/static/tem_js/jquery.easing.1.3.js"></script>
    <script src="/static/tem_js/bootstrap.min.js"></script>
   <script src="/static/tem_js/jquery.isotope.min.js"></script>
   <script src="/static/tem_js/jquery.nicescroll.min.js"></script>
   <script src="/static/tem_js/fancybox/jquery.fancybox.pack.js"></script>
   <script src="/static/tem_js/skrollr.min.js"></script>      
   <script src="/static/tem_js/jquery.scrollTo-1.4.3.1-min.js"></script>
   <script src="/static/tem_js/jquery.localscroll-1.2.7-min.js"></script>
   <script src="/static/tem_js/stellar.js"></script>
   <script src="/static/tem_js/responsive-slider.js"></script>
   <script src="/static/tem_js/jquery.appear.js"></script>
   <script src="/static/tem_js/grid.js"></script>
    <script src="/static/tem_js/main.js"></script>
    <script src="/static/tem_js/wow.min.js"></script>
   <script>wow = new WOW({}).init();</script>
    <script src="/static/tem_contactform/contactform.js"></script>
    
</body>
</html>