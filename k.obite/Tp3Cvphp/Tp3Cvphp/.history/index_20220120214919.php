<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cv-Franck Obité</title>
    <link rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    >
</head>

<body class="d-flex flex-column min-vh-100"> 

    <div class="container">
    
    
        <main  style= "box-shadow: 0px 0px 0px rgb(196, 196, 196), 0px 0px 0px rgb(196, 196, 196); margin: auto; width: 100%; height: 100%;">

    
        

            <!-- inclusion de l'entête du site -->

            <?php include_once('header.php'); ?>
              
             
            <!-- inclusion des variables et fonctions du site -->
        
              <?php
                include_once('variable.php');
                include_once('fonction.php');
                
                
              ?> 
             
              <h1>CV- <?php echo $nom. " ". $data['personne']['prenom'] ;?> </h1>
              
            <!-- entete de mo cv -->
            
            <div class="row"> 
                <div class="col"> <br> <br>
                    <div style= "eight: 160px; padding-top: 10px; color: white; background-color: rgb(74, 77, 42);">
                        <img  style="float: left; width: 115px; height: 115px; padding-left: 20px;" class="image7" src="image7.jpg" alt="" >
                    
                        <div class="row"> 
                            <div class="col-md-6">
                                <h3 style="color: rgb(229, 139, 21); text-align: left;"><?php echo $nom. " ". $data['personne']['prenom'] ;?></h3><br>
                                <h2 style="color: rgb(229, 139, 21); text-align: left;" ><?php echo $data['personne']['profession'] ;?></h2> 
                            </div>
                            <div class="col-md-6">

                                <h3 style="color: rgb(229, 139, 21); text-align: right;"> <img style="width: 30px;height: 30px;" src="g.png.png" class="info"><span style="margin-left: 5%"><?php echo $data['personne']['statu'] ;?></span></h3><br>
                                <h2 style="color: rgb(229, 139, 21); text-align: right;" ><img style="width: 40px;height: 40px;" src="tele.png (2).png" class="info"><span style="margin-left: 5%"><?php echo $data['personne']['contact'] ;?></span></h2>

                            </div>
                        </div>   
                    </div>
                </div>
            </div>
            <div class="row">
                <div style= "text-align: left"; class="col-md-6">
                    <section style="background-color: #fff; float: left; width: 500px;">
                        <hr style="order-top: 2px solid #13c3ba; width: 90%; margin-top: .8rem; margin-bottom: 1rem;">
                        <h4 style="margin-left: 15%; color: #13c3ba; letter-spacing: .1rem; font-size: 25px;">ATOUTS</h4>
                        <hr style="order-top: 2px solid #13c3ba; width: 90%; margin-top: .8rem; margin-bottom: 1rem;">
                    </section>
                </div> 
                <div style= "text-align: right"; class="col-md-6" >   
                    <section style=" background-color: #fff; float: right; width: 500px;">
                        <hr style="order-top: 2px solid #13c3ba; width: 90%; margin-top: .8rem; margin-bottom: 1rem;">
                        <h4 style="margin-right: 20%; color: #13c3ba; letter-spacing: .1rem; font-size: 25px;" >COMPETENCES</h4>
                        <hr style="order-top: 2px solid #13c3ba; width: 90%; margin-top: .8rem; margin-bottom: 1rem;" class="ligth">
                    </section>
                </div> 
            </div>
            <div class="row">
                <div style= "text-align: left"; class="col-md-6">
                    <section style="background-color: #fff; float: left; width: 500px;">
                        <div style="display: grid; grid-template-columns:repeat(2, 1fr); margin-left: 15%;" class="atouts">
                            <div><?php echo $atouts ;?></div><br><br>
                            <div><?php echo $data['atouts']['atdd'] ;?></div>
                        </div>
                    </section>
                </div>
                <div style= "text-align: right"; class="col-md-6" >
                    <section style=" background-color: #fff; float: right; width: 500px;">
                        <div style="padding: 0; width: 40%; margin-righ: 20%;">
                            <div style="margin-top: 20px;" class="po">
                                <p> <?php echo $competence ;?></p>
                                <div style="background-color: #fff; border: 2px solid #ccc; width: 300px; height: 7px;"  class="cool">
                                    <div style="width: 80%; height: 100%; background-color: orange;" class="inner"></div>
                                </div>
                            </div> 
                        </div>
                    </section>
                </div>    
            </div>
            
            
            <div style="display: flex; justify-content: space-between; margin-top: 25px; background-color: #fff; width: 100%;" class="srkl"> </div>
       
    
            <!-- inclusion du bas de la page -->

            <?php include_once('footer.php') ?>
        </main>
    </div>
</body>
</html>