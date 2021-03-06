<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
      <!-- BASICS -->
        <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SKOTT-The joy of Travel </title>
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

              <link rel="stylesheet" type="text/css" href="/static/Semantic/semantic.min.css">
        <script
          src="https://code.jquery.com/jquery-3.1.1.min.js"
          integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
          crossorigin="anonymous">
        </script>
        <script src="/static/Semantic/semantic.min.js"></script>

    </head>
    <style type="text/css">
       .img_service {
          width : 100%;
          height : 100%;
       }

       .img_logo {
          width : 90px;
          height: 40px;
          background:url('/static/image/header/logo.png');
          background-size: 100% 100%;
       }

       .credits a {
        text-decoration: none;
       }


       @media (min-width: 768px) {
            #start_button {
              display: none;
            }
        }

    </style>
    
     
    <body>
   
   
   <div class="header">
   <section id="header" class="appear">
      
      <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:80px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
         
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="fa fa-bars color-white"></span>
               </button>
               <h1><a class="navbar-brand" href="/mains_v_eng" data-0="line-height:90px;" data-300="line-height:50px;"> <div class = "img_logo" data-0="margin-top:0px;" data-300="margin-top:-10px;"></div>   
               </a></h1> 
            </div>
            <div class="navbar-collapse collapse">
               <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
                  <li class="active"><a href="#header">HOME</a></li>
                  <li><a href="/map_eng">MAP</a></li>
                  <li><a href="#section-about">SKOTT</a></li>
                  <li><a href="#services">RECOMMEND</a></li>
                  <li><a href="#line-pricing">INTRODUCE</a></li>
                  <li><a href="#section-works" style="color:white">TOUR ATTRACTION</a></li>
             <?php
                if ($this->session->userdata('is_login')){
                ?>
                    <li><a href="/Login/logout">Log out</a></li>
                    <li><a href="/User/user"><?php echo $this->session->userdata('name') ?> 님</a></li>
                <?php
                } else {
                ?>
                    <li><a class="Gnb-item login small" style="cursor: pointer" href="/Login">Log In</a></li>
                <?php
                }
                ?>

					</ul>
				</div><!--/.navbar-collapse -->
			</div>


      
      
   </section>
   </div>
   

