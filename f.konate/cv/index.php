<?php
$data = json_decode(file_get_contents('data.json'), true);
foreach($data AS $k => $v):
	$$k = $v ;
endforeach;
foreach($etatCivil AS $k => $v):
	$$k = $v ;
endforeach;
foreach($titre AS $k => $v):
	$$k = $v ;
endforeach;
foreach($contact AS $k => $v):
	$$k = $v ;
endforeach;
foreach($cursusScolaire AS $k => $v):
	$$k = $v ;
endforeach;
foreach($Loisirs AS $k => $v):
	$$k = $v ;
endforeach;
foreach($Langue AS $k => $v):
	$$k = $v ;
endforeach;
foreach($Competences AS $k => $v):
	$$k = $v ;
endforeach;
?>



<!DOCTYPE html>
<html lang="fr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>CV de <?php echo $nom;?>  </title>
</head>
<body>
    <div class="container">
        <div class="left_side">
            <div class="profileText">
                <div class="imgBx">
                    <img src="img/photo.jpg" width="200" height="200" alt="photoDeprofil">
                </div>
                <h2><?php echo "$nom $prenoms";?> <br><span><?php echo "$titre";?></span></h2>
            </div>

            <div class="contactInfo">
                <h3 class="title">Coordonnées</h3>
                <ul>
                    <li>
                        <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <span class="text"> mobile : +225 07 79 57 68 00</span>
                    </li>
                     
                     <li>
                        <span class="icon"><i class="fa fa-id-card" aria-hidden="true"></i></span>
                        <span class="text">N°Etudiant : CI 0219054015</span>
                    </li>
                      
                      <li>
                        <span class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <span class="text">DateNaissance : 2002-10-22</span>
                    </li>
                      
                      <li>
                        <span class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <span class="text">Lieu de Naissance : Man</span>
                    </li>
                       
                       <li>
                        <span class="icon"><i class="fa fa-flag" aria-hidden="true"></i></span>
                        <span class="text">Nationalité : Ivoirienne</span>
                    </li>
                       
                       <li>
                        <span class="icon"><i class="fa fa-facebook-square" aria-hidden="true"></i></span>
                        <span class="text">Facebook</span>
                    </li>
                    
                    <li>
                        <span class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></span>
                        <span class="text"><a href="https://l3info-2021.una-ufrsfa.ci/anoukre.ange/cv/">DJAZZ_CRAMER</a></span>
                    </li>
                       
                    <li>
                        <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                        <span class="text">Domicile : Yopougon</span>
                    </li>
                    
                    <li>
                        <span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        <span class="text">konatéfousseny@gmail.com</span>
                    </li>
                    
                </ul>
            </div>


            <div class="contactInfo language">
                <h3 class="title">Langues</h3>
                <ul>
                    <li>
                        <span class="text">Francais</span>
                        <span class="percent">
                            <div style="width: 90%;"></div>
                        </span>
                        
                    </li>
                    <li>
                        <span class="text">Anglais</span>
                        <span class="percent">
                            <div style="width: 25%;"></div>
                        </span>
                    </li>
                    <li>
                        <span class="text">Espagnol</span>
                        <span class="percent">
                            <div style="width: 55%;"></div>
                        </span>
                    </li>
                    
                </ul>

            </div>

        </div>

        

        <div class="right_side">
            <div class="about">
                <h2 class="title2">Profile</h2>
                <p>KONATÉ FOUSSENY,j'ai 21 ans née a Treichville (Abidjan-COTE D'IVOIRE). <br> 
                  l'ojectif pour mon projet d'etude est de decrocher un master en genie informatique, qui me permettra par la suite de poursuivre
                  mon projet professionnel qui est d'etre expert en hacking. 
                    </p>
            </div>
            <div class="about1">
                <h2 class="title2">Parcours</h2>
                <div class="Box">
                    <div class="annee">
                        <h5>2021 - 2022</h5>
                        <h5>Université NANGUI ABROUA</h5>
                    </div>
                    <div class="text">
                        <h4 class="espace">LICENCE Informatique en cours</h4>
                    </div>
                </div>
                <div class="Box">
                    <div class="annee">
                        <h5>2019 - 2021</h5>
                        <h5>Université NANGUI ABROUA</h5>
                    </div>
                    <div class="text">
                        <h4 class="espace">Diplome d'Etude Universitaire (DEUG 2) en cours Informatique</h4>
                        
                    </div>
                </div>
                <div class="Box">
                    <div class="annee">
                        <h5>2017 - 2018</h5>
                        <h5>Lycée Moderne de Man</h5>
                    </div>
                    <div class="text">
                        <h4 class="espace1">Baccalauréat D</h4>
                    </div>
                </div>
                <div class="Box">
                    <div class="annee">
                        <h5>2014 - 2015</h5>
                        <h5>Lycée Moderne de Man</h5>
                    </div>
                    <div class="text">
                        <h4 class="espace1">BEPC</h4>
                    </div>
                </div>
                <div class="about skills">
                    <h2 class="title2">Competences</h2>
                    <div class="box">
                        <h4>Html</h4>
                        <div class="percent">
                            <div style="width: 92%;"></div>
                        </div>
                    </div>
                    <div class="box">
                        <h4>CSS</h4>
                        <div class="percent">
                            <div style="width: 60%;"></div>
                        </div>
                    </div>
                    <div class="box">
                        <h4>JavaScript</h4>
                        <div class="percent">
                            <div style="width: 30%;"></div>
                        </div>
                    </div>
                    <div class="box">
                        <h4>PHP</h4>
                        <div class="percent">
                            <div style="width: 40%;"></div>
                        </div>
                    </div>
                    <div class="box">
                        <h4>Python</h4>
                        <div class="percent">
                            <div style="width: 60%;"></div>
                        </div>
                    </div>
                    <div class="box">
                        <h4>Java</h4>
                        <div class="percent">
                            <div style="width: 55%;"></div>
                        </div>
                    </div>

                </div>
                <div class="about loisir">
                    <h2 class="title2">Loisirs</h2>
                    <ul>
                        <li><i class="fa fa-tint" aria-hidden="true"></i>Natation</li>
                        <li><i class="fa fa-futbol-o" aria-hidden="true"></i>Football</li>
                        <li><i class="fa fa-gamepad" aria-hidden="true"></i>e-Sport</li>
                    </ul>
                </div>
        </div>
    </div>

</div></body></html>
