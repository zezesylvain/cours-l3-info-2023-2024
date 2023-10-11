<?php
$db = new PDO("mysql:host=reservation.sql;dbname=Espacemembre","root","");
if(isset($_POST["send"])){
  if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["telephone"]) && !empty($_POST["message"])){

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $telephone = htmlspecialchars($_POST["telephone"]);
    $message = htmlspecialchars($_POST["message"]);

    $insertUser = $db->prepare("INSERT INTO reservation(name,email,contact,message) VALUES(?,?,?,?)");
    $insertUser->execute(array($name,$email,$telephone,$message));

  }else{
    echo"veuillez remplir tous les champs";
  }
}



?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Contacts</title>
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
    <script src="js/forms.js"></script>

    <script>
	$(document).ready(function() {	
      //  Initialize Backgound Stretcher
      $('BODY').bgStretcher({
        images: ['images/slide-1.jpg'], 
		imageWidth: 1600, 
		imageHeight: 964, 
		resizeProportionally:true	
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
            <li><a href="index-3.php">Gallerie</a></li>
            <li class="current"><a href="index-4.php">Contacts</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      </div>
  </header>
  
  <!--==============================content=================================-->
  
   <section id="content">  
    <div class="main-block">
    <div class="container_12">
          <div class="wrapper border-vert">
        <article class="grid_5">
              <h3>Nos Contacts</h3>
              <div class="map">
              <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"> </iframe>
            </div>
             
             <dl class="address">
                <dt>BEAUTY CENTER <br>
                ABJ YOP MAMIE ADJOUA ,<br>
                AU ROND POINT DE LA CITE.</dt>
                <dd> <span>Freephone:</span> +225 07 68 10 10 08</dd>
                <dd> <span>Telephone:</span> +225 01 41 18 75 92 </dd>
                <dd> <span>FAX:</span> +225 27 23 415 034 </dd>         
                <dd> <span>Email:</span> andy.30@yahoo.com </dd>        
              </dl>
        
         </article>
        <article class="grid_5 prefix_2">
              <h3>Reservations </h3>
             
    <form id="contact-form" method="POST">
          <div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong> </div>
          <fieldset>
            <div>
              <label class="name">
                <input type="text" name="name" value="Name:">
                <br>
                <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
            </div>
            <div>
              <label class="email">
                <input type="email" name="email" value="E-mail:">
                <br>
                <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
            </div>
            <div>
              <label class="phone">
                <input type="text" name="telephone" value="Phone:">
                <br>
                <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
            </div>
            <div>
              <label class="message">
                <textarea name="message">Message:</textarea>
                <br>
                <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
            </div>
            <div class="buttons-wrapper"><a class="button" data-type="reset">Clear</a><a class="button" name="send" data-type="submit">Send</a></div>
          </fieldset>
        </form>
    
     </article>
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