<div class="slider">      
      <div id="about-slider" style="background-color:#d1d1d1">
         <div id="carousel-slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators visible-xs">
               <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
               <li data-target="#carousel-slider" data-slide-to="1"></li>
               <li data-target="#carousel-slider" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
               <div class="item active">                  
                  <img src="/static/image/pic4.jpg" class="img-responsive" alt=""> 
                  <div class="carousel-caption">
                     <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">                        
                        <h2><span>SKOTT</span></h2>
                     </div>
                     <div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">                        
                           <p><strong>S</strong>afty <strong>KO</strong>rea <strong>T</strong>axi <strong>T</strong>our </p>
                        </div>
                     </div>
                     <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">                        
                        <form class="form-inline">
                           <!-- <div class="form-group">
                              <button type="livedemo" name="Live Demo" class="btn btn-primary btn-lg" required="required">SKOTT</button>
                           </div> -->
                           <div class="form-group">
                               <button type="getnow" class="btn btn-primary btn-lg" required="required"><a href="/map_eng">START TOUR</a></button>
                           </div>
                        </form>
                     </div>
                  </div>
                </div>
         
                <div class="item">
                  <img src="/static/image/pic6.jpg" class="img-responsive" alt=""> 
                  <div class="carousel-caption">
                     <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">                        
                        <h2>SKOTT</h2>
                     </div>
                     <div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">                        
                           <p><strong>S</strong>afty <strong>Ko</strong>rea <strong>T</strong>axi <strong>T</strong>our </p>
                        </div>
                     </div>
                     <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">                        
                        <form class="form-inline">
                          <!--  <div class="form-group">
                              <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live Demo</button>
                           </div> -->
                           <div class="form-group">
                              <button type="getnow" class="btn btn-primary btn-lg" required="required"><a href="/map_eng">START TOUR</a></button>
                           </div>
                        </form>
                     </div>
                  </div>
                </div> 
                <div class="item">
                  <img src="/static/image/pic7.jpg" class="img-responsive" alt=""> 
                  <div class="carousel-caption">
                     <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">                        
                        <h2>SKOTT</h2>
                     </div>
                     <div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">                        
                           <p><strong>S</strong>afty <strong>Ko</strong>rea <strong>T</strong>axi <strong>T</strong>our </p>
                        </div>
                     </div>
                     <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">                        
                        <form class="form-inline">
                        <!-- 
                           <div class="form-group">
                              <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live Demo</button>
                           </div> 
                         -->
                           <div class="form-group">
                              <button type="getnow" class="btn btn-primary btn-lg" required="required"><a href="/map_eng">START TOUR</a></button>
                           </div>
                        </form>
                     </div>
                  </div>
                </div> 
            </div>
            
            <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
               <i class="fa fa-angle-left"></i> 
            </a>
            
            <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
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
                  
                     <h2 class="section-heading animated" data-animation="bounceInUp">SKOTT</h2>
                     
                  
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
                        <h4>'SKOTT' ? </h4>
                        <p>"SKOTT" is the abbreviation for Safty KOrea Taxi Tour and it is a site for foreigners traveling to Korea.
                        It is a taxi platform built to prevent overage charges when you ride a taxi.
                        </p>
                     </div>
                     <div class="list-style">
                        <div class="row">
                           <div class="col-lg-6 col-sm-6 col-xs-12">
                              <ul>
                                 <li>SKOTT</li>
                                 <li>Korean </li>
                                 <li>Foreigner</li>
                              </ul>
                           </div>                           
                        </div>
                     </div>
                  </div>
               
               </div>   
            </div>
               
         </div>
         
      </div>
      <hr>
   </section>
   <!--/about-->
      
      <!-- services -->
      <section id="services" style="background:#fafafa;">
      <div class="container"> 
            <div class="row mar-bot5">
               <div class="col-md-offset-3 col-md-6">
                  <div class="section-header">
                  <div class="wow bounceIn"data-animation-delay="7.8s">
                  
                     <h2 class="section-heading animated"  >SKOTT - Spot </h2>
                     <h4>Recommend Spot TOP3</h4>
                  
                  </div>
                  </div>
               </div>
            </div>
         <div class="row mar-bot40">
            <div class="col-lg-4" >
               <div class="wow bounceIn">
                  <div class="align-center">
                     <div class="wow rotateIn">
                        <div class="service-col" style="height: 550px;">
                           <div class="service-icon" style = "width : 230px; height : 230px;background-size: 100% 100%">
                           <img class = "img_service" src="/static/image/mains/TOP3/8.jpg">
                           </div>
                              <h2><a href="#">TOP1<br> < Itaewon  > </a></h2> 
                              <p>As a part of Itaewon-dong, Yongsan-gu, Yongsan-gu, Seoul, You can see foreigners including foreigners,  merchandise, and cultures from the US Forces in Korea Itaewon   
                              </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
               
            <div class="col-lg-4">
               <div class="align-center">
                  <div class="wow bounceIn">
                  
                     <div class="wow rotateIn">
                        <div class="service-col"  style="height: 550px;">   

                           <div class="service-icon" style = "width : 230px; height : 230px;">
                              <img class = "img_service" src="/static/image/mains/TOP3/4.jpg">
                           </div>
                              <h2><a href="#">TOP2<br> < NamSan> </a></h2> 
                              <p>
                              Nearby Namsan, There are Namsangol Hanok Village, Jang Chung-dan Park, and 600-year-old time capsule.</p>
                        </div>
                     </div>   
                  </div>
               </div>
            </div>
         
            <div class="col-lg-4" >
               <div class="align-center">
                  <div class="wow bounceIn">

                     <div class="service-col" style="height: 550px;">
                       <div class="service-icon" style = "width : 230px; height : 230px;">
                           <img class = "img_service" src="/static/image/mains/TOP3/9.jpg">

                        </div>
                           <h2><a href="#">TOP3<br> < Hongik University Entrance > </a></h2> 
                           <p>
                           Hongdae is main street linking Seoul Metropolitan Subway Line, Mapo-gu, Seoul, and Hongik University.</p>
                     </div>
                  </div>
               </div>
            </div>
         
         </div>   

      </div>
      </section>        

      <section id="line-pricing" class="section pad-bot5 bg-white">
         <div class="container pad-top50">
            <div class="row mar-bot10 ">
               <div class="col-md-offset-3 col-md-6">
                  <div class="section-header">
                     <div class="wow bounceIn">
                  
                        <h2 class="section-heading animated" data-animation="bounceInUp">SKOTT - How to...  </h2>
                        <p>How to use SKOTT</p>
                  
                     </div>
                  </div>
               </div>
            </div>
            <div class="line-wrap">
               <div class="line-pricing-table">
                           <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.3s" style="width: 380px;">
                              <ul>
                                 <li class="line-head-row">
                                    Map view
                                 </li>
                                 <li class="line-price-row">
                                    <p>
                                       <span class="symbol"></span>
                                       <span>STEP1</span>
                                    </p>         
                                 </li>
                                 <li>
                                    Click on the button at the top of the page.
                                 </li>
                                 <li class="line-btn-row">
