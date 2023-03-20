<?php
require('header_generique_medecin.php');
?>
<html>
<div class="Left-body">
    <div class="Left-body-head">
        Afficher un patient
    </div>
    <div class="infos">

    </div>
    <div class="en_bref">
        <form action="../Vue/medecin_details_patient.php" method="post">
            <br />
            <label>Nom :</label>
            <input class="textfield_form" type="text" name="Nom_Patient" size="50" /><br />
            <br /><br />
            <input type="submit" name="valider" value="Chercher" />
            <input type="reset" name="effacer" value="Effacer" />
        </form>
    </div>
</div>

</html>
<?php
require('footer_generique_medecin.php');
?>