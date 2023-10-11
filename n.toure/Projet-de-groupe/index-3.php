<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Gallerie</title>
    <meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/style.css">
     <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/jquery.fancybox.css" >
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/bgstretcher.js"></script>
    <script src="js/jquery.elastislide.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script>
	$(document).ready(function() {	
      //  Initialize Backgound Stretcher
      $('BODY').bgStretcher({
        images: ['images/slide-1.jpg'], 
		imageWidth: 1600, 
		imageHeight: 964, 
		resizeProportionally:true	
       });
	$('#carousel').elastislide({imageW :300,margin: 20,minItems: 3});   
	$('.magnifier').fancybox();   
		

	$(".view").hover(
	function(){$(this).find("img").stop().animate({opacity:0.5},"normal")},
	function(){$(this).find("img").stop().animate({opacity:1},"normal")})
	})  
	     	
    </script>

    <!--[if lt IE 8]>
   <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
    <!--[if lt IE 9]>   
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
   <script src="js/html5shiv.js"></script>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>  
  <![endif]-->

    </head>
    <body>
<div class="extra-block"> 
      <!--==============================row-top=================================-->
      <div class="row-top">
    <div class="main">
          <ul class="list-soc">
            <li><a href="facebbok.com"><img alt="" src="images/soc-icon1.png"></a></li>
            <li><a href="tweeter.com"><img alt="" src="images/soc-icon2.png"></a></li>
      </ul>
        </div>
  </div>
      
      <!--==============================header=================================-->
      
   <header>
    <div class="row-nav">
        <div class="main">
        <h1 class="logo"><a href="index.php"><img alt="Beauty" src="images/logo.png"></a></h1>
        <nav>
           <ul class="menu">
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="index-1.php">A propos de nous</a></li>
            <li><a href="index-2.php">Services</a></li>
            <li class="current"><a href="index-3.php">Gallerie</a></li>
            <li><a href="index-4.php">Contacts</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      </div>
  </header>
  
    <!--==============================content=================================-->
    <section id="content">    
    <div class="main-block">
    <div class="main">
     <h3>Notre Gallerie</h3> <p>faites vous plaisr!!</p>
        
   <div id="carousel" class="es-carousel-wrapper ">
          <div class="es-carousel">
            <ul>
             <li>                    
                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page4-img1.jpg" alt="" /><span></span></a> </figure>   
                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page4-img4.jpg" alt="" /><span></span></a></figure>  
                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/37.jpg" alt="" /><span></span></a> </figure>  
                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/12.jpg" alt="" /><span></span></a> </figure>                       
              </li>
              
              <li>             
                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page4-img2.jpg" alt="" /><span></span></a> </figure>   
                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page4-img5.jpg" alt="" /><span></span></a> </figure>  
                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/35.jpg" alt="" /><span></span></a> </figure>   
                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/10.jpg" alt="" /><span></span></a> </figure> 
                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/36.jpg" alt="" /><span></span></a> </figure>
              </li> 
              
              <li>             
                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page4-img3.jpg" alt="" /><span></span></a> </figure>   
                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page4-img6.jpg" alt="" /><span></span></a> </figure> 
                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/2.jpg" alt="" /><span></span></a> </figure>   
                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page4-img5.jpg" alt="" /><span></span></a> </figure>  
              </li> 
             <li>                    
                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page4-img1.jpg" alt="" /><span></span></a> </figure>   
                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page4-img4.jpg" alt="" /><span></span> </a></figure> 
                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/5.jpg" alt="" /><span></span></a> </figure>   
                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/6.jpg" alt="" /><span></span></a> </figure> 
              </li>
              
              <li>             
                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page4-img2.jpg" alt="" /><span></span></a> </figure>   
                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page4-img5.jpg" alt="" /><span></span></a> </figure>  
                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/9.jpg" alt="" /><span></span></a> </figure>   
                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/10.jpg" alt="" /><span></span></a> </figure> 
              </li>


              <li>             
                    <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page3-img5.jpg" alt="" /><span></span></a> </figure>   
                    <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/1.jpg" alt="" /><span></span></a> </figure>  
                    <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/2.jpg" alt="" /><span></span></a> </figure>   
                    <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page4-img5.jpg" alt="" /><span></span></a> </figure> 
              </li>

              <li>             
                   <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/3.jpg" alt="" /><span></span></a> </figure>   
                    <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/4.jpg" alt="" /><span></span></a> </figure> 
                    <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/7.jpg" alt="" /><span></span></a> </figure>   
                    <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/8.jpg" alt="" /><span></span></a> </figure>  
              </li>
    
              <li>             
                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/5.jpg" alt="" /><span></span></a> </figure>   
                    <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/6.jpg" alt="" /><span></span></a> </figure>  
                    <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/13.jpg" alt="" /><span></span></a> </figure>   
                    <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/14.jpg" alt="" /><span></span></a> </figure>  
             </li>
    
                        <li>             
                              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/9.jpg" alt="" /><span></span></a> </figure>   
                              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/10.jpg" alt="" /><span></span></a> </figure>  
                              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/11.jpg" alt="" /><span></span></a> </figure>   
                                <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/12.jpg" alt="" /><span></span></a> </figure> 
                        </li>

                              <li>             
                                    <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/15.jpg" alt="" /><span></span></a> </figure>   
                                    <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/16.jpg" alt="" /><span></span></a> </figure> 
                                    <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/17.jpg" alt="" /><span></span></a> </figure>   
                                      <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/18.jpg" alt="" /><span></span></a> </figure> 
                             </li>
                                  <li>             
                                        <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/19.jpg" alt="" /><span></span></a> </figure>   
                                        <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/20.jpg" alt="" /><span></span></a> </figure> 
                                        <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/21.jpg" alt="" /><span></span></a> </figure>   
                                          <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/22.jpg" alt="" /><span></span></a> </figure>   
                                  </li>
                                    <li>             
                                          <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/21.jpg" alt="" /><span></span></a> </figure>   
                                          <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/22.jpg" alt="" /><span></span></a> </figure>  
                                          <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/23.jpg" alt="" /><span></span></a> </figure>   
                                            <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/24.jpg" alt="" /><span></span></a> </figure>
                                    </li>
                                      <li>             
                                            <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/23.jpg" alt="" /><span></span></a> </figure>   
                                            <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/24.jpg" alt="" /><span></span></a> </figure> 
                                            <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/25.jpg" alt="" /><span></span></a> </figure>   
                                              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/26.jpg" alt="" /><span></span></a> </figure>  
                                     </li>
                                        <li>             
                                              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/25.jpg" alt="" /><span></span></a> </figure>   
                                              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/26.jpg" alt="" /><span></span></a> </figure>  
                                              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/27.jpg" alt="" /><span></span></a> </figure>   
                                                <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/28.jpg" alt="" /><span></span></a> </figure> 
                                         </li>
                                    
                                            <li>             
                                                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/29.jpg" alt="" /><span></span></a> </figure>   
                                                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/30.jpg" alt="" /><span></span></a> </figure>
                                                  <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/31.jpg" alt="" /><span></span></a> </figure>   
                                                    <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/32.jpg" alt="" /><span></span></a> </figure>  
                                             </li>
                                             
                                                <li>     
                                                                <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/9.jpg" alt="" /><span></span></a> </figure>   
                                                                <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/10.jpg" alt="" /><span></span></a> </figure>          
                                                                <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/33.jpg" alt="" /><span></span></a> </figure>   
                                                                <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/34.jpg" alt="" /><span></span></a> </figure>  
                                                  </li>


            </ul>
          </div>
        </div>
     </div>
  </div>
 </section> 
  
 </div>
<div class="block"> 
     <!--==============================footer================================-->
     <footer>
      <div class="main aligncenter">
          <div class="privacy">groupe 8 projet web    &copy; 2022 <span>|</span> <a href="index.php" rel="nofollow">retour acceuil</a> <span> remerciement au DR ZEZE   </span> <strong>Reproduction interdite </div>
          </div>
    </footer>
   </div>
  </body>
  </html>