

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <!--
    Modified from the Debian original for Ubuntu
    Last updated: 2016-11-16
    See: https://launchpad.net/bugs/1288690
  -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Cv-Franck Obité</title>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
        <!-- inclusion des variables et fonctions du site -->
        
        <?php
            include_once('variable.php');
                
                
                
        ?> 
        <div class="main_page">
            <div class="page_header floating_element">
                <img id="Photo" src="photo.jpg" alt="" class="floating_element"/>
                <span class="floating_element">
                    <div class="row"> 
                        <?php echo  $nom. " ". $prenoms ;?> <br>
                        <?php echo $data['etatCivil']['contacts']['email'] ;?> <br>
                        <?php echo $mobile ;?>
                        
                    </div>
                </span>
            </div>     
            <div class="content_section floating_element"> 
                <div class="section_header section_header_red">
                    <div id="about"></div>
                    <hr class="ligth">
                    ATOUTS
                    <hr class="ligth">
                </div>
                <div class="content_section_text"> 
                    <p>
                        <ul>
                            <li>
                                <tt>   
                                      <?php echo $presentation[0] ;?> <br>
                                
                                </tt>
                            </li>

                            <li>
                                <tt> <?php echo  $presentation[1] ;?></tt> <br>
                                    

                            <li>
                                <tt> <?php echo  $presentation[2] ;?></tt> <br>
                                    
                           
                            </li>

                            <li>
                           
                                <tt>
                                     <?php echo  $presentation[3] ;?> 
                                    
                                </tt>
                            </li>
                        </ul>
                    <p>       
                </div>
                <div class="section_header">
                    <div id="changes"></div>
                        <hr class="ligth">
                        COMPETENCES
                        <hr class="ligth">    
                    </div>
                <div class="content_section_text"> <br>
                

                    <p><?php echo $Competences[4] ;?></p>
                    <div id="style">
                        <div style="width: 80%; height: 100%; background-color: orange;"></div>
                    </div><br>
                    
                    <p><?php echo $Competences[0] ;?></p>
                    <div id="style">
                        <div style="width: 80%; height: 100%; background-color: orange;"></div>
                    </div> <br>
                    <p><?php echo $Competences[1] ;?></p>
                    <div id="style">
                        <div style="width: 70%; height: 100%; background-color: orange;"></div>
                        </div><br>
                    </div>

                    <div class="section_header">
                        <div id="docroot"></div>
                        <hr class="ligth">
                        DIPLOMES & FORMATIONS
                        <hr class="ligth">
                    </div>

                    <div class="content_section_text">
                        <p>
                            <ul>
                                <li>
                                    <tt>   
                                        <h2>  <?php echo $detailcursus2022 ;?></h2> <br>
                                        <?php  echo $diplomecursus2022 ;?> <br> <br>
                                        <?php echo $ecolecursus2022?>
                                    </tt>
                                </li>

                                <li>
                                    <tt>
                                        <h2> <?php echo  $detailcursus20162017;?></h2> <br>
                                        <?php echo $diplomecursus20162017 ;?> <br> <br>
                                        <?php echo $ecolecursus20162017 ;?> <br>
                                    </tt> 
                           
                                </li>

                                <li>
                                    <tt>
                                        <h2> <?php echo  $detailcursus20132014 ;?></h2> <br>
                                        <?php echo  $diplomecursus20132014;?> <br> <br>
                                        <?php echo  $ecolecursus20132014 ;?>
                                    </tt>
                           
                                </li>

                                <li>
                           
                                    <tt>
                                        <h2> <?php echo  $detailcursus20092010 ;?></h2><br>
                                        <?php echo  $diplomecursus20092010 ;?> <br> <br>
                                        <?php echo  $ecolecursus20092010 ;?> <br>
                                    </tt>
                                </li>
                            </ul>
                        </p>
 
                    </div>

                    <div class="section_header">
                        <div id="bugs"></div>
                        <hr class="ligth">
                        EXPERIENCES PROFESSIONNELLES
                        <hr class="ligth">
                    </div>
                    <div class="content_section_text">
                        <p>
                            <ul>
                                <li>
                                    <tt>   
                                        <h2>  <?php echo $experienceprodate ;?></h2> <br>
                                        <?php  echo $experienceproentreprise ;?> <br> <br>
                                        <?php echo $experienceprotache; ?> <br>
                                    </tt>
                                </li>
                                <li>
                           
                                    <tt>
                                        <h2> <?php echo $experiencepro20152016date ;?></h2><br>
                                        <?php echo  $experiencepro20152016entreprise ;?> <br> <br>
                                        <?php echo  $experiencepro20152016mission ;?> <br>
                                    </tt>
                                </li>
                            </ul>
                        <p>       
                    </div>
                    <div class="section_header">
                        <div id="bugs"></div>
                        <hr class="ligth">
                        LANGUES
                        <hr class="ligth">
                    </div>
                    <div class="content_section_text"> <br>
                        <p><?php echo $Competence[8] ;?></p>
                        <div id="style">
                            <div style="width: 80%; height: 100%; background-color: orange;"></div>
                        </div> <br><br>
                        <p><?php echo $Competence[9] ;?></p> 
                        <div id="style">
                            <div style="width: 50%; height: 100%; background-color: orange;"></div>
                        </div> <br>                                                                   
                    </div>
                    <div class="section_header">
                        <div id="bugs"></div>
                        <hr class="ligth">
                        CENTRES D'INTERETS
                        <hr class="ligth">
                    </div>
                    <div class="content_section_text"> 
                        <p>
                            <ul>
                                <li>
                                    <tt>   
                                        <h2>  <?php echo $Loisirs[0] ;?></h2>
                                
                                    </tt>
                                </li>

                                <li>
                                    <tt><h2> <?php echo $Loisirs[1] ;?></h2></tt> 
                           
                                </li>

                                <li>
                                    <tt><h2> <?php echo  $Loisirs[2] ;?></tt>
                           
                                </li>

                                <li>
                           
                                    <tt>
                                        <h2> <?php echo  $Loisirs[3] ;?>
                                    </tt>
                                </li>
                            </ul>
                        
                        </p>
                    </div>
                </div>
            </div>
            <div class="srkl"> </div> 
            <!-- inclusion du bas de la page -->
            <?php include_once('footer.php') ?>
        </div>
    </body>
</html>

