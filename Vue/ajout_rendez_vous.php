<?php
require('header_generique_secretaire.php');
?>
<html>
                    <div class="Left-body">
                        <div class="Left-body-head">
                            Ajouter un nouveau rendez-vous
                        </div>
                        <div class="infos">

                        </div>
                        <div class="en_bref">
                            <form action="../Controller/ajout_rendez_vous_bdd.php" method="post">
                                <br />
                                <label>Date :</label>
                                <input class="textfield_form" type="text" name="Date_Rendez_Vous" size="50" /><br />
                                <label>N° de salle :</label>
                                <input class="textfield_form" type="text" name="Salle_Rendez_Vous" size="50" /><br />
                                <label>ID du patient :</label>
                                <select name="Id_Patient" class="form-control">
                                    <?php
                                    $Util = new Util();
                                    $Util->dbConnection();

                                    $query = "SELECT Id_Patient, Nom_Patient, Prenom_Patient FROM patient";
                                    $result = mysqli_query($Util->mysqli, $query);

                                    if ($Util->mysqli->connect_error) {
                                        die('Erreur de connexion (' . $Util->mysqli->connect_errno . ')' . $Util->mysqli->connect_error);
                                    }

                                    $patients = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                    foreach ($patients as $patient) {
                                        echo '<option value="' . $patient['Id_Patient'] . '">' . $patient['Nom_Patient'] . ' ' . $patient['Prenom_Patient'] . '</option>';
                                    }
                                    ?>
                                </select>


                                
                                <label>ID du médecin :</label>
                                <select name="Id_Medecin" class="form-control">
                                    <?php
                                    $Util = new Util();
                                    $Util->dbConnection();

                                    $query = "SELECT Id_Medecin, Nom_Medecin, Prenom_Medecin FROM medecin";
                                    $result = mysqli_query($Util->mysqli, $query);

                                    if ($Util->mysqli->connect_error) {
                                        die('Erreur de connexion (' . $Util->mysqli->connect_errno . ')' . $Util->mysqli->connect_error);
                                    }

                                    $patients = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                    foreach ($patients as $patient) {
                                        echo '<option value="' . $patient['Id_Medecin'] . '">' . $patient['Nom_Medecin'] . ' ' . $patient['Prenom_Medecin'] . '</option>';
                                    }
                                    ?>
                                </select>
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