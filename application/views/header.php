<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>무제 문서</title>
<link rel="stylesheet" href="/static/css/header.css">

        <link rel="stylesheet" type="text/css" href="/static/Semantic/semantic.min.css">
        <script
          src="https://code.jquery.com/jquery-3.1.1.min.js"
          integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
          crossorigin="anonymous">
        </script>
        <script src="/static/Semantic/semantic.min.js"></script>


<style>
body {
	margin: 0px;
	width: 100%;
	padding: 0px;
}

</style>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onLoad="MM_preloadImages('../../static/Image/header/menu1_hover.png','../../static/Image/header/menu2_hover.png','../../static/Image/header/menu3_hover_2.png')">
<div id="Gnb">
  <div id="logo"><img src="../../static/Image/header/logo.png" width="148" height="54" alt=""/></div>
  <div id="h_menu1"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('menu_loca','','../../static/Image/header/menu1_hover.png',1)"><img src="../../static/Image/header/menu1.png" alt="" width="47" height="18" id="menu_loca"></a></div>
  <div id="h_menu2"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','../../static/Image/header/menu2_hover.png',1)"><img src="../../static/Image/header/menu2.png" alt="" width="65" height="18" id="Image4"></a></div>


        <?php
          if('/mains' == $_SERVER['REQUEST_URI'])
            {
                  //echo 'ture', $_SERVER['REQUEST_URI'];
            } else {
                  //echo $_SERVER['REQUEST_URI'];
        ?>
        <div id="h_search" class="ui search">
         <form method="get" action="/search" id="search">
            <input class = "prompt" name="q" type="text" size="40" placeholder="찾아보기" />
          </form>
        </div>
          <?php
        }
          ?>
      

    
<!-- 

 -->

  <div id="h_menu3"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('sign','','../../static/Image/header/menu3_hover_2.png',1)"><img src="../../static/Image/header/menu3.png" alt="" width="118" height="18" id="sign"></a>
  </div>
  
</div>
</body>

<script type="text/javascript">
  
 var recommand_name = <?php echo $recommand_name;?>

$('.ui.search')
  .search({
    source: recommand_name
  })
;
</script>
</html>
