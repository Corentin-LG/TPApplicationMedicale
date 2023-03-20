<?php
require('header_generique_medecin.php');
?>
<html>
                    <div class="Left-body">
                        <div class="Left-body-head">
                            Mes rendez-vous
                        </div>
                        <div class="infos">

                        </div>
                        <div class="en_bref">
                                <table id="table1">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Date</th>
                                            <th>Salle</th>
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
                                            $result = $Util->getAllRendezVousByMedic($Medecin->getId_Medecin());
                                            foreach ($result as $rdv) {
                                                echo '<tr>';
                                                echo '<td>' . $rdv->getId_Rendez_Vous() . '</td>';
                                                echo '<td>' . $rdv->getDate_Rendez_Vous() . '</td>';
                                                echo '<td>' . $rdv->getSalle_Rendez_Vous() . '</td>';
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