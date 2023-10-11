<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecv.css">
    <title>NAMI CV</title>
</head>
<body>
    <div class="haut">
        <p>Bonjour, bienvenue sur mon porte folio !</p>
    </div>
        
        <?php 
            $json = json_decode(file_get_contents("data.json"), true);
            //var_dump($json);
        ?>

    <br>
    <br>
    <br>
    <br>
    <div class="cv_cadre">
        <div class="leftcv">
            <header> 
                <div class="photo"></div>
                <div class="name"><?php echo $json["infoperso"]["nom"] ?></div>
                <p class="niveau"></br><strong><?php echo $json["infoperso"]["niveau"] ?></strong>
              <br><strong><?php echo $json["infoperso"]["nation"] ?></strong>
              <br><strong><?php echo $json["infoperso"]["matrimo"] ?></strong></p>
            </header>
            
        <h3>COORDONNEES</h3>
        <P>
            <STRONG>Adresse:     </STRONG> <?php echo $json["coordonnés"]["adresse"] ?>
            <br><strong>E-mail:     </strong><?php echo $json["coordonnés"]["mail"] ?>
            <br><strong>Contacts:     </strong><?php echo $json["coordonnés"]["contact"] ?>
            <br><strong>Whatsapp:     </strong><?php echo $json["coordonnés"]["whatsapp"] ?>
            </br><strong>Facebook:     </strong><?php echo $json["coordonnés"]["blog"] ?>
           
        </P>

        <h3>CULTURE INFORMATIQUE</h3>
        
          <table>
              <tr> <td colspan="2" class="info">Bureautique</td></tr>
                <tr>
                    <td>WORD</td>
                    <td><progress value="<?php echo $json["informatique"]["word"] ?>" max="100"></progress></td>
                </tr>
                   <tr>
                      <td>EXCEL</td>
                     <td><progress value="<?php echo $json["informatique"]["excel"] ?>" max="100"></progress></td>
                   </tr>
                      <tr>
                        <td>PUBLISHER</td>
                        <td><progress value="<?php echo $json["informatique"]["publisher"] ?>" max="100"></progress></td>
                      </tr>   
                         <tr><td colspan="2" class="info">Infographie</td></tr>
                            <tr>
                               <td>PHOTOSHOP</td>
                               <td><progress value="<?php echo $json["informatique"]["photoshop"] ?>" max="100"></progress></td>
                             </tr>
                                 <tr>
                                     <td>ILLUSTRATOR</td>
                                     <td><progress value="<?php echo $json["informatique"]["illustrator"] ?>" max="100"></progress></td>
                                  </tr>
                                       <tr>
                                         <td>PREMIER PRO</td>
                                         <td><progress value="<?php echo $json["informatique"]["premier pro"] ?>" max="100"></progress></td>
                                        </tr>
                                           <tr>
                                              <td>INDESIGN</td>
                                              <td><progress value="<?php echo $json["informatique"]["indesign"] ?>" max="100"></progress></td>
                                              </tr>
                                                 <tr>
                                                     <td colspan="2" class="info">Programmation</td>
                                                 </tr>

                                                  <tr>
                                                     <td>HTML</td>
                                                     <td><progress value="<?php echo $json["informatique"]["html"] ?>" max="100"></progress></td>
                                                  </tr>
                                                      <tr>
                                                         <td>CSS</td>
                                                         <td><progress value="<?php echo $json["informatique"]["css"] ?>" max="100"></progress></td>
                                                      </tr>
                                                          <tr>
                                                              <td>PHP</td>
                                                             <td><progress value="<?php echo $json["informatique"]["php"] ?>" max="100"></progress></td>
                                                          </tr>
            </table>
        



        </div>
            <div class="righcv">
                <h3>CURSUS SCOLAIRE ET ACADEMIQUE</h3>
                    <p><strong>2010-2011:     </strong><?php echo $json["diplome"]["diplome1"] ?>
                    <br><strong>2015-2016:     </strong><?php echo $json["diplome"]["diplome2"] ?>
                    </br><strong>2017-2018:     </strong><?php echo $json["diplome"]["diplome3"] ?>
                    </br><strong>2019-2020:     </strong><?php echo $json["diplome"]["diplome4"] ?>
                    </p>

                   <h3>ATOUTS ET QUALITES</h3>
                   <p>
                   <Ul>
                       <li><?php echo $json["atouts"]["atout1"] ?></li>
                       <li><?php echo $json["atouts"]["atout2"] ?></li>
                       <li><?php echo $json["atouts"]["atout3"] ?></li>
                       <li><?php echo $json["atouts"]["atout4"] ?></li>
                   </Ul>
                   </p>
               <h3>EXPERIENCES PROFESSIONNELLES</h3>
                   <p><strong>Juillet 2020:     </strong><?php echo $json["experience"]["experience1"] ?>
                   <br><strong>Aout2020:     </strong><?php echo $json["experience"]["experience2"] ?>
                   </br><strong>Janvier-Juin 2020:     </strong><?php echo $json["experience"]["experience3"] ?>
                    </p>
                <h3>NIVEAU LINGUSTIQUE</h3>
                <p><strong>Francais:     </strong><?php echo $json["langue"]["langue1"] ?>
                    <br><strong>Anglais:    </strong><?php echo $json["langue"]["langue2"] ?>
                    </br><strong>Allemand:     </strong><?php echo $json["langue"]["langue3"] ?>
                    </p>
                   <br>
                   <br>
                   <p class="fin">Certifié sincère</p>
             </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
</body>
</html>