<!-- declaration de mes variables -->
<?php 

//declaration variable servant à afficher completement la date
    $jour=date('d');
    $mois=date('m');
    $annee=date('Y');

    $heure=date('H');
    $minute=date('i');


//déclaration de la variable donnant info sur ma paersonne

    $data_json=file_get_contents("../data.json");
    
    $data=json_decode($data_json, true);

    $civilite=$data['etatCivil']['civilite'];

    $nom=$data['etatCivil']['nom'];
    
    $prenoms=$data['etatCivil']['prenoms'];

    $date2naissance=$data['etatCivil']['date2naissance'];

    $lieu2naissance=$data['etatCivil']['lieu2naissance'];

    $nationalite=$data['etatCivil']['nationalite'];

    $situationMatrimoniale=$data['etatCivil']['situationMatrimoniale'];

    $nce=$data['etatCivil']['nce'];

    $mobile=$data['etatCivil']['contacts']['mobile'];

    $email=$data['etatCivil']['contacts']['email'];

    $facebook=$data['etatCivil']['contacts']['facebook'];

    $Google=$data['etatCicil']['contacts']['google'];

    $Fax=$data['etatCivil']['contacts']['fax'];
    
    $titre=$data['titre'];


//déclaration de variable indiquand mes atouts

    $presentation[0]=$data['presentation']['1'];
    $presentation[1]=$data['presentation']['2'];
    $presentation[2]=$data['presentation']['3'];
    $presentation[3]=$data['presentation']['4'];

//déclaration des variables donnant information relative à mes diplomes

    $ecolecursus2022=$data['cursusScolaire']['2022']['ecole'];
    
    $diplomecursus2022=$data['cursusScolaire']['2022']['diplome'];

    $detailcursus2022=$data['cursusScolaire']['2022']['detail'];

    $ecolecursus20162017=$data['cursusScolaire']['2016-2017']['ecole'];

    $diplomecursus20162017=$data['cursusScolaire']['2016-2017']['diplome'];

    $detailcursus20162017=$data['cursusScolaire']['2016-2017']['detail'];

    $ecolecursus20132014=$data['cursusScolaire']['2013-2014 a']['ecole'];

    $diplomecursus20132014=$data['cursusScolaire']['2013-2014 a']['diplome'];

    $detailcursus20132014=$data['cursusScolaire']['2013-2014 a']['detail'];

    $diplomecursus20092010=$data['cursusScolaire']['2009-2010']['diplome'];

    $ecolecursus20092010=$data['cursusScolaire']['2009-2010']['ecole'];

    $detailcursus20092010=$data['cursusScolaire']['2009-2010']['detail'];



//déclaration de variables donnant echo à mes expériences pro

    $experienceprodate=$data['experienceProfessionnelles']['depuis 2018']['Missions']['2'];

    $experienceprotache=$data['experienceProfessionnelles']['depuis 2018']['Missions']['1'];

    $experienceproentreprise=$data['experienceProfessionnelles']['depuis 2018']['Entreprise'];

    $experiencepro20152016entreprise=$data['experienceProfessionnelles']['2015-2016']['Entreprise'];

    $experiencepro20152016mission=$data['experienceProfessionnelles']['2015-2016']['Missions']['1'];

    $experiencepro20152016date=$data['experienceProfessionnelles']['2015-2016']['Missions']['2'];
    
//déclaration variable compétences, centre d'interet et reseaux sociaux

    $Competences[0]=$data['Competences']['Informatique']['1'];

    $Competences[1]=$data['Competences']['Informatique']['2'];

    $Competences[2]=$data['Competances']['Informatique']['3'];

    $Competences[3]=$data['Competences']['Informatique']['4'];

    $Competences[4]=$data['Competences']['Informatique']['5'];

    $Competences[5]=$data['Competences']['Informatidue']['6'];

    $Competences[7]=$data['Competences']['Musicologie']['1'];

    $Competence[8]=$data['Competences']['Langue']['1'];

    $Competence[9]=$data['Competences']['Langue']['2'];

    $Competence[10]=$data['reseauxSociaux']['fb'];

    //declaration de mes loisir

    $Loisirs[0]=$data['Loisirs']['1'];
    $Loisirs[1]=$data['Loisirs']['2'];
    $Loisirs[2]=$data['Loisirs']['3'];
    $Loisirs[3]=$data['Loisirs']['4'];
     
    



?>