<!--                                     <a href="" class="line-btn light">Get Started</a> -->
                                 </li>
                              </ul>
                           </div>
                           <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.5s" style="width: 380px;">
                              <ul class="line-highlight">
                                 <li class="line-head-row">
                                    Search
                                 </li>
                                 <li class="line-price-row">
                                    <p>
                                       <span class="symbol"></span>
                                       <span>STEP2</span>
                                    </p>
                                    
                                 </li>
                                 <li>
                                    01.Read tourist attractions. 
                                 </li>
                                 <li>
                                    02. Search attraction.
                                 </li>
                                 <li class="line-btn-row">
<!--                                     <a href="" class="line-btn green">Get Started</a> -->
                                 </li>
                              </ul>
                           </div>
                           <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.7s" style="width: 380px;">
                              <ul>
                                 <li class="line-head-row">
                                    Spot Click
                                 </li>
                                 <li class="line-price-row">
                                    <p>
                                       <span class="symbol"></span>
                                       <span>STEP3</span>
                                    </p>
                                 </li>
                                 <li>
                                    01. Click on the marker you want to place.
                                 </li>
                                 <li>
                                    02. Move to
                                    Detail page.
                                 </li>
                                 <li>
                                    03. You see various information.
                                 </li>
                                 <li class="line-btn-row">
