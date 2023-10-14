<?php include("function.php");?>
<?php require("functions.php");?>
<?php include_once("functions.php");?>
<?php require_once("functions.php");?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNA - SFA: L3 Info 2022-2023</title>

    <link rel="stylesheet" href="mon-style.css">
</head>

<body>

    <?php
    for($i = 1; $i<=6; $i++){
        ecrireH($i);
    }
    ?>

    <?php
    for($i = 1; $i<=6; $i++){
        echo '
            <h' .$i . '>
                Titre de niveau ' .$i . '
            </h'.$i .' >
        ';
    }
    ?>

    <?php
    for($i = 1; $i<=6; $i++){
        echo <<<LICENCE3
            <h{$i}>
                Titre de niveau {$i}
            </h{$i}>
LICENCE3;
    }
    ?>
    <h1>
        Titre de niveau 1
    </h1>
    <h2>
        Titre de niveau 2
    </h2>
    <h3>
        Titre de niveau 3
    </h3>
    <h4>
        Titre de niveau 4
    </h4>
    <h5>
        Titre de niveau 5
    </h5>
    <h6>
        Titre de niveau 6
    </h6>
    <h1 id="titre-de-la-page" class="gros-titre">
        Titre de niveau 1
    </h1>
    RGB
    0 - 255
    0 - FF
    <h2>
        Titre de niveau 2
    </h2>

    <p>
        <a href="boots.html">Page </a>
    </p>
    <p>
        <a href="test.html">Test </a>
    </p>
    <p>
        <a href="https://www.google.com">Google</a>
    </p>
    <h2>
        Listes
    </h2>
    <h3>
        Listes non ordonnées
    </h3>
    <ul>
        <li>Prmier point</li>
        <li>Deuxième point</li>
        <li>Troisième point</li>
    </ul>
    <h3>
        Listes ordonnées
    </h3>
    <ol>
        <li>Prmier point</li>
        <li>Deuxième point</li>
        <li>Troisième point</li>
    </ol>
    <h2 class="gros-titre joli">
        Tableaux
    </h2>

    <table>
        <tr>
            <td>L1 C1</td>
            <td>L1 C2</td>
            <td>L1 C3</td>
            <td>L1 C4</td>
        </tr>
        <tr>
            <td>L2 C1</td>
            <td>L2 C2</td>
            <td>L2 C3</td>
            <td>L2 C4</td>
        </tr>
        <tr>
            <td>L3 C1</td>
            <td>L3 C2</td>
            <td>L3 C3</td>
            <td>L3 C4</td>
        </tr>
        <tr>
            <td>Ligne 4 colonne 1</td>
            <td>Ligne 4 colonne 2</td>
            <td>Ligne 4 colonne 3</td>
            <td>Ligne 4 colonne 4</td>
        </tr>
    </table>

</body>

</html>