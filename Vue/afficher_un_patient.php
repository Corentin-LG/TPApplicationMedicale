<?php
require('header_generique_secretaire.php');
?>
<html>
                    <div class="Left-body">
                        <div class="Left-body-head">
                            Afficher un patient
                        </div>
                        <div class="infos">

                        </div>
                        <div class="en_bref">
                            <form action="../Vue/details_un_patient.php" method="post">
                                <br />
                                <label>Nom :</label>
                                <input class="textfield_form" type="text" name="Nom_Patient" size="50" /><br />
                                <br /><br />
                                <input type="submit" name="valider" value="Chercher" />
                                <input type="reset" name="effacer" value="Effacer" />
                            </form>
                                <!-- <input type="text" name="N_Patient"><br>
                                <button onclick="getNP()">Click me</button> -->
                        </div>
                    </div>
</html>
<?php
require('footer_generique_secretaire.php');
?>