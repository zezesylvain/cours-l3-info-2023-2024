<?php
    error_reporting(E_ALL); 
    ini_set("display_errors", 1); 

    $data = file_get_contents('data.json');
    $dataPhp = json_decode($data, true);

    extract($dataPhp);
    /*
    $datajson = json_encode($dataPhp);
    $fp = fopen('data.json', 'w');
    fwrite($fp, $datajson);
    fclose($fp);

<pre>
    <?php var_dump($dataPhp);?>
</pre>
//*/
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV de <?php echo $etatCivil['civilite'] . " " . $etatCivil['prenoms'] . " " . $etatCivil['nom'] . " "; ?>
    </title>
</head>

<body>
    <h1>
        CV de <?php echo $etatCivil['civilite'] . " " . $etatCivil['prenoms'] . " " . $etatCivil['nom'] . " "; ?>
    </h1>
    <h2>
        Expériences professionnelles
    </h2>
    <?php
        foreach($experienceProfessionnelles AS  $ep):
    ?>
    <h3>
        <?php echo $ep["periode"];?>
    </h3>
    <h3>
        <?php echo $ep["entreprise"];?>
    </h3>
    <h3>
        <?php echo $ep["titre"];?>
    </h3>
    <?php if(count($ep['missions'])) :?>
    <h3>
        Missions
    </h3>
    <?php foreach($ep['missions'] AS $mission): ?>
    <h4>
        <?php  echo $mission["description"];?>
    </h4>
    <p>
        <span style="font-weight: bold;;">Outils: </span>
        <?php  echo $mission["outils"];?>
    </p>
    <?php endforeach;?>
    <?php endif;?>

    <?php
    endforeach;
    ?>
</body>

</html>