<h3>
    Formulaire
</h3>
<form action="<?php echo $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <div class="row">
        <div class="col-16 col-md-4 col-lg-3">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" style="border:1px solid black;"
                    value="<?php echo $nom;?>">
            </div>
        </div>
        <div class="col-16 col-md-4 col-lg-3">
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" name="prenom" value="<?php echo $prenom;?>"
                    style="border:1px solid black;">
            </div>
        </div>
        <div class="col-16 col-md-4 col-lg-3">
            <div class="form-group">
                <label for="date2naissance">Date de naissance</label>
                <input type="date" class="form-control" name="date2naissance" style="border:1px solid black;">
            </div>
        </div>
        <div class="col-16 col-md-4 col-lg-3">
            <div class="form-group">
                <label for="classe">Niceau</label>
                <select name="classe" class="form-control" style="border:1px solid black;">
                    <option value=""> choisir son niveau</option>
                    <?php
                        foreach($lesNiveaux AS $cle => $valeur):
                            $selected = $classe == $cle ? 'selected' : '';
                            echo "<option value=\"$cle\" $selected> $valeur </option>";
                        endforeach;
                    ?>
                </select>
            </div>
        </div>
        <div class="col-16 col-md-4 col-lg-3">
            <div class="form-group">
                <label for="genre">Genre</label> <br>
                <input type="radio" name="genre" value="Femme"> Femme <br>
                <input type="radio" name="genre" value="Homme"> Homme <br>

            </div>
        </div>
        <div class="col-16 col-md-4 col-lg-3">
            <div class="form-group">
                <label for="ues">Mes UEs</label> <br>
                <input type="checkbox" name="ues[]" value="WEB" checked> WEB <br>
                <input type="checkbox" name="ues[]" value="MERISE"> MERISE <br>
                <input type="checkbox" name="ues[]" value="WEB 1"> WEB <br>
                <input type="checkbox" name="ues[]" value="WEB 2.0" checked> WEB <br>
                <input type="checkbox" name="ues[]" value="WEB 3.0"> WEB <br>

            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="commentaire">Commentaire</label> <br>
                <textarea name="commentaire" style="border:1px solid black;" class="form-control"></textarea>

            </div>

        </div>
        <div class="col-12">
            <input type="submit" value="Valider" class="btn btn-primary ">

        </div>
    </div>
</form>