<?php
require('header_generique_medecin.php');
?>
<html>
<div class="Left-body">
    <div class="Left-body-head">
        Afficher un rendez vous
    </div>
    <div class="infos">

    </div>
    <div class="en_bref">
        <form action="../Vue/medecin_rendez_vous_details.php" method="post">
            <br />
            <label>Date :</label>
            <input class="textfield_form" type="text" name="Date_Rendez_Vous" size="50" /><br />
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