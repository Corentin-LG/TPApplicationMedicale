<?php
require('header_generique_secretaire.php');
?>
<html>
                    <div class="Left-body">
                        <div class="Left-body-head">
                            Consulter rendez vous
                        </div>
                        <div class="infos">

                        </div>
                        <div class="en_bref">
                                <table>
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
                                            $listRDVs = $Util->getAllRendezVous();
                                            foreach ($listRDVs as $rdv) {
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
require('footer_generique_secretaire.php');
?>