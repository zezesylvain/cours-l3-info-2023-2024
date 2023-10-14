<?php include("confi.php");?>
<?php require_once("functions.php");?>
<?php require_once("traitement.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNA - SFA: L3 Info 2022-2023</title>
    <link rel="stylesheet" href="bootstrap-5.3.2/dist/css/bootstrap.css">
    <link rel="stylesheet" href="mon-style.css">
    <script type="text/javascript">
    //alert('Bonjour les gens');
    document.write('Bonjour les gens');

    function test(message) {
        alert(message);
    }
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 entete">

                <h1>
                    Slider
                </h1>
            </div>
            <div class="col-12 menu">

                <button class="btn btn-danger rounded-pill px-3" type="button" onclick="alert('Nous sommes jeudi')">
                    Primary
                </button>

            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 gauche">

                <h3 onclick="test('COOOL!')">
                    Menu gauche
                </h3>
            </div>
            <div class="col-12 col-sm-6 col-md-8 col-lg-9 col-xl-10 corps">

                <?php include('form.php');?>
            </div>
            <div class="col-12 pied">

                <h3>
                    Pied
                </h3>
            </div>
        </div>
    </div>

    <!--     <div class="menu">
        <h3>
            Menu
        </h3>
    </div>
    <div class="boite">
        <div class="gauche">
            <h3>
                Menu gauche
            </h3>
            <br>
        </div>
        <div class="corps">
            <h1>
                Contenu de la page
            </h1>
        </div>
    </div>
        
    <div class="pied">
        <h3>
            Pied de la page
        </h3>
    </div> -->

</body>

</html>