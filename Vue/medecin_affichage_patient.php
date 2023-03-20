<?php
require('header_generique_medecin.php');
?>
<html>
                    <div class="Left-body">
                        <div class="Left-body-head">
                            Mes patients
                        </div>
                        <div class="infos">

                        </div>
                        <div class="en_bref">

                            <form>
                            <span><strong><u>Consultation</u></strong></span>
                                <table id="table1">
                                    <thead>
                                        <tr>
                                            <th>Id_Patient</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Sexe</th>
                                            <th>Date de naissance</th>
                                            <th>Situation familiale</th>
                                            <th>Affiliation mutuelle</th>
                                            <th>Date de création du dossier</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $Medecin->setId_Medecin($_SESSION["ID_CONNECTED_USER"]);
                                        $result = $Util->searchAllConsultationPatientOfMedic($Medecin->getId_Medecin());
                                        foreach ($result as $patient) {
                                            echo '<tr>';
                                            echo '<td>' . $patient->getId_Patient() . '</td>';
                                            echo '<td>' . $patient->getNom_Patient() . '</td>';
                                            echo '<td>' . $patient->getPrenom_Patient() . '</td>';
                                            echo '<td>' . $patient->getSexe_Patient() . '</td>';
                                            echo '<td>' . $patient->getDate_Naissance_Patient() . '</td>';
                                            echo '<td>' . $patient->getSituation_Familiale_Patient() . '</td>';
                                            echo '<td>' . $patient->getAffiliation_Mutuelle() . '</td>';
                                            echo '<td>' . $patient->getDate_Creation_Dossier() . '</td>';
                                            echo '</tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <span><strong><u>Rendez-vous</u></strong></span>
                                <table id="table1">
                                    <thead>
                                        <tr>
                                            <th>Id_Patient</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Sexe</th>
                                            <th>Date de naissance</th>
                                            <th>Situation familiale</th>
                                            <th>Affiliation mutuelle</th>
                                            <th>Date de création du dossier</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $result = $Util->searchAllRendezVousPatientOfMedic($Medecin->getId_Medecin());
                                        foreach ($result as $patient) {
                                            echo '<tr>';
                                            echo '<td>' . $patient->getId_Patient() . '</td>';
                                            echo '<td>' . $patient->getNom_Patient() . '</td>';
                                            echo '<td>' . $patient->getPrenom_Patient() . '</td>';
                                            echo '<td>' . $patient->getSexe_Patient() . '</td>';
                                            echo '<td>' . $patient->getDate_Naissance_Patient() . '</td>';
                                            echo '<td>' . $patient->getSituation_Familiale_Patient() . '</td>';
                                            echo '<td>' . $patient->getAffiliation_Mutuelle() . '</td>';
                                            echo '<td>' . $patient->getDate_Creation_Dossier() . '</td>';
                                            echo '</tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                    </html>
<?php
require('footer_generique_medecin.php');
?>