<!doctype html>
<html amp lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <title><?php if(isset($MetaTitle)): echo $MetaTitle; elseif(isset($PageTitle)): echo $PageTitle; else: echo $Author->FirstName." ".$Author->LastName; endif ?></title>
    <meta name="description" content="<?php if(isset($MetaDescription)): echo $MetaDescription; endif ?>">
    <meta name="keywords" content="<?php if(isset($MetaKeyword)): echo $MetaKeyword; endif ?>">

<?php if(isset($Curl)):?>
    <link rel="canonical" href="<?php echo $Curl;?>">
<?php endif;?>
  
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    
    <!--  AMP Script End  -->
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    
    <script async src="https://cdn.ampproject.org/v0.js"></script>    

<script type="application/ld+json">
{
 "@context": "http://schema.org",
 "@type": "NewsArticle",
 "mainEntityOfPage":"<?php echo $Curl;?>",
 "headline": "<?php echo $Fb_title;?>",
 "image": {
   "@type": "ImageObject",
   "url": "<?php echo $Fb_Thumb; ?>",
   "height": 270,
   "width": 400
 },
 "datePublished": "<?php echo date("Y-m-d h:i:s", strtotime($postTime));?>",
 "dateModified": "<?php echo date("Y-m-d h:i:s", strtotime($postTime));?>",
 "author": {
   "@type": "Person",
   "name": "<?php echo $Fb_author->FirstName.' '.$Fb_author->LastName; ?>"
 },
 "publisher": {
   "@type": "Organization",
   "name": "vegan First",
   "logo": {
     "@type": "ImageObject",
     "url": "http://www.veganfirst.com/assetsNew/mobile/img/logo.png",
     "width": 80,
     "height": 48
   }
 },
 "description": "<?php echo $Fb_desc; ?>"
}
</script>


<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21721917858/Rawnature-300x250-rightsidebar', [300, 250], 'div-gpt-ad-1544174505848-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21721917858/Unit1-336x280-RightSidebar', [336, 280], 'div-gpt-ad-1544174293882-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21721917858/Carmesi-970x90', [970, 90], 'div-gpt-ad-1544174697220-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21721917858/Unit4-728x90-bottombar', [728, 90], 'div-gpt-ad-1544174814618-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>

    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <style amp-custom>
        /*  ScoopWhoop css style         */
@font-face {
	font-family:Cervo Regular;
	src:url(<?php echo base_url().'assetsNew/fonts/'?>cervo-regular.otf);
	src:url('<?php echo base_url().'assetsNew/fonts/'?>Cervo-Regular.woff');
}