<!--                                     <a href="" class="line-btn light">Get Started</a> -->
                                 </li>
                              </ul>
                           </div>
               </div>
            </div>
         </div>
      </section>

      <!-- section works -->
      <section id="section-works" class="section appear clearfix" style="background-color:#fafafa">
         <div class="container">
            
            <div class="row mar-bot40">
               <div class="col-md-offset-3 col-md-6">
                  <div class="section-header">
                     <h2 class="section-heading animated" data-animation="bounceInUp">Tourist spot</h2>
                     <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
                  </div>
               </div>
            </div>
               
                        <div class="row">
                          <nav id="filter" class="col-md-12 text-center">
                            <ul>
                              <li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
                              <li><a href="#"  class="btn-theme btn-small" data-filter=".webdesign" >Gyeonggi</a></li>
                              <li><a href="#"  class="btn-theme btn-small" data-filter=".photography">Jeolla-do</a></li>
                              <li ><a href="#" class="btn-theme btn-small" data-filter=".print">Jeju</a></li>
                            </ul>
                          </nav>
                          <div class="col-md-12">
                            <div class="row">
                              <div class="portfolio-items isotopeWrapper clearfix" id="3">
                       
                                <article class="col-md-4 isotopeItem webdesign">
                           <div class="portfolio-item">
                           <div class="wow rotateInUpLeft" data-animation-delay="4.8s">
                              <img src="/static/image/seoul1/1.jpg" alt="welcome" />
                           </div>
                               <div class="portfolio-desc align-center">
                                 <div class="folio-info">
                                    <h5><a href="#">Gyeongbokgung</a></h5>
                                    <a href="/static/image/seoul1/1.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                  </div>                                 
                               </div>
                           </div>
                                </article>

                                <article class="col-md-4 isotopeItem photography">
                           <div class="portfolio-item">
                           <div class="wow bounceIn">
                              <img src="/static/image/seoul1/2.jpg" alt="" />
                           </div>
                               <div class="portfolio-desc align-center">
                                 <div class="folio-info">
                                    <h5><a href="#">Changdeokgung Palace</a></h5>
                                    <a href="/static/image/seoul1/2.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                  </div>                                 
                               </div>
                           </div>
                                </article>
                        

                                <article class="col-md-4 isotopeItem photography">
                           <div class="portfolio-item">
                           <div class="wow rotateInDownRight">
                              <img src="/static/image/seoul1/3.jpg" alt="" />
                           </div>   
                               <div class="portfolio-desc align-center">
                                 <div class="folio-info">
                                    <h5><a href="#">Gyeonghui Palace</a></h5>
                                    <a href="/static/image/seoul1/3.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                  </div>                                 
                               </div>
                           </div>
                                </article>

                                <article class="col-md-4 isotopeItem print">
                           <div class="portfolio-item">
                           <div class="wow rotateInUpLeft">
                              <img src="/static/image/seoul1/15.jpg" alt="" />
                            </div>   
                               <div class="portfolio-desc align-center">
                                 <div class="folio-info">
                                    <h5><a href="#">Sinsa-dong</a></h5>
                                    <a href="/static/image/seoul1/15.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                  </div>                                 
                               </div>
                           </div>
                                </article>

                                <article class="col-md-4 isotopeItem photography">
                           <div class="portfolio-item">
                           <div class="wow bounceIn">
                              <img src="/static/image/seoul1/5.jpg" alt="" />
                           </div>
                               <div class="portfolio-desc align-center">
                                 <div class="folio-info">
                                    <h5><a href="#">War Memorial Musium</a></h5>
                                    <a href="/static/image/seoul1/5.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                  </div>                                 
                               </div>
                           </div>
                                </article>

                                <article class="col-md-4 isotopeItem webdesign">
                           <div class="portfolio-item">
                           <div class="wow rotateInDownRight">
                              <img src="/static/image/seoul1/6.jpg" alt="" />
                            </div>      
                               <div class="portfolio-desc align-center">
                                 <div class="folio-info">
                                    <h5><a href="#">Hongik University entrance</a></h5>
                                    <a href="/static/image/seoul1/6.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                  </div>                                 
                               </div>
                           </div>
                                </article>

                                <article class="col-md-4 isotopeItem print">
                           <div class="portfolio-item">
                           <div class="wow rotateInUpLeft">
                              <img src="/static/image/seoul1/7.jpg" alt="" />
                           </div>
                               <div class="portfolio-desc align-center">
                                 <div class="folio-info">
                                    <h5><a href="#">Gwanghwamun Square</a></h5>
                                    <a href="/static/image/seoul1/7.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                  </div>                                 
                               </div>
                           </div>
                                </article>

                                <article class="col-md-4 isotopeItem photography">
                           <div class="portfolio-item">
                           <div class="wow bounceIn">
                              <img src="/static/image/seoul1/8.jpg" alt="" />
                           </div>   
                               <div class="portfolio-desc align-center">
                                 <div class="folio-info">
                                    <h5><a href="#">Itaewon</a></h5>
                                    <a href="/static/image/seoul1/8.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                  </div>                                 
                               </div>
                           </div>
                                </article>

                                <article class="col-md-4 isotopeItem print">
                           <div class="portfolio-item">
                           <div class="wow rotateInDownRight">
                              <img src="/static/image/seoul1/9.jpg" alt="" />
                           </div>
                               <div class="portfolio-desc align-center">
                                 <div class="folio-info">
                                    <h5><a href="#">Dong Dae Moon</a></h5>
                                    <a href="/static/image/seoul1/9.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
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

      <!-- team -->
<!--       <section id="team" class="team-section appear clearfix">
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
      </section> -->
      <!-- /team -->

      <!-- map -->
   <section id="footer" class="section footer">

      <button id ="start_button" onclick="location.href='/map'" style="border:0px;background-color:#4d7e2b;color:#fff;font-weight:bold;border-radius:10px" >START SKOTT</button>
      <div class="container">
         <div class="row animated opacity mar-bot0" data-andown="fadeIn" data-animation="animation">
            <div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <li><a href="http://www.facebook.com" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://www.twitter.com" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="http://www.google.com" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="http://www.linkedin.com" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>            
            </div>
         </div>

         <div class="row align-center copyright">
               <div class="col-sm-12" style="color:white">
                   <p>&copy; SKOTT Theme</p>
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remainoncl intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Green
                            -->
                            <a href="/mains_v_eng">SKOTT</a> by <a href="https://www.bc.ac.kr">BucheonU.S MADE</a>
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