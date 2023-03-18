<?php
require('header_generique_secretaire.php');
?>
<html>
                    <div class="Left-body">
                        <div class="Left-body-head">
                            Ajouter un nouveau patient
                        </div>
                        <div class="infos">

                        </div>
                        <div class="en_bref">
                            <form action="../Controller/secretaire_ajout_patient_2bdd.php" method="post">
                                <br />
                                <label>Nom :</label>
                                <input class="textfield_form" type="text" name="Nom_Patient" size="50" /><br />
                                <label>Prénom :</label>
                                <input class="textfield_form" type="text" name="Prenom_Patient" size="50" /><br />
                                <label>Sexe :</label>
                                <input class="textfield_form" type="radio" name="Sexe_Patient" value="Femme" />
                                Femme
                                <input class="textfield_form" type="radio" name="Sexe_Patient" value="Homme" />
                                Homme
                                <br /><br />
                                <label>Adresse :</label>
                                <textarea name="Adresse_Patient"></textarea>
                                <br />
                                <label>Ville :</label>
                                <input class="textfield_form" type="text" name="Ville_Patient" size="50" />
                                <label>Département :</label>
                                <input class="textfield_form" type="text" name="Departement_Patient" size="50" /><br /> <label>Date Naissance :</label>
                                <input type="date" name="Date_Naissance_Patient" />
                                <br />
                                <label>Situation familiale :</label>
                                <input type="radio" name="Situation_Familiale_Patient" value="Celibataire" />
                                Célibataire
                                <input type="radio" name="Situation_Familiale_Patient" value="Marie(e)" />
                                Marié(e)
                                <br /><br />

                                <label>Affiliation Mutuelle :</label>
                                <input class="textfield_form" type="text" name="Affiliation_Mutuelle_Patient" size="50" /><br />
                                <label>Date création dossier :</label>
                                <input type="date" name="Date_Creation_Dossier_Patient" />
                                <br />
                                <br /><br />

                                <input type="reset" name="effacer" value="Effacer" />
                                <input type="submit" name="valider" value="Ajouter" />
                            </form>
                        </div>


                    </div>
                    </html>
<?php
require('footer_generique_secretaire.php');
?>