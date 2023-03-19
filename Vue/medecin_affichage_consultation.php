<?php
require('header_generique_medecin.php');
?>
<html>
                    <div class="Left-body">
                        <div class="Left-body-head">
                            Consulter rendez vous
                        </div>
                        <div class="infos">

                        </div>
                        <div class="en_bref">
                                <table id="table1">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Date</th>
                                            <th>Compte Rendu</th>
                                            <th>ID Patient</th>
                                            <th>ID Médecin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $Util = new Util();
                                            $Utilisateur = $Util->getUtilisateurById($_SESSION["ID_CONNECTED_USER"]);
                                            $Medecin = new Medecin();
                                            $Medecin = $Utilisateur->getMedecin();
                                            $Medecin->setId_Medecin($_SESSION["ID_CONNECTED_USER"]);
                                            $result = $Util->getAllConsultationByMedic($Medecin->getId_Medecin());
                                            foreach ($result as $rdv) {
                                                echo '<tr>';
                                                echo '<td>' . $rdv->getId_Consultation() . '</td>';
                                                echo '<td>' . $rdv->getDate_Consultation() . '</td>';
                                                echo '<td>' . $rdv->getCompte_Rendu_Consultation() . '</td>';
                                                echo '<td>' . $rdv->getId_Patient() . '</td>';
                                                echo '<td>' . $rdv->getId_Medecin() . '</td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    </html>
<?php
require('footer_generique_medecin.php');
?>