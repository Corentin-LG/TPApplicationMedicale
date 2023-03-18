<?php
require('header_generique_secretaire.php');
?>
<html>
                    <div class="Left-body">
                        <div class="Left-body-head">
                            Détails du patient
                        </div>
                        <div class="infos">

                        </div>
                        <div class="en_bref">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Id_Patient</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Sexe</th>
                                        <th>Adresse</th>
                                        <th>Ville</th>
                                        <th>Département</th>
                                        <th>Date de naissance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomPatientRecu = $_POST["Nom_Patient"];
                                    $tableauPatient = $Util->searchPatientByName($nomPatientRecu);
                                    foreach ($tableauPatient as $patient) {
                                        echo "<tr>";
                                        echo "<td>" . $patient->getId_Patient() . "</td>";
                                        echo "<td>" . $patient->getNom_Patient() . "</td>";
                                        echo "<td>" . $patient->getPrenom_Patient() . "</td>";
                                        echo "<td>" . $patient->getSexe_Patient() . "</td>";
                                        echo "<td>" . $patient->getAdresse_Patient() . "</td>";
                                        echo "<td>" . $patient->getVille_Patient() . "</td>";
                                        echo "<td>" . $patient->getDepartement_Patient() . "</td>";
                                        echo "<td>" . $patient->getDate_Naissance_Patient() . "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                    </html>
<?php
require('footer_generique_secretaire.php');
?>