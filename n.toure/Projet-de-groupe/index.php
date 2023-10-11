<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Acceuil</title>
    <meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/style.css">
     <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon" />
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/bgstretcher.js"></script>
    <script>
	$(function(){
      //  Initialize Backgound Stretcher
      $('BODY').bgStretcher({
        images: ['images/slide-1.jpg','images/slide-2.jpg','images/slide-3.jpg'], 
		imageWidth: 1600, 
		imageHeight: 964, 
		resizeProportionally:true,
			slideDirection: 'N',
			slideShowSpeed: 1000,
			transitionEffect: 'fade',
			sequenceMode: 'normal',		
			pagination: '#nav'
	
       });	
    });
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
<div class="extra-block1"> 
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
            <li class="current"><a href="index.php">Acceuil</a></li>
            <li><a href="index-1.php">A propos de nous</a></li>
            <li><a href="index-2.php">Services</a></li>
            <li><a href="index-3.php">Gallerie</a></li>
            <li><a href="index-4.php">Contacts</a></li>
          </ul>
       </nav>
        <div class="clear"></div>
      </div>
    </div>
  </header>
 </div>
<div class="block">
      <div class="nav-buttons">
    <div id="nav">&nbsp;</div>
    <br><br><br>
  </div>
      <div class="row-1">
    <div class="container_12">
          <div class="wrapper">
        <article class="grid_4">
              <figure class="box-1"><img src="images/2.1.jpg" alt="" />
            <figcaption>Coiffure Homme<a href="index-3.php"></a></figcaption>
          </figure>
            </article>
        <article class="grid_4">
              <figure class="box-1"><img src="images/3.1.JPG" alt="" />
            <figcaption>Coiffure Femme <a href="index-3.php"></a></figcaption>
          </figure>
            </article>
        <article class="grid_4">
             <figure class="box-1"><img src="images/page2-img2.jpg" alt="" />
            <figcaption>Divers <a href="index-3.php"></a></figcaption>
          </figure>
            </article>
      </div>
     </div>
  </div>
      
      <!--==============================footer================================-->
   <footer>
    <div class="main aligncenter">
        <div class="privacy">groupe 8 projet web    &copy; 2022 <span>|</span> <a href="index.php" rel="nofollow">retour acceuil</a> <span> remerciement au DR ZEZE   </span> <strong>Reproduction interdite </div>
        </div>
  </footer>
 </div>
</body>
</html>