@font-face {
	font-family:Cervo Light;
	src:url(<?php echo base_url().'assetsNew/fonts/'?>Cervo-Light.otf);
	src: url('<?php echo base_url().'assetsNew/fonts/'?>Cervo-Light.woff');
}
 
        
        body {
            max-width: 460px;
          margin: 0 auto;
            float: none;
            font-family: Cervo Light;
            overflow-x: hidden;
            position: relative;
            color: #000;
        }

        body a {
            text-decoration: none;
            color: #000;
        }

        .masthead {
        width: 100%;
        display: block;
        text-align: center;
        
        position: relative;
        z-index: 3;  height: 56px;
        }

        
        .navButton, .navClose { position: absolute; top: 0; left: 0; z-index: 3; background-color: transparent; border: none; outline: none; color: #000000; font-size: 20px; line-height: 1.5em; text-align: left; display: block; padding: 13px 19px; cursor: pointer;}
        .navClose { z-index: -1; visibility: hidden; }
        .navButton:focus { opacity: 0; }
        .navFrame { background-color: #fff; border: 0; padding: 0; margin: 0; position: fixed; top: 0; left: 0; width: 220px; min-height: 300px; box-sizing: border-box; z-index: 2; text-align: left; display: block; transform: translateX(-390px); -webkit-transform: translateX(-390px); transition: transform 500ms cubic-bezier(0, 1,0,1); overflow: hidden;  }

        .sitenav {
            width: 220px;
            position: absolute;
            top: 45px;
            right: 0;
            transform: translateX(-150px);
            -webkit-transform: translateX(-150px);
            transition: transform 500ms cubic-bezier(0, 1, 0, 1);
        }

        #navscrim {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 1;
            background-color: #999;
            opacity: 0;
            transition: opacity 250ms cubic-bezier(0, .67, 0, .67);
            pointer-events: none;
        }

        .content-container,
        .footer-background {
            transition: transform 250ms cubic-bezier(0, .67, 0, .67);
            transform-origin: 50% 0%;
        }

        .navButton:focus ~ .navFrame {
            transform: translateX(-85px);
            -webkit-transform: translateX(-85px);
        }

        .navButton:focus ~ .navFrame .sitenav {
            transform: translateX(0);
            -webkit-transform: translateX(0);
        }

        .navFrame:active,
        .navButton:focus ~ .navClose {
            z-index: 3;
            visibility: visible;
        }

        /*.navFrame:active ~ .content-container,*/
        /*.navButton:focus ~ .content-container,*/
        .navFrame:active ~ .header-container,
        .navButton:focus ~ .header-container,
        .navFrame:active ~ .footer-background,
        .navButton:focus ~ .footer-background {
            transform: scale(0.98) translateX(5px);
            -webkit-transform: scale(0.98) translateX(5px);
        }

        .navFrame:active ~ #navscrim,
        .navButton:focus ~ #navscrim,
        .navFrame:active ~ #navscrim,
        .navButton:focus ~ #navscrim {
            opacity: 0.75;
            pointer-events: auto;
        }

        .side-nav {
            font-size: 14px;
            font-family: Cervo Light;
            list-style: none;
            padding-left: 105px;
        }

        .sitenav .side-nav li {
            list-style-type: none;
            line-height: 1.1em;
            font-size: 14px;
        }

        .sitenav .side-nav li a {
            width: auto;
            display: inline-block;
            color: #000;
            padding: 3px 6px 3px 6px;
        }

        #sections-menu-off-canvas {}

        #sections-menu-off-canvas li {
            margin-bottom: 10px;
        }

        #sections-menu-off-canvas li a {
            font-family: Cervo Light;
            font-size: 14px;
            font-weight: normal;
            text-transform: none;
            color: #000;
            text-decoration: none;
            width: auto;
            border-radius: 4px
        }

        #site-attribution-off-canvas-menu {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin: 0;
        }

        #site-attribution-off-canvas-menu li {
            font-size: 14px;
        }

        #site-attribution-off-canvas-menu li a {
            text-decoration: none;
            font-family: Cervo Light;
        }

        #site-attribution-off-canvas-menu li:last-child {
            padding-bottom: 50px;
        }

        h2 {
            width: 100%;
            font-family: Cervo Regular;
            font-size: 21px;
            font-weight: normal;

            margin: 0px auto;
            margin-top: 20px;
            margin-bottom: 20px;
            line-height: 1.1em;
            word-spacing: -.02em;
            color: #000000;
        }

        p {
            width: 100%;
            margin: 0px auto;
            font-family: Cervo Light;
            font-size: 18px;
            margin-bottom: 15px;
            color: #000000;
            line-height: 1.5em;
            font-family: Cervo Light;
            font-size: 18px;
            line-height: 32px;
        }

        .content-container {
            font-family: Cervo Light;
            font-size: 16px;
            line-height: 20px;
            width:92%;
            margin:10px auto;
        }

        .header-container {
            margin: 0px auto;
            font-family: Cervo Light;
            font-size: 14px;
            margin-bottom: 20px;
            color: #000000;
            line-height: 1.5em;
        }
        .header-container p{ width: 92%;}
        .header-container h2{ width: 92%;}
        .reco-container {
            margin: 0px auto;
            font-family: Cervo Light;
            font-size: 14px;
            margin-top: 10px;
            margin-bottom: 20px;
            color: #000000;
            line-height: 1.5em; max-width: 92%;
            overflow:hidden;
        }

        .footer-container{
            width: 100%;
            height: 100%;
        }

        .authorInfo {
            color: #00000;
            margin-left: 10px;
        }

        .title {
                font-family: Cervo Regular;
    font-size: 40px;
    line-height: 40px;
        }
        .content-container p a{color: #FF5000; text-decoration:none;}
        .content-container figcaption, p.sw-source  {
            display: inline-block;
            text-align: left;
            margin: 5px auto 20px auto;
            color: #ccc;
            font-size: 14px;
            font-style: italic;
            outline: transparent solid 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility; height: 100%;
        }
        .related {
            /*background-color: #f5f5f5;*/
            /*margin: 1rem;*/
            /*display: flex;*/
            color: #111;
            padding: 0;
            /*box-shadow: 0 1px 1px 0 rgba(0,0,0,.14), 0 1px 1px -1px rgba(0,0,0,.14), 0 1px 5px 0 rgba(0,0,0,.12);*/
            text-decoration: none;
            margin-bottom: 25px;

        }
        .ampstart-card a:not(.ampstart-btn), .www-component-desc li a:not(.ampstart-btn), .www-component-desc p a:not(.ampstart-btn) {
    text-decoration: none;
    color: #35698f;
      }
      .left {
    float: left;
    width: 35%;
}
.right {
    float: right;
    width: 63%;
}
.group{
  margin-bottom: 20px;
}
.group:after {
    content:"";
    display: table;
    clear: both;
}
.right img {
    max-width: 100%;
    height: auto;
}
      .card span{font-family: Cervo Light;
    font-size: 14px;
    color: #35698f;
    line-height: 20px;

}
    figcaption a, p.sw-source a {
        color: #ccc;
    }
    .date {  font-family: helveticaNeue;  font-size: 12px;  color: #000;  margin-bottom: 5px;padding-top: 10px;  }
    .logo{width: 80px; height: 48px;  display: inline-block; margin-left: -23px;}
        .copyright{font-size: 12px; text-align: center;}
        .reco-caption-text{ font-size: 20px; font-family: futuraLTBold;background-color: #f4f4f4;  width:98%; padding-left: 2%;}
        .story{ width: 100%;  float: left;  margin-left: 0;
            margin-right: 0;  border: 1px solid #e5e5e5;  min-height: 70px;
            margin-bottom: 20px; box-sizing: border-box;
        }
        .story-link{height: 100%;  width: 100%;  z-index: 3;}
        .story-img{max-width: 100% }
        .story-title{  width: 96%; margin: 0 2%; padding: 10px 0;  float: right;  font-size: 14px;  }
        .wrapper{}
        .head-wrapper{height:56px;}

    mark, .highlight {
        background-color: yellow;
        color: black;
        }
        .logoHolder{text-align: center; display: block; padding-top: 4px;}
        .articleEnd{text-align: center;border-bottom: 2px solid #f4f4f4;}
       .ad-holder {width:90%;margin: 0px auto 10px auto;}

        @media (max-width: 320px) {
            .ad-holder {width:94%;margin: 0px auto;}
        }

        .social-tools-wrapper {
          width:40%;
          margin:0 auto;
          border: 1px solid #cecece;
          border-radius: 3px;
          text-align: center;
        }

        .right-border {
          border-right: 1px solid #f0f0f0;
          padding: 6px 4%;
        }
        .facebook{color:#3b5998;}
        .twitter{color: #17abed;}
        .whatsapp{color: #57cf38;    padding-left: 4%;}
        .fa{font-size:1.6em;}

blockquote {
   border-left: 1px solid #008fea;
   margin: 0 auto;
   width: 87%;
   padding: 0 0 0 3%;
   font-family: opensansReg;
   font-size: 15px;
   margin-bottom: 20px;

}

.content-container amp-img{margin-top: 10px;}

.sw-video-container{
    max-width: 92%;
    padding: 10px 0;
    margin: 0px auto;
}

.sw-video-container p{
    margin-bottom: 5px;
}
.sw-video-title{
    font-family: inherit;
    font-size: 18px;
    color: black;
    padding-top: 0px;
    font-weight: bold;
}
.amp-sticky-ad-top-padding{
  height: 0;
}
amp-ad{
  margin: 0 auto;
}
</style>   
  </head>
  <body>
<amp-analytics type="googleanalytics">
<script type="application/json">
{
  "vars": {
    "account": "UA-87356165-1"
  },
  "triggers": {
    "trackPageview": {
      "on": "visible",
      "request": "pageview"
    }
  }
}
</script>
</amp-analytics>
<div class="head-wrapper">
    <header class="masthead" >
        <a class="logoHolder" href="http://www.veganfirst.com/?ref=amp"><amp-img class="logo" src="http://www.veganfirst.com/assetsNew/mobile/img/logo.png" width=80 height=48></amp-img></a>
    </header>

    <a class="navButton" tabindex="0">&#9776;</a> <span class="navClose" tabindex="0">&#9776;</span>
    <button class="navFrame">
        <nav id="main-sections-nav" class="sitenav">
            <ul id="sections-menu-off-canvas" class="side-nav">
                <li class="main-nav"> <a class="main-nav-item" href="http://www.veganfirst.com/article/category/food/?ref=amp">Food</a></li>
                <li><a class="main-nav-item" href="http://www.veganfirst.com/article/category/fashion-beauty">Fashion & Beauty</a></li>
 		<li><a class="main-nav-item" href="http://www.veganfirst.com/article/category/lifestyle">Lifestyle</a></li>
                <li><a class="main-nav-item" href="http://www.veganfirst.com/article/category/earth-travel">Earth & Travel</a></li>
                <li><a class="main-nav-item" href="http://www.veganfirst.com/article/category/fitness-nutrition">Fitness & Nutrition</a></li>
                <li><a class="main-nav-item" href="http://www.veganfirst.com/article/category/youth">Youth</a></li>                    
             
            </ul>
            
        </nav>
    </button>
    <button id="navscrim"></button>
    </div>


  <div class="wrapper">
  <div class="header-container">
   </div>



